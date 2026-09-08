<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoConta;

class TipoContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipos = [
            [
                'nome' => 'Comunicação', 
                'descricao' => 'Contas referentes a telefonia, internet e outros serviços telefônicos'],
            [
                'nome' => 'Educação', 
                'descricao' => 'Cursos e outras atividades educacionais.'],
            [
                'nome' => 'Saúde', 
                'descricao' => 'Despesas médicas e de farmácia.'],
            ['nome' => 'Alimentação', 
                'descricao' => 'Compras em supermercados, restaurantes e outros locais de alimentação.'],
            [
                'nome' => 'Lazer', 
                'descricao' => 'Despesas relacionadas a atividades recreativas, passeios e outras atividades sociais.'],
            ['nome' => 'Transporte', 
                'descricao' => 'Passagens aéreas, carros, ônibus e outros tipos de transporte.'],
            [
                'nome' => 'Impostos', 
                'descricao' => 'Despesas relacionadas a impostos fiscais.'],
            ['nome' => 'Outros', 
                'descricao' => 'Outras despesas não categorizadas.'],
        ];

        foreach ($tipos as $tipo) {
            TipoConta::firstOrCreate($tipo);
        }
    }
}
