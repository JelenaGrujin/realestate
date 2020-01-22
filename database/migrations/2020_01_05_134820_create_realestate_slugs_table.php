<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateSlugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_slugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('slug_id');
            $table->unique(['realestate_id','slug_id']);

            $table->timestamps();
        });

        Schema::table('realestate_slugs', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('slug_id')->references('id')->on('slugs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_slugs');

        Schema::table('realestate_slugs',function (Blueprint $table){
            $table->dropForeign('realestate_slugs_realestate_id_foreign');
            $table->dropForeign('realestate_slugs_slug_id_foreign');
        });
    }
}
