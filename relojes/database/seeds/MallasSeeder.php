<?php

use Illuminate\Database\Seeder;
use App\Malla;
use Carbon\Carbon;

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
        
        Malla::create(['id'=>'1', 'nombre' => 'Malla Vacia', 'imagen' => 'img/partes/modelo-vacio/malla-vacia.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'2', 'nombre' => 'Violeta', 'imagen' => 'img/partes/mallas/malla-01.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'3', 'nombre' => 'Tornasol', 'imagen' => 'img/partes/mallas/malla-02.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'4', 'nombre' => 'Violeta oscuro', 'imagen' => 'img/partes/mallas/malla-03.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'5', 'nombre' => 'Amarilla', 'imagen' => 'img/partes/mallas/malla-04.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'6', 'nombre' => 'Floral', 'imagen' => 'img/partes/mallas/malla-05.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'7', 'nombre' => 'Verde', 'imagen' => 'img/partes/mallas/malla-06.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Malla::create(['id'=>'8', 'nombre' => 'Roja', 'imagen' => 'img/partes/mallas/malla-07.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
