<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ds_classificacao')->unique();
            $table->string('ds_observacao');
            $table->text('ds_violencia');
            $table->text('ds_sexo_nudez');
            $table->text('ds_drogas');

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
        Schema::dropIfExists('classificacao');
    }
}
