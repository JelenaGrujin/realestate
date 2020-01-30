<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('claim_id');
            $table->unique(['realestate_id','claim_id']);

            $table->timestamps();
        });
/*
        Schema::table('realestate_claims',function (Blueprint $table){
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('claim_id')->references('id')->on('claims')->onUpdate('cascade')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_claims');
/*
        Schema::table('realestate_claims',function (Blueprint $table){
            $table->dropForeign('realestate_claims_realestate_id_foreign');
            $table->dropForeign('realestate_claims_claim_id_foreign');
        });*/
    }
}
