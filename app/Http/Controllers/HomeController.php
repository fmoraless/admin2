<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CotizacionCart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizacion_cart_id = \Session::get('shopping_cart_id');
        
        $cotizacion_cart = CotizacionCart::findOrCreateBySessionID($cotizacion_cart_id);
        \Session::put("cotizacion_cart_id", $cotizacion_cart->id);
        
//        $articles = \App\Article::paginate();
//        return view("articles.index",["articles" => $articles]);
        return view('home', compact('articles'));
        return view('home', ["cotizacion_cart" => $cotizacion_cart]);
    }
}
