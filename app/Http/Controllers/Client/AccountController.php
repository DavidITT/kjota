<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'general');
        $queriesAllowed = array(0 => 'tracking', 1 => 'orders');
        //Search query in array of queries allowed
        $search = in_array($activeTab, $queriesAllowed);

        if ($search) {
            $activeTab = $request->query('tab');
            return view('client.account.index', compact('activeTab'));
        } else {
            $activeTab = 'general';
            return view('client.account.index', compact('activeTab'));
        }

    }
}
