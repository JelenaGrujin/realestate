<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateKitchensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_kitchens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('kitchen_id');
            $table->unique(['realestate_id','kitchen_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_kitchens', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kitchen_id')->references('id')->on('kitchen')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_kitchens');
/*
        Schema::table('realestate_kitchens',function (Blueprint $table){
            $table->dropForeign('realestate_kitchens_realestate_id_foreign');
            $table->dropForeign('realestate_kitchens_kitchen_id_foreign');
        });*/
    }
}
