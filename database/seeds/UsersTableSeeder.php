<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
        User::create([
        	'name'=>'Phương ZonZon',
        	'email'=>'20156275@student.hust.edu.vn',
        	'password'=>bcrypt('123456'),
        ]);
    }
}
