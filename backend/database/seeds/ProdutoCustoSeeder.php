<?php

use Illuminate\Database\Seeder;

class ProdutoCustoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = array(
            ['1','1', '1'],
            ['2','1', '2'],
            ['3','1', '3'],
            ['4','1', '4'],
            ['5','1', '5'],
            ['6','1', '6'],
            ['7','1', '7'],
            ['8','2', '1'],
            ['9','2', '2'],
            ['10','2', '3'],
            ['11','2', '4'],
            ['12','2', '5'],
            ['13','2', '6'],
            ['14','3', '8'],
            ['15','3', '9'],
            ['16','3', '10'],
            ['17','4', '8'],
            ['18','4', '9'],
            ['19','4', '10'],
            ['20','1', '10'],
        );
        foreach($dados as $dado) {
            DB::table('produtos_custos')->insert([
                'idprodutoscustos' => $dado[0],
                'idproduto' => $dado[1],
                'idcusto' => $dado[2]
            ]);
        }
    }
}
