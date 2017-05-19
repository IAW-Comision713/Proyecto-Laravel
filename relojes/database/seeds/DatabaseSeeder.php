<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgujasSeeder::class);
        $this->call(FondosSeeder::class);
        $this->call(MallasSeeder::class);
        $this->call(MarcosSeeder::class);
        $this->call(PreestablecidosSeeder::class);
    }
}
