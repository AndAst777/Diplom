<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function posts()
    {
        $status = true;
        $posts = Post::where('is_published', $status)->get();

        $games = Game::all();
        return view('main', compact("posts", "games"));
    }

    public function to_publish(Post $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();

        return redirect('/');
    }


    public function publications()
    {
        // $status = true;
        // $posts = Post::where('is_published', $status)->get();


        $auth_user = Auth::user()->id;
        $posts = Post::where('user_id', $auth_user)->get();
        $games = Game::all();
        return view('publications', compact("posts", "auth_user", "games"));
    }

    // public function show(string $id)
    // {
    //     $post = Post::findOrFail($id);
    //     return view('post', compact("post"));
    // }

    public function show(Post $post)
    {
        $games = Game::all();
        return view('post', compact('post', "games"));
    }



    public function store(Request $request)
    {

        $user = Auth::user()->id;

        $validateData = $request->validate([
            // 'user_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255'

        ]);

        $post = Post::create([
            // 'user_id' => $user['user_id'],
            'user_id' => $user,
            'title' => $validateData['title'],
            'body' => $validateData['body'],

        ]);

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
