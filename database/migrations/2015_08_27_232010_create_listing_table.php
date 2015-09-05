<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesslists', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('bname', 255);
            $table->string('city', 255);
            $table->string('cname', 255);
            $table->string('email', 255);
            $table->integer('phone');

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
        Schema::drop('businesslists');
    }

}