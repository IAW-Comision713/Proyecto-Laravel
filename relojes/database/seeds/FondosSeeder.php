<?php

use Illuminate\Database\Seeder;
use App\Fondo;
use Carbon\Carbon;

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
        
        Fondo::create(['id'=>'1', 'nombre' => 'Fondo Vacio', 'imagen' => 'img/partes/modelo-vacio/fondo-vacio.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'2', 'nombre' => 'Camuflado azul', 'imagen' => 'img/partes/fondo/fondo-01.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'3', 'nombre' => 'Playa', 'imagen' => 'img/partes/fondo/fondo-02.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'4', 'nombre' => 'Chrome', 'imagen' => 'img/partes/fondo/fondo-03.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'5', 'nombre' => 'Pastel', 'imagen' => 'img/partes/fondo/fondo-04.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'6', 'nombre' => 'Turquesa', 'imagen' => 'img/partes/fondo/fondo-05.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'7', 'nombre' => 'Arrow', 'imagen' => 'img/partes/fondo/fondo-06.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'8', 'nombre' => 'Tonos Verdes', 'imagen' => 'img/partes/fondo/fondo-07.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'9', 'nombre' => 'Floral', 'imagen' => 'img/partes/fondo/fondo-08.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Fondo::create(['id'=>'10', 'nombre' => 'Stripes', 'imagen' => 'img/partes/fondo/fondo-09.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        
        
    }
}
