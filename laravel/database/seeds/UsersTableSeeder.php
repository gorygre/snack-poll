<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert([
		    'name' => 'Jane',
		    'email' => 'jane@grmccall.com',
		    'password' => bcrypt('monkey'),
		    'api_token' => str_random(60),
		    'vote' => '',
		    'admin' => false,
	    ]);

	    DB::table('users')->insert([
		    'name' => 'John',
		    'email' => 'john@grmccall.com',
		    'password' => bcrypt('monkey'),
		    'api_token' => str_random(60),
		    'vote' => '',
		    'admin' => false,
	    ]);

	    DB::table('users')->insert([
		    'name' => 'admin',
		    'email' => 'admin@grmccall.com',
		    'password' => bcrypt('admin'),
		    'api_token' => str_random(60),
		    'vote' => '',
		    'admin' => true,
	    ]);
    }
}
