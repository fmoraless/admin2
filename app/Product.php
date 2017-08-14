<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function index() {
        $products = Product::all();
        return view("products.index", ["products" => $products]);
    }

}
