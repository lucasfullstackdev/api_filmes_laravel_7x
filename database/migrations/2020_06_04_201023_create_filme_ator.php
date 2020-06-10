<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeAtor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_ator', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filme');

            $table->integer('ator_id')->unsigned();
            $table->foreign('ator_id')->references('id')->on('ator');

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
        Schema::table('filme_ator', function (Blueprint $table) {
            $table->dropForeign(['filme_id']);
            $table->dropColumn('filme_id');

            $table->dropForeign(['ator_id']);
            $table->dropColumn('ator_id');
        });

        Schema::dropIfExists('filme_ator');
    }
}
