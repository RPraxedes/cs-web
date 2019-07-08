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
            'email' => 'test@mail.com',
			'position' => 'admin',
            'password' => bcrypt('test'),
			'email_verified_at' => now(),
			'verified_at' => now(),
        ]);
		
		DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@mail.com',
			'position' => 'admin',
            'password' => bcrypt('test1'),
        ]);
		
		factory(App\Models\User::class, 50)->create();
		factory(App\Models\Article::class, 100)->create();
		
		$this->call('CMSCChecklistSeeder');
		$this->call('MathChecklistSeeder');
		$this->call('PhysicsChecklistSeeder');
		$this->call('GeneralBiologyChecklistSeeder');
		$this->call('MicrobiologyChecklistSeeder');
		$this->call('EcologySystematicsChecklistSeeder');
		$this->call('FacultyStatusSeeder');
    }
}
