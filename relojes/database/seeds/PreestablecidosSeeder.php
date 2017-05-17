<?php

use Illuminate\Database\Seeder;

class PreestablecidosSeeder extends Seeder
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
        
        Preestablecido::create(['id'=>'1',
                                'nombre' => 'Vacio',
                                'malla' => '',
                                'fondo' => '',
                                'marco' => '',
                                'agujas' => ''
        ]);
    }
}
