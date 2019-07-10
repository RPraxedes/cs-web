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
				'title' => 'Department of Biology',
				'short_title' => 'biology',
			],
			[
				'title' => 'Department of Physical Sciences',
				'short_title' => 'physical-science',
			],
			[
				'title' => 'Department of Mathematics and Computer Science',
				'short_title' => 'math-comsci',
			],
			[
				'title' => 'HKP Faculty',
				'short_title' => 'hkp',
			],
			[
				'title' => 'Executive Committee',
				'short_title' => 'executive',
			],
		]);
    }
}
