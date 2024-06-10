<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function showForum()
    {
        $discussions = Discussion::all();
        return view('forum', compact('discussions'));
    }

    public function show(Discussion $discussion)
    {
        // $games = Game::all();
        $comments = Comment::where('discussion_id', $discussion->id)->get();
        // $lastposts = Post::latest()->take(5)->get();
        // return view('post', compact('post', "games", "comments", "lastposts"));
        return view('discussion', compact('discussion', 'comments'));
    }
}
