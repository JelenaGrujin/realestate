<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateTerracesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_terraces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('terrace_id');
            $table->unique(['realestate_id','terrace_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_terraces', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('terrace_id')->references('id')->on('terraces')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_terraces');
/*
        Schema::table('realestate_terraces',function (Blueprint $table){
            $table->dropForeign('realestate_terraces_realestate_id_foreign');
            $table->dropForeign('realestate_terraces_terrace_id_foreign');
        });*/
    }
}
