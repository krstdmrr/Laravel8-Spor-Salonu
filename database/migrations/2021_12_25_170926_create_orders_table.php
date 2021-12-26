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
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->date('Startdate');
            $table->date('Finishdate');
            $table->integer('months');
            $table->float('price');
            $table->string('trainer',40);
            $table->float('total');
            $table->string('payment','10');
            $table->string('IP',32);
            $table->string('note','150');
            $table->string('status','30')->default('New');
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
