<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\follow;
use App\Models\Forum;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum_management', [
            'forums' => Forum::with('subscribers')->where('admin_id', auth()->user()->id)->simplePaginate(10)
        ]);
    }

    public function create()
    {
        return view('create_forum');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string|max:1000',
        ]);

        Forum::create([
            'title' => $request->title,
            'description' => $request->description,
            'admin_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('status', 'با موفقیت ایجاد شد ;)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        return view('forum_edit', ['forum' => $forum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string|max:1000',
        ]);

        $forum->title = $request->title;
        $forum->description = $request->description;

        $forum->save();

        return redirect()->back()->with('status', 'با موفقیت بروزرسانی شد ;)');
    }

    public function explore()
    {
        return view('forum_explore', ['forums' => Forum::with(['admin', 'subscribed'])->withCount('subscribers')->orderBy('created_at', 'desc')->simplePaginate(5)]);
    }

    public function subscribe(Forum $forum)
    {
        $subscribe = Follow::where('user_id', auth()->user()->id)->where('forum_id', $forum->id)->get();

        if ($subscribe->isEmpty()) {
            Follow::create([
                'user_id' => auth()->user()->id,
                'forum_id' => $forum->id,
            ]);
        } else {
            $subscribe->first()->delete();
        }

        return redirect()->back();
    }

    public function subscribed()
    {
        $forums = Forum::whereHas('subscribed', function ($query) {
            $query->where('user_id', auth()->user()->id);
        });
        return view('forum_subscribed', ['forums' => $forums->simplePaginate(10)]);
    }

    public function posts(Forum $forum)
    {
        $posts = Post::where('forum_id', $forum->id)->orderBy('updated_at', 'desc');
        return view('forum_post', ['forum' => $forum, 'posts' => $posts->simplePaginate(10)]);
    }

    public function documents(Request $request, Forum $forum)
    {
        $searchTerm = $request->search ?? '';
        $documents = Document::with(['logs' => function ($query) {
            $query->latest('created_at')->take(1);
        }])->whereHas('forums', function ($query2) use ($forum) {
            $query2->where('forum_id', $forum->id);
        })->whereHas('logs', function ($query) use ($searchTerm) {
            if (!empty($searchTerm)) {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description', 'like', '%' . $searchTerm . '%')
                        ->orWhere('university', 'like', '%' . $searchTerm . '%')
                        ->orWhere('department', 'like', '%' . $searchTerm . '%')
                        ->orWhere('professor', 'like', '%' . $searchTerm . '%')
                        ->orWhere('lesson', 'like', '%' . $searchTerm . '%');
                });
            }
        })->simplePaginate(10);

        return view('forum_document', ['documents' => $documents,'forum'=>$forum]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();
        return redirect()->back()->with('status', 'با موفقیت حذف شد ;)');
    }
}
