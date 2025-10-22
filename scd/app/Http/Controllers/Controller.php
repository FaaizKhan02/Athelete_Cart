<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Controller{
    
}
class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }
}