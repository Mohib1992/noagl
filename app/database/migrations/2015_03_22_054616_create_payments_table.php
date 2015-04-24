<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->date('payment_date');
            $table->float('amount');
            $table->string('reference');
            $table->enum('payment_status',array('cancelled','completed','disputed'));
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->integer('payment_method_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
    public function down()
    {
        Schema::dropifExsist('payments');
    }

}