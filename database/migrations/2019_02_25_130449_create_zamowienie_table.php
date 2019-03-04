<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamowienieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ilosc');
            $table->integer('product_idproduct');
            $table->foreign('product_idproduct')->references('id')->on('product')->onDelete('cascade');
            $table->integer('user_iduser');
            $table->foreign('user_iduser')->references('id')->on('user')->onDelete('cascade'); 
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
        Schema::dropIfExists('zamowienie');
    }
}
