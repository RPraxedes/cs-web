<?php

use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
			[
				'title' => 'Bifurcation analysis of dengue transmission model in Baguio City, Philippines',
				'author' => 'Libatique, CP, Pajimola, AKP and Addawe, JM.',
				'published_date' => '2017-01-01',
				'type' => 'International',
				'journal' => 'AIP Conference Proceedings',
				'volume' => '1905',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'title' => 'Parameter Optimization of differential evolution algorithm for automatic playlist generation problem',
				'author' => 'Alamag, KMNB, and Addawe, JM.',
				'published_date' => '2017-01-01',
				'type' => 'International',
				'journal' => 'AIP Conference Proceedings',
				'volume' => '1905',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			/* [
				'title' => '',
				'author' => '',
				'published_date' => '',
				'type' => '',
				'journal' => '',
				'volume' => '',
				'link' => '',
				'user_id' => ,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			], */
		]);
    }
}
