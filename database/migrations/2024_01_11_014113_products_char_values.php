<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsCharValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_char_values', function (Blueprint $table) {
            $table->id();
            $table->integer('product_char_type_id');//->references('id')->on('products_char_type')->OnDelete('cascade');
            $table->integer('product_id');//->references('id')->on('products')->OnDelete('cascade');
            $table->string("char_value");
        });
    }


    public function down()
    {
        Schema::dropIfExists('products_char_values');
    }
}
