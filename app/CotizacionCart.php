<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CotizacionCart extends Model {

    // Mass assignment
    protected $fillable = ['status'];
    
    public function in_cotizacion_carts() {
        return $this->hasMany('App\InCotizacionCart');
    }
    
    public function articles() {
        return $this->belongsToMany('App\Article', 'in_cotizacion_carts');
    }

    public function articlesSize() {
        return $this->articles()->count();
    }

    public static function findOrCreateBySessionID($cotizacion_cart_id) {
        if ($cotizacion_cart_id)
        //Buscar carro de cotizacion con este ID
            return CotizacionCart::findbySession($cotizacion_cart_id);
        else
        // crear un carro de cotizacion
            return CotizacionCart::createWithoutSession();
    }

    public static function findbySession($cotizacion_cart_id) {
        return CotizacionCart::find($cotizacion_cart_id);
    }

    public static function createWithoutSession() {

        return CotizacionCart::create([
                    "status" => "incompleted"
        ]);
    }

}
