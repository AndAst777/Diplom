<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function categories()
    {
        $categories = Category::all();

        return view('main', compact("categories"));
    }
}
