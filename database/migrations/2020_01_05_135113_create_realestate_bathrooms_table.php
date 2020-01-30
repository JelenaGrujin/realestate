<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateBathroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_bathrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('bathroom_id');
            $table->unique(['realestate_id','bathroom_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_bathrooms', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bathroom_id')->references('id')->on('bathrooms')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_bathrooms');
/*
        Schema::table('realestate_bathrooms',function (Blueprint $table){
            $table->dropForeign('realestate_bathrooms_realestate_id_foreign');
            $table->dropForeign('realestate_bathrooms_bathroom_id_foreign');
        });*/
    }
}
