<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			//
            $table->increments('id');
            $table->integer('name_token');
            $table->integer('tag_line_token');
            $table->string('logo');
            $table->integer('address_token');
            $table->integer('contact_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::dropifExists('company');
    }

}