<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
        [
  				'department' => 'College Executive Board',
  				'short_title' => 'executive',
  			],
  			[
  				'department' => 'Department of Biology',
  				'short_title' => 'biology',
  			],
  			[
  				'department' => 'Department of Mathematics and Computer Science',
  				'short_title' => 'math-comsci',
  			],
        [
          'department' => 'Department of Physical Sciences',
          'short_title' => 'physical-science',
        ],
        [
          'department' => 'Human Kinetics Program Faculty',
          'short_title' => 'hkp',
        ],
		  ]);
    }
}
