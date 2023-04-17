<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 128);
            $table->string('sobrenome', 128);
            $table->string('ramo', 128);
            $table->string('idade');
            $table->longText('descricao');
            $table->integer('times');
            $table->string('imagem')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personagens');
    }
}
