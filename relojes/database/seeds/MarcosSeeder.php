<?php

use Illuminate\Database\Seeder;
use App\Marco;
use Carbon\Carbon;

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
        
        Marco::create(['id' => '1', 'nombre' => 'Marco Vacio', 'imagen' => 'img/partes/modelo-vacio/marco-vacio.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Marco::create(['id' => '2', 'nombre' => 'Marrón', 'imagen' => 'img/partes/marco/marco-01.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Marco::create(['id' => '3', 'nombre' => 'Dorado', 'imagen' => 'img/partes/marco/marco-02.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Marco::create(['id' => '4', 'nombre' => 'Plateado', 'imagen' => 'img/partes/marco/marco-03.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Marco::create(['id' => '5', 'nombre' => 'Rojo', 'imagen' => 'img/partes/marco/marco-04.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Marco::create(['id' => '6', 'nombre' => 'Negro', 'imagen' => 'img/partes/marco/marco-05.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
