<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
      $data = Product::all();
      return view('menu-2', compact('data'));
    }
}
