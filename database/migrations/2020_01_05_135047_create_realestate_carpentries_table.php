<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateCarpentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_carpentries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('carpentry_id');
            $table->unique(['realestate_id','carpentry_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_carpentries',function (Blueprint $table){
            $table->foreign('realestate_id')->references('id')->on('realestates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('carpentry_id')->references('id')->on('carpentries')->onDelete('cascade')->onUpdate('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_carpentries');
/*
        Schema::table('realestate_carpentries', function (Blueprint $table){
            $table->dropForeign('realestate_carpentries_realestate_id_foreign');
            $table->dropForeign('realestate_carpentries_carpentry_id_foreign');
        });*/
    }
}
