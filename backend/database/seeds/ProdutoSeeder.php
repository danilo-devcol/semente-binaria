<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = array(
            ['1','alface', 2],
            ['2','couve', 2],
            ['3','ovo', 1],
            ['4','queijo', 1],
        );
        foreach($dados as $dado) {
            DB::table('produtos')->insert([
                'idproduto' => $dado[0],
                'nome' => $dado[1],
                'idcategoria'=> $dado[2]
            ]);
        }
    }
}
