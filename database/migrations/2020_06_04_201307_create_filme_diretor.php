<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeDiretor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_diretor', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filme');

            $table->integer('diretor_id')->unsigned();
            $table->foreign('diretor_id')->references('id')->on('diretor');

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
        Schema::table('filme_diretor', function (Blueprint $table) {
            $table->dropForeign(['filme_id']);
            $table->dropColumn('filme_id');

            $table->dropForeign(['diretor_id']);
            $table->dropColumn('diretor_id');
        });

        Schema::dropIfExists('filme_diretor');
    }
}
