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
		// test accounts
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
			'email_verified_at' => now(),
            'password' => bcrypt('test1'),
        ]);

		// --- fake articles and users
		// factory(App\Models\User::class, 50)->create();
		factory(App\Models\Article::class, 20)->create();

		$this->call('CourseSeeder');
		$this->call('CMSCChecklistSeeder');
		$this->call('MathChecklistSeeder');
		$this->call('PhysicsChecklistSeeder');
		$this->call('GeneralBiologyChecklistSeeder');
		$this->call('MicrobiologyChecklistSeeder');
		$this->call('EcologySystematicsChecklistSeeder');
		$this->call('FacultyStatusSeeder');
		$this->call('DepartmentSeeder');
		$this->call('DMCSUserSeeder');
		$this->call('DMCSSeeder');
		$this->call('PublicationSeeder');
		$this->call('ConferenceSeeder');
    $this->call('ResearchStatusSeeder');
		$this->call('ProjectSeeder');
		$this->call('OtherAchievementSeeder');
		$this->call('GallerySeeder');
		$this->call('MasterMathChecklistSeeder');
    $this->call('PhdMathChecklistSeeder');
    $this->call('MasterCareChecklistSeeder');
    $this->call('RgepChecklistSeeder');
    $this->call('SrcSeeder');
    $this->call('HimnasyoSeeder');
    $this->call('HkpChecklistSeeder');
    }
}
