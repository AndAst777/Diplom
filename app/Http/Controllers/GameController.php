<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Platform;
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

    public function showpostgame(Game $game)
    {
        $games = Game::all();
        return view('post_game', compact("game", "games"));
    }

    public function store(Request $request)
    {


        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'translate' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        $game = Game::create([
            'title' => $validateData['title'],
            'translate' => $validateData['translate'],
            'description' => $validateData['description'],
            'platform' => $validateData['platform'],

        ]);
        $game->image = $request->file('image')->store('images', 'public');
        $game->save();

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
        $platforms = Platform::all();
        return view('admin.game', compact("games", "categories", "platforms"));
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect('admin/games');
    }
}
