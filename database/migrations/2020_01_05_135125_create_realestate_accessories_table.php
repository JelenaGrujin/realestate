<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('accessories_id');
            $table->unique(['realestate_id','accessories_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_accessories', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('accessories_id')->references('id')->on('accessories')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_accessories');
/*
        Schema::table('realestate_accessories',function (Blueprint $table){
            $table->dropForeign('realestate_accessories_realestate_id_foreign');
            $table->dropForeign('realestate_accessories_accessories_id_foreign');
        });*/
    }
}
