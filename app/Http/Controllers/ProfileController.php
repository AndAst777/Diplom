<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile(Request $request, Closure $next)
    {
        $games = Game::all();
        if (!Auth::check()) {
            return redirect('/');
        }

        if (!Auth::check()) {
            return redirect('auth.profile');
        }
        return view('auth.profile', compact("games"));
    }

    public function update()
    {
    }
}
