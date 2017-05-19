<?php

use Illuminate\Database\Seeder;
use App\Preestablecido;
use Carbon\Carbon;

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
                                'nombre' => 'Vacio',
                                'malla' => '1',
                                'fondo' => '1',
                                'marco' => '1',
                                'agujas' => '1',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '2',
                                'nombre' => 'Jane',
                                'malla' => '2',
                                'fondo' => '10',
                                'marco' => '6',
                                'agujas' => '6',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '3',
                                'nombre' => 'Rose',
                                'malla' => '6',
                                'fondo' => '9',
                                'marco' => '5',
                                'agujas' => '3',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '4',
                                'nombre' => 'Anne',
                                'malla' => '8',
                                'fondo' => '5',
                                'marco' => '3',
                                'agujas' => '5',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
        
        Preestablecido::create(['id' => '5',
                                'nombre' => 'Agnes',
                                'malla' => '7',
                                'fondo' => '8',
                                'marco' => '4',
                                'agujas' => '4',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()         
        ]);
    }
}
