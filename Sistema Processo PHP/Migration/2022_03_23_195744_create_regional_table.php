<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->string('sigla', 3);
            $table->string('email')->unique();
            $table->string('telefone', 11);
            $table->text('descricao');
            $table->boolean('status')->default(false);
            $table->string('endereco', 200);

            $table->unsignedBigInteger('uf_id');
            $table->foreign('uf_id')->references('id')->on('uf');

            $table->unsignedBigInteger('organizacao_id');
            $table->foreign('organizacao_id')->references('id')->on('organizacao');
            
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regional');
    }
};
