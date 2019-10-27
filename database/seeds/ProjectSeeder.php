<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('projects')->insert([
			[
				'title' => 'Probability and Statistics Module for the Continuing Training Program for Tertiary Math Teachers Module',
				'author' => 'Rizavel Addawe & Perlas Caranay',
				'started_date' => '2001-01-01',
				'funding' => 'Research Grant : CSC-UPB and CHED-COD',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Development of Teaching Aids for Mathematics 1',
				'author' => 'R.C. Addawe & T.A. Rapanut',
				'started_date' => '2018-06-16',
				'funding' => 'Research Grant: PCUME-GE Mathematics',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => ' Assessing Statistical Literacy Among tertiary Level Statistics Teachers: Implications for Statistical Education',
				'author' => 'R.C. Addawe',
				'started_date' => '2007-01-01',
				'funding' => 'Research Grant: on Research Load Credit - 1st Semester AY 2005-2006',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Customary Tenure and REDD+: Ensuring Benefits for Indigenous Peoples',
				'author' => 'Alangui, W.',
				'started_date' => '2018-06-16',
				'funding' => 'Forest Carbon Partnership Facility and Tebtebba-Foundation',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Asserting and Respecting Indigenous Peoples\' Rights for the Next Generation',
				'author' => 'Alangui, W.',
				'started_date' => '2016-05-01',
				'funding' => 'UNICEF and Tebtebba Foundation',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Ethnomathematics and Adult Literacy Education',
				'author' => 'Alangui, W.',
				'started_date' => '2018-01-01',
				'funding' => 'UNICEF and Tebtebba Foundation',
				'status_id' => 2,
				'description' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Cayley Digraphs and Adjacency Matrices',
				'author' => 'Alangui, W.',
				'started_date' => NULL,
				'funding' => NULL,
				'status_id' => 1,
				'description' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
		]);
    }
}
