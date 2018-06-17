<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'idcategoria' => '1',
            'nome' => 'animal'
        ]);

        DB::table('categorias')->insert([
            'idcategoria' => '2',
            'nome' => 'vegetal'
        ]);
    }
}
