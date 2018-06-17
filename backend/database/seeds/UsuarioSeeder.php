<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = array(
            ['1','igor', "Igor Martins"],
            ['2','danilo', "Danilo Machado"],
            ['3','gilmar', "Gilmar"],
            ['4','pedro', "João Pedro"],
            ['5','vitor', "João Vitor"],
        );
        foreach($dados as $dado) {
            DB::table('usuarios')->insert([
                'idusuario' => $dado[0],
                'login' => $dado[1],
                'nome'=> $dado[2]
            ]);
        }
    }
}
