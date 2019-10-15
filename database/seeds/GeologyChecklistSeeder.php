<?php

use Illuminate\Database\Seeder;

class MicrobiologyChecklistSeeder extends Seeder
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
            'title' => 'Bachelor of Science in Geology',
			'body' =>
'<strong>Total number of units: 155 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		]);
    }
}
