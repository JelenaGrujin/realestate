<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateObjectTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate_object_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('realestate_id');
            $table->unsignedBigInteger('object_type_id');
            $table->unique(['realestate_id','object_type_id']);

            $table->timestamps();
        });

        Schema::table('realestate_object_types', function (Blueprint $table) {
            $table->foreign('realestate_id')->references('id')->on('realestates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('object_type_id')->references('id')->on('object_types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_object_types');

        Schema::table('realestate_object_types',function (Blueprint $table){
            $table->dropForeign('realestate_object_types_realestate_id_foreign');
            $table->dropForeign('realestate_object_types_object_type_id_foreign');
        });
    }
}
