<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateHeatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_heatings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('heating_id');
            $table->unique(['realestate_id','heating_id']);

            $table->timestamps();
        });

        Schema::table('realestate_heatings',function (Blueprint $table){
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('heating_id')->references('id')->on('heatings')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_heatings');

        Schema::table('realestate_heatings', function (Blueprint $table){
            $table->dropForeign('realestate_heatings_realestate_id_foreing');
            $table->dropForeign('realestate_heatings_heating_id_foreing');
        });
    }
}
