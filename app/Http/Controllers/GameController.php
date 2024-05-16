<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use PDO;

class GameController extends Controller
{
    public function showGames()
    {
        $games = Game::all();

        return view('games', compact("games"));
    }

    public function show(Game $game)
    {
        $games = Game::all();
        return view('game', compact("game", "games"));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('public/images', $imageName);


        $game = Game::create([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'image_path' => 'images/' . $imageName,

        ]);


        return redirect('admin/games');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        $game = Game::findOrFail($id);

        $game->update($request->all());

        return redirect('admin/games');
    }

    public function gameadmin()
    {
        $games = Game::all();
        $categories = Category::all();
        return view('admin.game', compact("games", "categories"));
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect('admin/games');
    }
}
