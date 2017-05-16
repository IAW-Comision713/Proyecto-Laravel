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
        Aguja::create(['id'=>'1', 'nombre' => 'Dark', 'imagen':'agujas-01.png']);
    }
}
