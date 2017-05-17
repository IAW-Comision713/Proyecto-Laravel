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
        DB::table('preestablecidos')->delete();
        
        Preestablecido::create(['id' => '1',
                                'nombre' => 'Jane',
                                'malla' => '1',
                                'fondo' => '9',
                                'marco' => '5',
                                'agujas' => '5',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '2',
                                'nombre' => 'Rose',
                                'malla' => '5',
                                'fondo' => '8',
                                'marco' => '4',
                                'agujas' => '2',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '3',
                                'nombre' => 'Anne',
                                'malla' => '7',
                                'fondo' => '4',
                                'marco' => '2',
                                'agujas' => '4',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '4',
                                'nombre' => 'Agnes',
                                'malla' => '6',
                                'fondo' => '7',
                                'marco' => '3',
                                'agujas' => '3',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
    }
}
