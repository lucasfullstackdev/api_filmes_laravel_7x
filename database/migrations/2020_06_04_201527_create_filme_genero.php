<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeGenero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_genero', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filme');

            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filme_genero', function (Blueprint $table) {
            $table->dropForeign(['filme_id']);
            $table->dropColumn('filme_id');

            $table->dropForeign(['genero_id']);
            $table->dropColumn('genero_id');
        });

        Schema::dropIfExists('filme_genero');
    }
}
