<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('qty_01_21');
            $table->bigInteger('qty_02_21');
            $table->bigInteger('qty_03_21');
            $table->bigInteger('qty_04_21');
            $table->bigInteger('qty_05_21');
            $table->bigInteger('qty_06_21');
            $table->bigInteger('qty_07_21');
            $table->bigInteger('qty_08_21');
            $table->bigInteger('qty_09_21');
            $table->bigInteger('qty_10_21');
            $table->bigInteger('qty_11_21');
            $table->bigInteger('qty_12_21');
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
        Schema::dropIfExists('quantities');
    }
}
