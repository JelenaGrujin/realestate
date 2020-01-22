<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	public function up()
	{
		Schema::create('Files', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->integer('sourceable_id');
			$table->string('sourceable_type', 30);
		});
	}

	public function down()
	{
		Schema::drop('Files');
	}
}
