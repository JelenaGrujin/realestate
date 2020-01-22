<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentOptionsTable extends Migration {

	public function up()
	{
		Schema::create('payment_options', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 30);

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('payment_options');
	}
}
