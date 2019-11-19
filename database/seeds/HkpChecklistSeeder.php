<?php

use Illuminate\Database\Seeder;

class HkpChecklistSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
		//data from 2019
    DB::table('checklists')->insert([
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
  		[
        'title' => 'Human Kinetics Program',
  			'body' => '',
  			'created_at' => now(),
  			'updated_at' => now()
      ],
	  ]);
  }
}
