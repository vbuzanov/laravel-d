<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->float('price_01_21');
            $table->float('price_02_21');
            $table->float('price_03_21');
            $table->float('price_04_21');
            $table->float('price_05_21');
            $table->float('price_06_21');
            $table->float('price_07_21');
            $table->float('price_08_21');
            $table->float('price_09_21');
            $table->float('price_10_21');
            $table->float('price_11_21');
            $table->float('price_12_21');
            $table->unsignedBigInteger('consumer_id');
            $table->timestamps();
            $table->foreign('consumer_id')->references('id')->on('consumers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
