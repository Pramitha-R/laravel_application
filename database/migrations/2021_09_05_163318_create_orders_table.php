<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('PID');
            $table->integer('EID');
            $table->integer('CID');
            $table->string('emp_name');
            $table->string('product');
            $table->string('detail');
            $table->integer('price');
            $table->string('cust_name');
            $table->string('cust_address');
            $table->integer('cust_mobile');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
