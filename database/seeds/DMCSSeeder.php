<?php

use Illuminate\Database\Seeder;

class DMCSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('faculty')->insert([
		[
			'user_id' => 1,
			'first_name' => 'Joel',
			'middle_name' => 'M.',
			'last_name' => 'Addawe',
			'position' => 'Associate Professor of Mathematics',
			'bs_degree' => 'B.S., University of the Philippines, 1989',
			'ms_degree' => 'M.S., University of the Philippines, 1995',
			'phd_degree' => 'Ph.D. University of the Philippines, 2012',
			'research_interest' => 'Mathematical Modeling, Ecological Modeling, Differential Equations, Scientific Computation, Bio-inspired computing',
			'contact_info' => 'joel.addawe@gmail.com, jmaddawe@up.edu.ph',
			'profile_image' => 'jmaddawe.jpg',
			'profile_alt' => 'jmaddawe',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 2,
			'first_name' => 'Rizavel',
			'middle_name' => 'C.',
			'last_name' => 'Addawe',
			'position' => 'Assistant Professor of Mathematics',
			'bs_degree' => "B.S., St. Mary's University, 1991",
			'ms_degree' => 'M.S., University of the Philippines, 2004',
			'phd_degree' => 'Ph.D., University of the Philippines, 2018',
			'research_interest' => NULL,
			'contact_info' => 'rcaddawe@upb.edu.ph',
			'profile_image' => 'rcaddawe.jpg',
			'profile_alt' => 'rcaddawe',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 3,
			'first_name' => 'Wilfredo',
			'middle_name' => 'V.',
			'last_name' => 'Alangui',
			'position' => 'Professor of Mathematics',
			'bs_degree' => 'B.S., University of the Philippines, 1985',
			'ms_degree' => 'M.S., University of the Philippines, 1993',
			'phd_degree' => 'Ph.D., University of Auckland, 2010',
			'research_interest' => "Mathematics, Ethnomathematics, Mathematics Education, Culturally Relevant Mathematics Education, Indigenous Peoples' Education, Inclusive Education, Indigenous Knowledge",
			'contact_info' => 'wvalangui@up.edu.ph',
			'profile_image' => 'wvalangui.jpg',
			'profile_alt' => 'wvalangui',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 4,
			'first_name' => 'Gervy Marie',
			'middle_name' => NULL,
			'last_name' => 'Angeles',
			'position' => 'Instructor in Mathematics',
			'bs_degree' => 'B.S.,cum laude, University of the Philippines, 2018',
			'ms_degree' => 'M.S., University of the Philippines, 2018',
			'phd_degree' => NULL,
			'research_interest' => NULL,
			'contact_info' => NULL,
			'profile_image' => 'gmmangeles.jpg',
			'profile_alt' => 'gmmangeles',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 5,
			'first_name' => 'Joy',
			'middle_name' => 'P.',
			'last_name' => 'Ascaño',
			'position' => 'Assistant Professor of Mathematics',
			'bs_degree' => 'B.S., University of the Philippines, 2011',
			'ms_degree' => 'M.S., University of the Philippines, 2015',
			'phd_degree' => NULL,
			'research_interest' => NULL,
			'contact_info' => 'jpascano@up.edu.ph',
			'profile_image' => 'jpascano.jpg',
			'profile_alt' => 'jpascano.jpg',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 6,
			'first_name' => 'Jerico',
			'middle_name' => 'B.',
			'last_name' => 'Bacani',
			'position' => 'Associate Professor of Mathematics',
			'bs_degree' => 'B.S., University of the Philippines, 1998',
			'ms_degree' => 'M.S., University of the Philippines, 2004',
			'phd_degree' => 'Dr.rer.nat, Karl-Franzens-Universitaet Graz, Austria, 2013',
			'research_interest' => 'Free Boundary Problems, Shape Optimization, Shape Derivatives, Special Expressions, Difference Equations, Generalized Fibonacci Numbers, Analysis, Number Theory, Linear Algebra',
			'contact_info' => 'jbbacani@up.edu.ph, jicderivative@yahoo.com',
			'profile_image' => 'jbbacani.jpg',
			'profile_alt' => 'jbbacani',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 7,
			'first_name' => 'Ashlyn Kim',
			'middle_name' => 'D.',
			'last_name' => 'Balangcod',
			'position' => 'Instructor in Computer Science',
			'bs_degree' => 'B.S., University of the Philippines, 2007',
			'ms_degree' => NULL,
			'phd_degree' => NULL,
			'research_interest' => NULL,
			'contact_info' => 'adbalangcod@up.edu.ph',
			'profile_image' => NULL,
			'profile_alt' => NULL,
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 8,
			'first_name' => 'Olive',
			'middle_name' => NULL,
			'last_name' => 'Cawiding',
			'position' => 'Instructor in Mathematics',
			'bs_degree' => 'B.S., cum laude, University of the Philippines, 2015',
			'ms_degree' => NULL,
			'phd_degree' => NULL,
			'research_interest' => NULL,
			'contact_info' => NULL,
			'profile_image' => NULL,
			'profile_alt' => NULL,
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		[
			'user_id' => 9,
			'first_name' => 'Juancho',
			'middle_name' => NULL,
			'last_name' => 'Collera',
			'position' => 'Associate Professor of Mathematics',
			'bs_degree' => 'B.S., cum laude, University of the Philippines, 2000',
			'ms_degree' => 'M.S., University of the Philippines, 2004',
			'phd_degree' => 'PhD, Queen’s University, 2012',
			'research_interest' => 'Delay Differential Equations, Equivariant Bifurcations and Dynamical Systems, Mathematical Biology',
			'contact_info' => 'jacollera@up.edu.ph',
			'profile_image' => 'jacollera.jpg',
			'profile_alt' => 'jacollera',
			'dept_id' => 3,
			'status_id' => 1,
			'published_at' => now(),
			'created_at' => now(),
			'updated_at' => now(),
		],
		]);
    }
}
