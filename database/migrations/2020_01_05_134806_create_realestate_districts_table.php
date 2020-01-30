<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('district_id');
            $table->unique(['realestate_id','district_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_districts', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_districts');
/*
        Schema::table('realestate_districts',function (Blueprint $table){
            $table->dropForeign('realestate_districts_realestate_id_foreign');
            $table->dropForeign('realestate_districts_district_id_foreign');
        });*/
    }
}
