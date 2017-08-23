<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInCotizacionCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_cotizacion_carts', function(Blueprint $table){
            $table->increments("id");
            
            $table->integer('article_id')->unsigned();
            $table->integer('cotizacion_cart_id')->unsigned();
            
            $table->foreign('article_id')->references("id")->on("articles");
            
            $table->foreign('cotizacion_cart_id')->references("id")->on("cotizacion_carts");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('in_cotizacion_carts');
    }
}
