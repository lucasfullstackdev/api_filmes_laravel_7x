<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme', function (Blueprint $table) {
            $table->increments('id');

            $table->string('titulo');
            $table->timestamp('dt_lancamento');
            $table->string('duracao');
                        
            $table->integer('classificacao_id')->unsigned();
            $table->foreign('classificacao_id')->references('id')->on('classificacao');

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
        Schema::table('filme', function (Blueprint $table) {
            $table->dropForeign(['classificacao_id']);
            $table->dropColumn('classificacao_id');
        });

        Schema::dropIfExists('filme');
    }
}
