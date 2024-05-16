<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $games = Game::all();

        return view('profile', compact("games"));
    }

    public function update()
    {
    }
}
