<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CotizacionCart;
use App\Article;

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
        
        
        
        
        $articles = \App\Article::paginate();
//        return view("articles.index",["articles" => $articles]);
        return view('home', compact('articles'));
        
    }
}
