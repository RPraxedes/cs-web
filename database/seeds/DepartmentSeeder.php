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
				'department' => 'Department of Biology',
				'short_title' => 'biology',
			],
			[
				'department' => 'Department of Physical Sciences',
				'short_title' => 'physical-science',
			],
			[
				'department' => 'Department of Mathematics and Computer Science',
				'short_title' => 'math-comsci',
			],
			[
				'department' => 'Human Kinetics Program Faculty',
				'short_title' => 'hkp',
			],
			[
				'department' => 'Executive Committee',
				'short_title' => 'executive',
			],
		]);
    }
}
