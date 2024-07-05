<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum, Post $post)
    {
        $post->delete();
        return redirect()->back()->with('status', 'با موفقیت حذف شد ;)');
    }
}
