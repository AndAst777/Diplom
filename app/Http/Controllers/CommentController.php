<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Discussion $discussionID)
    {

        $discussion = Discussion::find($discussionID);

        $comment = new Comment;
        $comment->user_id = auth()->user()->id;
        $comment->discussion_id = $discussion->id;
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back();
    }

    public function show(Comment $comment, Discussion $discussion)
    {

        $comments = Comment::where('post_id', $discussion->id)->get();

        return view('discussion', compact( "comments"));
    }


}
