<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// gọi tất cả các class trong Database: 
        $this->call(UsersTableSeeder::class);
    }
}
