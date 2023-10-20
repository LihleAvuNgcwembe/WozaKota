<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu-2');
    }
}
