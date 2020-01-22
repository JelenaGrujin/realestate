<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOwnerContactsTable extends Migration {

	public function up()
	{
		Schema::create('owner_contacts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 30);
			$table->string('phone', 15);
			$table->string('email', 50);
            $table->unsignedBigInteger('owner_id');

            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('owner_contacts', function (Blueprint $table) {
            $table->foreign('owner_id')->references('id')->on('owners')->onUpdate('cascade')->onDelete('cascade');
        });
	}

	public function down()
	{
		Schema::drop('owner_contacts');

        Schema::table('owner_contacts', function(Blueprint $table) {
            $table->dropForeign('owner_contacts_owner_id_foreign');
        });
	}
}
