<?php

use Illuminate\Database\Seeder;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('votes')->insert([
		    'name' => 'Apple',
		    'votes' => 0,
	    ]);

	    DB::table('votes')->insert([
		    'name' => 'Orange',
		    'votes' => 0,
	    ]);

	    DB::table('votes')->insert([
		    'name' => 'Banana',
		    'votes' => 0,
	    ]);

	    DB::table('votes')->insert([
		    'name' => 'Pineapple',
		    'votes' => 0,
	    ]);
    }
}
