<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard';
        return view('dashboard', compact('title'));
    }
}
