<?php

use Illuminate\Database\Seeder;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++) {
            DB::table('entradas')->insert([
                'data' => '2018-' . rand(1, 12) . '-'. rand(1,29),
                'valor'=> rand(1.0, 100.0),
                'idusuario'=> rand(1,5),
                'idcusto'=> rand(1,10)
            ]);
        }
    }
}
