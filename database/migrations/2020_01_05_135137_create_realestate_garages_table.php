<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateGaragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_garages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('garage_id');
            $table->unique(['realestate_id','garage_id']);

            $table->timestamps();
        });

        Schema::table('realestate_garages', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('garage_id')->references('id')->on('garages')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_garages');

        Schema::table('realestate_garages',function (Blueprint $table){
            $table->dropForeign('realestate_garages_realestate_id_foreign');
            $table->dropForeign('realestate_garages_garage_id_foreign');
        });
    }
}
