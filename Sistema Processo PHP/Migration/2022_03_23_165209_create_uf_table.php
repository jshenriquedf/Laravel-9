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
        Schema::create('uf', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->char('sigla', 2);
            $table->string('regiao', 40);
            $table->timestamps();
        });

        // Inseção na tabela UF
        DB::table('uf')->insert(
            [
                ['nome' => 'Acre', 'sigla' => 'AC', 'regiao' => 'Norte'],
                ['nome' => 'Alagoas', 'sigla' => 'AL', 'regiao' => 'Nordeste'],
                ['nome' => 'Amapá', 'sigla' => 'AP', 'regiao' => 'Norte'],
                ['nome' => 'Amazonas', 'sigla' => 'AM', 'regiao' => 'Norte'],
                ['nome' => 'Bahia', 'sigla' => 'BA', 'regiao' => 'Nordeste'],
                ['nome' => 'Ceará', 'sigla' => 'CE', 'regiao' => 'Nordeste'],
                ['nome' => 'Distrito Federal', 'sigla' => 'DF', 'regiao' => 'Centro-Oeste'],
                ['nome' => 'Espírito Santo', 'sigla' => 'ES', 'regiao' => 'Sudeste'],
                ['nome' => 'Goiás', 'sigla' => 'GO', 'regiao' => 'Centro-Oeste'],
                ['nome' => 'Maranhão', 'sigla' => 'MA', 'regiao' => 'Nordeste'],
                ['nome' => 'Mato Grosso',  'sigla' => 'MT', 'regiao' => 'Centro-Oeste'],
                ['nome' => 'Mato Grosso do Sul', 'sigla' => 'MS', 'regiao' => 'Centro-Oeste'],
                ['nome' => 'Minas Gerais', 'sigla' => 'MG', 'regiao' => 'Sudeste'],
                ['nome' => 'Pará', 'sigla' => 'PA', 'regiao' => 'Norte'],
                ['nome' => 'Paraíba', 'sigla' => 'PB', 'regiao' => 'Nordeste'],
                ['nome' => 'Paraná', 'sigla' => 'PR', 'regiao' => 'Sul'],
                ['nome' => 'Pernambuco', 'sigla' => 'PE', 'regiao' => 'Nordeste'],
                ['nome' => 'Piauí', 'sigla' => 'PI', 'regiao' => 'Nordeste'],
                ['nome' => 'Rio de Janeiro', 'sigla' => 'RJ', 'regiao' => 'Sudeste'],
                ['nome' => 'Rio Grande do Norte', 'sigla' => 'RN', 'regiao' => 'Nordeste'],
                ['nome' => 'Rio Grande do Sul', 'sigla' => 'RS', 'regiao' => 'Sul'],
                ['nome' => 'Rondônia', 'sigla' => 'RO', 'regiao' => 'Norte'],
                ['nome' => 'Roraima', 'sigla' => 'RR', 'regiao' => 'Norte'],
                ['nome' => 'Santa Catarina', 'sigla' => 'SC', 'regiao' => 'Sul'],
                ['nome' => 'São Paulo', 'sigla' => 'SP', 'regiao' => 'Sudeste'],
                ['nome' => 'Sergipe', 'sigla' => 'SE', 'regiao' => 'Nordeste'],
                ['nome' => 'Tocantins', 'sigla' => 'TO', 'regiao' => 'Norte']
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
        Schema::dropIfExists('uf');
    }
};
