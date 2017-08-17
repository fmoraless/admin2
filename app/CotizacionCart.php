<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CotizacionCart extends Model
{
    protected $fillable = ["status"];
    
    public static function findOrCreateBySessionID($cotizacion_cart_id) {
        if($cotizacion_cart_id)
            //Buscar carro de cotizacion con este ID
            return CotizacionCart::findbySession ($cotizacion_cart_id);
        else
            // crear un carro de cotizacion
            return CotizacionCart::createWithoutSession ();
    }
    
    public static function findbySession($cotizacion_cart_id){
        return CotizacionCart::find($cotizacion_cart_id);
    }
    
    public static function createWithoutSession(){
        
        return CotizacionCart::create([
            "status" => "incompleted"
        ]);
        
    }
}
