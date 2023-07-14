<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $popular_categories = Category::where('status', 1)
            ->where('parent_id', null)
            ->where('popular_category', 1)
            ->orderBy('priority', 'desc')
            ->with('image')
            ->get();
        return view('client.home.index', compact('popular_categories'));
    }
}
