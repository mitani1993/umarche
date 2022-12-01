<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', compact('products'));
    }
}
