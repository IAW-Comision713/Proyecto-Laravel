<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(['id' => '1',
                                'name' => 'Admin',
                                'email' => 'admin@admin.com',
                                'password' => bcrypt('admin0')      
        ]);
    }
}
