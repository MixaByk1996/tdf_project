<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('photo_url')->default('');
            $table->string('article')->default('');
            $table->string('description')->default('');
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
        Schema::dropIfExists('excel');
    }
}
