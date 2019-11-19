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
			[
				'title' => 'Master of Science in Mathematics',
				'uri' => 'master-mathematics',
				'level' => 'Graduate',
				'image' => 'master-math.jpg',
			],
			[
				'title' => 'Human Kinetics Program',
				'uri' => 'hkp',
				'level' => 'Undergraduate',
				'image' => 'human-kinetics.jpg',
			],
			[
				'title' => 'Doctor of Philosophy in Mathematics',
				'uri' => 'phd-mathematics',
				'level' => 'Graduate',
				'image' => 'phd-math.jpg',
			],
			[
				'title' => 'Master of Science in Conservation and Restoration Ecology',
				'uri' => 'master-care',
				'level' => 'Graduate',
				'image' => 'master-care.jpg',
			],
      [
        'title' => 'The Revitalized General Education Program',
        'uri' => 'rgep',
        'level' => 'RGEP',
        'image' => ''
      ],
      [
        'title' => 'Science Research Center',
        'uri' => 'src',
        'level' => 'SRC',
        'image' => ''
      ],
      [
        'title' => 'Himnasyo Amianan',
        'uri' => 'himnasyo',
        'level' => 'Himnasyo',
        'image' => ''
      ],
      [
        'title' => 'Department of Biology',
        'uri' => 'dept-bio',
        'level' => 'Department',
        'image' => ''
      ],
      [
        'title' => 'Department of Mathematics and Computer Science',
        'uri' => 'dept-mcs',
        'level' => 'Department',
        'image' => ''
      ],
      [
        'title' => 'Department of Mathematics and Physical Sciences',
        'uri' => 'dept-phys',
        'level' => 'Department',
        'image' => ''
      ],
      [
        'title' => 'Human Kinetics Program Faculty',
        'uri' => 'dept-hkp',
        'level' => 'Department',
        'image' => ''
      ],
      [
        'title' => 'College Executive Board',
        'uri' => 'college-exec',
        'level' => 'Department',
        'image' => ''
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
