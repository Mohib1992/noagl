<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->integer('product_name_token');
            $table->integer('product_description');
            $table->float('unit_price');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
    public function down()
    {
        Schema::dropifExsist('products');
    }
}