<?php

use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Joel M. Addawe
		DB::table('conferences')->insert([
			[
				'paper_title' => 'An Age-structured malaria transmission model',
				'author' => 'Addawe, J.',
				'conference_date' => '2016-11-30',
				'type' => 'International',
				'venue' => 'UP Diliman - DLSU Manila, Phlippines',
				'conference_title' => 'International Comference in Mathematical and Computational Modeling of Biological Systems',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Dynamics of climate-based malaria transmission model with age-structured human population',
				'author' => 'Addawe, J., Pajimola, A.',
				'conference_date' => '2016-08-16',
				'type' => 'International',
				'venue' => 'Putrajaya, Malaysia',
				'conference_title' => 'THE 4TH INTERNATIONAL CONFERENCE ON QUANTITATIVE SCIENCES AND ITS APPLICATIONS (ICOQSIA 2016)',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Dynamics of Dengue Transmission Model in Baguio City, Philippines',
				'author' => 'Addawe, J., Pajimola, A., and Tubera, D.',
				'conference_date' => '2016-07-25',
				'type' => 'International',
				'venue' => 'Nusa Dua Convention Center, Bali, Indonesia',
				'conference_title' => 'Asian Mathematical Conference (AMC2016)',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Building Health Research in the University of the Philippines (UP) from the Ground',
				'author' => 'Edna Co, Leonardo Estacio, Joel Addawe, Ruben Caragay, Isidro Sia, Hilton Lam, and Jennifer Madamba',
				'conference_date' => '2015-08-24',
				'type' => 'National',
				'venue' => 'PICC, Manila Philippines',
				'conference_title' => 'Global FORUM on Research and Innovation for Health 2015',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Genetic Algorithm and K-Nearest Naighbor Classification Method for Heterogeneous Data',
				'author' => 'Felicia Anne Bulanan and Joel Addawe',
				'conference_date' => '2015-05-18',
				'type' => 'National',
				'venue' => 'Plaza Del Norte Hotel and Convention Center, Laoag City Ilocos Norte',
				'conference_title' => '2015 MSP Annual Convention',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Shuffled Complex Evolution Approach with Differential Evolution for Wind Turbine Output Optimization',
				'author' => 'Addawe, J. and  Micu, N.',
				'conference_date' => '2015-05-18',
				'type' => 'National',
				'venue' => 'Plaza Del Norte Hotel and Convention Center, Laoag City Ilocos Norte',
				'conference_title' => '2015 MSP Annual Convention',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Modeling malaria transmission in an age-structured population',
				'author' => 'Addawe, J. Macansantos, P., Lope, E.',
				'conference_date' => '2013-05-18',
				'type' => 'National',
				'venue' => 'Puerto Princesa City, Palawan',
				'conference_title' => '2013 MSP Annual Convention',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Sensitivity Analysis of age-structured malaria transmission model',
				'author' => 'Addawe, J. and Lope, E.',
				'conference_date' => '2012-06-11',
				'type' => 'International',
				'venue' => 'Kuala Lumpur',
				'conference_title' => 'International Conference on Fundamental and Applied Sciences (ICFAS2012)',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Numerical Computation to Approximate Energy Minimization for Large Lennard-Jones Clusters',
				'author' => 'Addawe, J. Galleta, D., Nabor, B., Ramos, P.',
				'conference_date' => '2007-05-18',
				'type' => 'National',
				'venue' => 'Bohol Tagbilaran City',
				'conference_title' => '2007 MSP Annual Convention',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'rpnMPI — An Interactive Parallel Scripting Tool',
				'author' => 'Addawe, J. Adorio, E., Corpuz, B.',
				'conference_date' => '2004-02-14',
				'type' => 'National',
				'venue' => 'University of the Philippines — Los Banos',
				'conference_title' => '4th Philippine Computing Science Congress',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'rpnMPI — An Extensible interactive system using MPI',
				'author' => 'Addawe, J. Adorio, E., Corpuz, B.',
				'conference_date' => '2003-10-27',
				'type' => 'National',
				'venue' => 'Lyceum of the Philippines Manila',
				'conference_title' => 'NCITE 2003',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'A modified Differential Evolution Algorithm for Continuous Multivariate Function Optimization',
				'author' => 'Addawe, J., Adorio E.',
				'conference_date' => '2003-05-24',
				'type' => 'National',
				'venue' => 'UPLB Laguna',
				'conference_title' => '2003 MSP Annual Convention',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			/* [
				'paper_title' => '',
				'author' => '',
				'conference_date' => '',
				'type' => '',
				'venue' => '',
				'conference_title' => '',
				'link' => NULL,
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			 */
		]);
    }
}
