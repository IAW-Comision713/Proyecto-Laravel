<?php

use Illuminate\Database\Seeder;

class MallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mallas')->delete();
        Malla::create(['id'=>'1', 'nombre' => 'Violeta', 'imagen':'malla.png']);
    }
}
