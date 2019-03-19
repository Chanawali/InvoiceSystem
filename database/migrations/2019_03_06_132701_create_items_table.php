<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('itemcode')->length(30);
            $table->integer('itemcode')->unsigned();
            $table->foreign('companyid')->references('id')->on('contacts');
            $table->string('itemname')->length(30);
            $table->string('itemname')->length(30);
            $table->float('rate')->length(30);
            $table->integer('taxgroupid')->unsigned();
            $table->foreign('taxgroupid')->references('id')->on('taxgroups');
            $table->integer('taxid')->unsigned();
            $table->foreign('taxid')->references('id')->on('taxes');
            $table->float('percentage')->length(30);
            $table->float('total')->length(30);
            $table->string('description')->length(30);
            $table->integer('status')->length(1);
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
        Schema::dropIfExists('items');
    }
}
