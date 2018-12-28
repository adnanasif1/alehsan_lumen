<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTableSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customerid');
            $table->unsignedInteger('saleitemid');
            $table->string('details', 150)->nullable();
            $table->float('quantity');
            $table->unsignedSmallInteger('rate');
            $table->unsignedSmallInteger('carriage')->default(0);
            $table->unsignedMediumInteger('total');
            $table->date('saledate');
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
        Schema::dropIfExists('sales');
    }
}