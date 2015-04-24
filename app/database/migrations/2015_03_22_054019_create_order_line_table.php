<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderLineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_line', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->integer('quantity');
            $table->float('unit_sale_price');
            $table->float('subtotal');
            $table->integer('product_id');
            $table->integer('order_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
    public function down()
    {
        Schema::dropifExsist('order_line');
    }

}