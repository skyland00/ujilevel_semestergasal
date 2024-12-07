<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home');
    }

    public function shop()
    {
        return view('shop');
    }

    public function contact()
    {
        return view('contact');
    }

    public function cart()
    {
        return view('cart.shopping');
    }
}
