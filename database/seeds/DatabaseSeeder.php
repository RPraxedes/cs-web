<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
            'name' => 'test',
			'first_name' => 'Richard Angelo',
			'middle_name' => 'Villanueva',
			'last_name' => 'Praxedes',
            'email' => 'test@mail.com',
            'password' => bcrypt('test'),
        ]);
		
		factory(App\User::class, 50)->create();
		factory(App\Article::class, 100)->create();
		
		$this->call('CMSCChecklistSeeder');
		$this->call('MathChecklistSeeder');
    }
}
