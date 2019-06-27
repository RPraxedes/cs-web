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
			//'first_name' => 'Richard Angelo',
			//'middle_name' => 'Villanueva',
			//'last_name' => 'Praxedes',
            'email' => 'test@mail.com',
			'position' => 'faculty',
            'password' => bcrypt('test'),
        ]);
		
		factory(App\Models\User::class, 50)->create();
		factory(App\Models\Article::class, 100)->create();
		
		$this->call('CMSCChecklistSeeder');
		$this->call('MathChecklistSeeder');
		$this->call('PhysicsChecklistSeeder');
		$this->call('GeneralBiologyChecklistSeeder');
		$this->call('MicrobiologyChecklistSeeder');
		$this->call('EcologySystematicsChecklistSeeder');
    }
}
