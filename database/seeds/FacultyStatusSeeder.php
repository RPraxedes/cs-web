<?php

use Illuminate\Database\Seeder;

class FacultyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty_status')->insert([
			['status' => 'Active'],
			['status' => 'On study leave'],
		]);
    }
}
