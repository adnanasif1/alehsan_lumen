<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTableCashreceived extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashreceived', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customerid');
            $table->unsignedMediumInteger('cashin');
            $table->date('cashindate');
            $table->string('details', 150)->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('cashreceived');
    }
}