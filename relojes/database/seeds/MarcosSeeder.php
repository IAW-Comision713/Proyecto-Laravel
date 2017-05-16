<?php

use Illuminate\Database\Seeder;

class MarcosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marcos')->delete();
        Marco::create(['id'=>'1', 'nombre' => 'Marrón', 'imagen':'marco-01.png']);
    }
}
