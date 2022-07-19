<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_ID') ;
            $table->string('shop_ID' );
            $table->string('closed_at')->nullable() ;
            $table->integer('total_price') ;
            $table->integer('subtotal_price') ;
            $table->integer('total_weight') ;
            $table->integer('total_tax') ;
            $table->string('currency') ;
            $table->string('financial_status') ;
            $table->string('total_discounts') ;
            $table->string('name') ;
            $table->dateTime('processed_at') ;
            $table->string('fulfillment_status') ;
            $table->string('country') ;
            $table->string('province') ;
            $table->integer('total_production_cost') ;
            $table->integer('total_items') ;
            $table->integer('total_order_shipping_cost') ;
            $table->integer('total_order_handling_cost') ;
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
};
