<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
//        $orders = DB::table('orders')->
        return view('welcome', ['products' => $products]);
    }
}
