<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
			[
				'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
				'uri' => 'ecology-and-systematics',
				'level' => 'Undergraduate',
				'image' => 'ecology.png',
			],
			[
				'title' => 'Bachelor of Science in Biology (General Biology)',
				'uri' => 'general-biology',
				'level' => 'Undergraduate',
				'image' => 'genbio.png',
			],
			[
				'title' => 'Bachelor of Science in Biology (Microbiology)',
				'uri' => 'microbiology',
				'level' => 'Undergraduate',
				'image' => 'microbio.png',
			],
			[
				'title' => 'Bachelor of Science in Computer Science',
				'uri' => 'computer-science',
				'level' => 'Undergraduate',
				'image' => 'comsci.png',
			],
			[
				'title' => 'Bachelor of Science in Mathematics',
				'uri' => 'mathematics',
				'level' => 'Undergraduate',
				'image' => 'mathematics.jpg',
			],
			[
				'title' => 'Bachelor of Science in Physics',
				'uri' => 'physics',
				'level' => 'Undergraduate',
				'image' => 'physics.png',
			],
			/* [
				'title' => '',
				'uri' => '',
				'level' => '',
				'image' => '',
			],
			 */
		]);
    }
}
