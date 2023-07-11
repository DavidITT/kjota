<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $branchs = Branch::with('image')->where('status', 1)->get();
        return view('client.about.index')->with('branchs', $branchs);
    }
}
