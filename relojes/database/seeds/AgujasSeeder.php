<?php

use Illuminate\Database\Seeder;
use App\Aguja;
use Carbon\Carbon;

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
        
        Aguja::create(['id'=>'1', 'nombre' => 'Agujas Vacias', 'imagen' => 'img/partes/modelo-vacio/agujas-vacias.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Aguja::create(['id'=>'2', 'nombre' => 'Dark', 'imagen' => 'img/partes/agujas/agujas-01.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Aguja::create(['id'=>'3', 'nombre' => 'Rose', 'imagen' => 'img/partes/agujas/agujas-02.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Aguja::create(['id'=>'4', 'nombre' => 'Glow in the dark', 'imagen' => 'img/partes/agujas/agujas-03.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Aguja::create(['id'=>'5', 'nombre' => 'Casual', 'imagen' => 'img/partes/agujas/agujas-04.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        Aguja::create(['id'=>'6', 'nombre' => 'Gold', 'imagen' => 'img/partes/agujas/agujas-05.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
