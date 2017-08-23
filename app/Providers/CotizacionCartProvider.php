<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CotizacionCart;

class CotizacionCartProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer("*", function($view){
        $cotizacion_cart_id = \Session::get('cotizacion_cart_id');
        $cotizacion_cart = CotizacionCart::findOrCreateBySessionID($cotizacion_cart_id);
        \Session::put("cotizacion_cart_id", $cotizacion_cart->id);
        
        $view->with("cotizacion_cart", $cotizacion_cart);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
