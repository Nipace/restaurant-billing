<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('food_id')->index()->unsigned()->nullable();
            $table->bigInteger('category_id')->index()->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('stock_id')->index()->unsigned()->nullable();
            $table->foreign('stock_id')->references('id')->on('stocks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity')->default(0);

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
        Schema::dropIfExists('food_stocks');
    }
}
