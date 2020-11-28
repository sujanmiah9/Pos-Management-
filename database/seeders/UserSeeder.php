<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
        	[
        		'name'=>"Sujan Miah",
	        	'email'=>"admin@gmail.com",
	        	'email_verified_at' => now(),
	        	'password'=>bcrypt('1234'),
        	]
        );
    }
}
