<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOwnersTable extends Migration {

	public function up()
	{
		Schema::create('owners', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('first_last_name', 50);
            $table->string('nickname', 15)->nullable();
			$table->string('email', 50);
			$table->string('phone', 15);
			$table->string('phone2', 15)->nullable();
            $table->string('source', 20);
            $table->date('birthday')->nullable();
			$table->bigInteger('UMCN');
			$table->smallInteger('ID_NUMBER');
			$table->string('company_name', 30)->nullable();
            $table->string('company_address', 50)->nullable();
            $table->string('responsible_person', 50)->nullable();
			$table->string('TIN', 15)->nullable();
			$table->smallInteger('company_number')->nullable();
			$table->smallInteger('activity_code')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->softDeletes();
		});

		Schema::table('owners', function (Blueprint $table){
		    $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
	}

	public function down()
	{
		Schema::drop('owners');

		Schema::table('owners', function (Blueprint $table){
		    $table->dropForeign('owners_user_id_foreign');
        });
	}
}
