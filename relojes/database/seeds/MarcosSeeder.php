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
        
        Marco::create(['id' => '1', 'nombre' => 'Marrón', 'imagen' => '/img/partes/marcos/marco-01.png']);
        Marco::create(['id' => '2', 'nombre' => 'Dorado', 'imagen' => '/img/partes/marcos/marco-02.png']);
        Marco::create(['id' => '3', 'nombre' => 'Plateado', 'imagen' => '/img/partes/marcos/marco-03.png']);
        Marco::create(['id' => '4', 'nombre' => 'Rojo', 'imagen' => '/img/partes/marcos/marco-04.png']);
        Marco::create(['id' => '5', 'nombre' => 'Negro', 'imagen' => '/img/partes/marcos/marco-05.png']);
    }
}
