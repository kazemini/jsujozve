<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\follow;
use App\Models\Forum;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    public function index(Forum $forum)
    {
        return view('post_management', ['posts' => Post::where('forum_id', $forum->id)->orderBy('updated_at', 'desc')->simplePaginate(3), 'forum' => $forum]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Forum $forum)
    {
        $validated = $request->validate([
            'post_content' => 'required|max:1000',
        ]);

        Post::create([
            'content' => $request->post_content,
            'forum_id' => $forum->id
        ]);

        return redirect()->back()->with(["status" => "پست جدید ایجاد شد"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum, Post $post)
    {
        return view('post_edit', ['forum' => $forum, 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum, Post $post)
    {
        $validated = $request->validate([
            'post_content' => 'required|string|max:1000',
        ]);

        $post->content = $request->post_content;

        $post->save();

        return redirect()->route('post.management', ['forum' => $forum])->with(["status" => "با موفقیت ویرایش شد"]);
    }

    public function explore()
    {
        $user = auth()->user();

        $posts = Post::whereHas('forum', function ($query) use ($user) {
            $query->whereHas('subscribers', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            });
        })->simplePaginate(10);

       return view('post_explore',['posts' => $posts]);
    }

    public function destroy(Forum $forum, Post $post)
    {
        $post->delete();
        return redirect()->back()->with('status', 'با موفقیت حذف شد ;)');
    }
}
