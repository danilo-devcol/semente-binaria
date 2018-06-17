<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             CategoriaSeeder::class,
             CustoSeeder::class,
             ProdutoSeeder::class,
             ProdutoCustoSeeder::class,
             UsuarioSeeder::class,
             SaidaSeeder::class,
             EntradaSeeder::class
         ]);
    }
}
