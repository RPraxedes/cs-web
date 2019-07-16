<?php

use Illuminate\Database\Seeder;

class DMCSUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			[
				'name' => 'jmaddawe',
				'email' => 'jmaddawe@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('jmaddawe'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'rcaddawe',
				'email' => 'rcaddawe@upb.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('rcaddawe'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'wvalangui',
				'email' => 'wvalangui@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('wvalangui'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'gmmangeles',
				'email' => 'gmmangeles@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('gmmangeles'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'jpascano',
				'email' => 'jpascano@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('jpascano'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'jbbacani',
				'email' => 'jbbacani@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('jbbacani'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'adbalangcod',
				'email' => 'adbalangcod@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('adbalangcod'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'ocawiding',
				'email' => 'ocawiding@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('ocawiding'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'jacollera',
				'email' => 'jacollera@up.edu.ph',
				'email_verified_at' => now(),
				'password' => bcrypt('jacollera'),
				'position' => 'faculty',
				'verified_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			
		]);
    }
}
