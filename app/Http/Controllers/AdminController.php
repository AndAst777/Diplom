<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function published(Post $post)
    {

        $post->update(['is_published' => true]);
    }

    public function unpublished()
    {
    }

    public function admin()
    {
        $status = TRUE;
        $posts = Post::where('is_published', $status)->get();
        $games = Game::all();
        return view('admin.admin', compact("posts", "games"));
    }

    public function moderation()
    {
        $status = FALSE;
        $posts = Post::where('is_published', $status)->get();
        $games = Game::all();
        return view('admin.moderation', compact("posts", "games"));
    }


    public function to_publish(Post $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();

        return redirect('/');
    }

    public function users()
    {
        $users = User::all();
        $games = Game::all();
        return view('admin.users', compact("users", "games"));
    }

    public function userDestroy(User $user)
    {
        $user->delete();
        return redirect('admin/users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
