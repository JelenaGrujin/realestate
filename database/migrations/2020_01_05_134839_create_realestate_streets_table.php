<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateStreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_streets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('street_id');
            $table->unique(['realestate_id','street_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_streets', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('street_id')->references('id')->on('streets')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_streets');
/*
        Schema::table('realestate_streets',function (Blueprint $table){
            $table->dropForeign('realestate_streets_realestate_id_foreign');
            $table->dropForeign('realestate_streets_street_id_foreign');
        });*/
    }
}
