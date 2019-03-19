<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estimateid')->unsigned();
            $table->foreign('estimateid')->references('id')->on('estimates');
            $table->integer('itemcode');
            $table->float('quantity')->length(30);
            $table->float('rate')->length(30);
            $table->float('amount')->length(30);
            $table->float('discount')->length(30);
            $table->float('total')->length(30);
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
        Schema::dropIfExists('estimate_items');
    }
}
