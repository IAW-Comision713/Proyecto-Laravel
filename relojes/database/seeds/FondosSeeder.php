<?php

use Illuminate\Database\Seeder;

class FondosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fondos')->delete();
        Fondo::create(['id'=>'1', 'nombre' => 'Camuflado azul', 'imagen':'numeros-01.png']);
    }
}
