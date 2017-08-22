<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
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
        
//        $cotizacion_cart = CotizacionCart::return CotizacionCart::findBySession(null);
        
        $articles = \App\Article::paginate();
//        return view("articles.index",["articles" => $articles]);
        return view('home', compact('articles'));
//        return view('home', ["cotizacion_cart" => $cotizacion_cart]);
    }
}
