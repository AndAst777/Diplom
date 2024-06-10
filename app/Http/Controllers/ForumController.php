<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showForum()
    {
        $discuss = Forum::all();
        return view('forum', compact('discuss'));
    }
}
