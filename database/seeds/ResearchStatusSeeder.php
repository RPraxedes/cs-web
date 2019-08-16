<?php

use Illuminate\Database\Seeder;

class ResearchStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('research_project_status')->insert([
			['status' => 'Ongoing'],
			['status' => 'Finished'],
		]);
    }
}
