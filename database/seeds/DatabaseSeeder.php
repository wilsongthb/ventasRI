<?php

use Illuminate\Database\Seeder;
use database\seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //$this->call(basicas::class);
        //$this->call(falsos::class);
        $this->call(falsos_relacionales::class);
    }
}
