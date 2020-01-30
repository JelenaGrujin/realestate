<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRealestatesTable extends Migration {

	public function up()
	{
		Schema::create('realestates', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('business_status_id');
            $table->string('street_number', 5);
            $table->string('realestate_number', 5);
			$table->decimal('price');
			$table->decimal('minimal_price');
			$table->decimal('deposit');
			$table->smallInteger('commission');
			$table->unsignedBigInteger('payment_option_id');
            $table->integer('construct_year')->nullable();
            $table->smallInteger('floors')->nullable();
            $table->smallInteger('of_floors')->nullable();
            $table->smallInteger('level')->nullable();
            $table->integer('salon')->nullable();
            $table->integer('surface_area')->nullable();
            $table->unsignedBigInteger('structure_id');
            $table->decimal('celling_height')->nullable();
            $table->smallInteger('number_of_rooms')->nullable();
            $table->smallInteger('number_of_bath')->nullable();
            $table->smallInteger('number_of_terrace')->nullable();
            $table->smallInteger('number_of_elevator')->nullable();
            $table->smallInteger('number_of_air_conditions')->nullable();
            $table->smallInteger('number_of_garage')->nullable();
            $table->decimal('info')->nullable();
            $table->decimal('electric')->nullable();
            $table->decimal('network')->nullable();
            $table->decimal('maintenance')->nullable();
            $table->string('description', 2000)->nullable();
			$table->string('note', 30)->nullable();
			$table->unsignedBigInteger('owner_id');
            $table->boolean('active')->default(true);
			$table->date('active_from_date')->nullable();

			$table->timestamps();
			$table->softDeletes();
		});
/*
        Schema::table('realestates', function (Blueprint $table) {
            $table->foreign('realestate_type_id')->references('id')->on('realestate_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payment_option_id')->references('id')->on('payment_options')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('structure_id')->references('id')->on('structures')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('owners')->onUpdate('cascade')->onDelete('cascade');
        });
*/
	}

	public function down()
	{
		Schema::drop('realestates');
/*
        Schema::table('realestates',function (Blueprint $table){
            $table->dropForeign('realestates_realestate_type_id_foreign');
            $table->dropForeign('realestates_status_id_foreign');
            $table->dropForeign('realestates_payment_option_id_foreign');
            $table->dropForeign('realestates_structure_id_foreign');
            $table->dropForeign('realestates_owner_id_foreign');
        });*/
	}
}
