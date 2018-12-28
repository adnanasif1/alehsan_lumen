<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTableAccountreceiveables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountreceiveables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customerid');
            $table->unsignedBigInteger('totalsale')->default(0);
            $table->unsignedBigInteger('totalcashin')->default(0);
            $table->unsignedInteger('balance');
            $table->date('lastsale');
            $table->date('lastcashin');
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
        Schema::dropIfExists('accountreceiveables');
    }
}