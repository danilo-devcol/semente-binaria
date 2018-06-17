<?php

use Illuminate\Database\Seeder;

class CustoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = array(
            ['1','adubo'],
            ['2','semente'],
            ['3','irrigação'],
            ['4','mão de obra'],
            ['5','transporte'],
            ['6','solo'],
            ['7','outros'],
            ['8','ração'],
            ['9','vacina'],
            ['10','manutenção']
        );
        foreach($dados as $dado) {
            DB::table('custos')->insert([
                'idcusto' => $dado[0],
                'nome' => $dado[1]
            ]);
        }
    }
}
