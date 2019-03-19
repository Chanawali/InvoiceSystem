<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->length(10);
            $table->string('company')->length(50);
            $table->string('fname')->length(50);
            $table->string('lname')->length(50);
            $table->string('mobile')->length(50);
            $table->string('phone')->length(50);
            $table->string('emailid')->length(50);
            $table->string('bill_building')->length(50);
            $table->string('bill_street')->length(50);
            $table->string('bill_area')->length(50);
            $table->string('bill_city')->length(50);
            $table->string('ship_building')->length(50);
            $table->string('ship_street')->length(50);
            $table->string('ship_area')->length(50);
            $table->string('ship_city')->length(50);
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
        Schema::dropIfExists('contacts');
    }
}
