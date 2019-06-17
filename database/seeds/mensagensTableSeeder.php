<?php

use Illuminate\Database\Seeder;
use App\Mensagem;
class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Prova',
            'texto' => 'Prova sobre capacitores',
            'autor' => 'Carlos Rocha',
            'user_id' => 1,
            'atividade_id' => 1
        ]);

        Mensagem::create([
            'titulo' => 'cama faz bem',
            'texto' => 'dormir é bom',
            'autor' => 'Carlos Rocha',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
    }
}
