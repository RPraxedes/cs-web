<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
			'title' => Str::random(10),
			'author_id' => 1,
			'body' => Str::random(500),
			'category' => 'Uncategorized'
		]);
    }
}
