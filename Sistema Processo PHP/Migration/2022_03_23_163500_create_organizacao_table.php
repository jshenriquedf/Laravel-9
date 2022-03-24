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
        Schema::create('organizacao', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->string('sigla', 3);
            $table->string('cnpj', 14)->unique();
            $table->string('email')->unique();
            $table->string('telefone', 11);
            $table->text('descricao');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('uf_id');
            $table->foreign('uf_id')->references('id')->on('uf');
            $table->string('endereco', 200);
            $table->timestamps();
        });

        // Inseção na tabela UF
        DB::table('organizacao')->insert(
            [
                [
                    'nome' => 'Conselho Federal de Química', 
                    'sigla' => 'CFQ', 
                    'cnpj' => '33839275000172',
                    'email' => 'ouvidoria@cfq.org.br',
                    'telefone' => '6120993300',
                    'descricao' => 'Autarquia Federal',
                    'status' => true,
                    'uf_id' => 7,
                    'endereco' => 'SCS - Quadra 09 - Bloco A - Edifício Parque Cidade Corporate - Torre B - Salas 901 a 905 I CEP: 70.308-200 - Brasília - DF'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizacao');
    }
};
