<?php

use Illuminate\Database\Seeder;

class AgujasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agujas')->delete();
        
        Aguja::create(['id'=>'1', 'nombre' => 'Dark', 'imagen' => '/img/partes/agujas/agujas-01.png']);
        Aguja::create(['id'=>'2', 'nombre' => 'Rose', 'imagen' => '/img/partes/agujas/agujas-02.png']);
        Aguja::create(['id'=>'3', 'nombre' => 'Glow in the dark', 'imagen' => '/img/partes/agujas/agujas-03.png']);
        Aguja::create(['id'=>'4', 'nombre' => 'Casual', 'imagen' => '/img/partes/agujas/agujas-04.png']);
        Aguja::create(['id'=>'5', 'nombre' => 'Gold', 'imagen' => '/img/partes/agujas/agujas-05.png']);
    }
}
