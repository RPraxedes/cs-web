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
			[
				'paper_title' => 'Mathematical Mindsets, Worldviews and Ethnomathematics',
				'author' => 'Alangui, W.',
				'conference_date' => '2017-09-10',
				'type' => 'International',
				'venue' => 'Male, Maldives',
				'conference_title' => 'MAPS College Workshop for K-12 Teachers',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'An outsider\'s reflections on Maori studies and Kaupapa Maori theory: Indigenous studies as a project of decolonization',
				'author' => 'Alangui, W.',
				'conference_date' => '2017-07-12',
				'type' => 'International',
				'venue' => 'Camp John Hay, Baguio City, Benguet',
				'conference_title' => '2nd International Conference on Cordillera Studies',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Diverse Indigenous Languages, Diverse Mathematical Thinking',
				'author' => 'Alangui, W.',
				'conference_date' => '2016-10-20',
				'type' => 'International',
				'venue' => 'Kuching, Sarawak, Malaysia',
				'conference_title' => '2nd Malaysian Indigenous Peoples’ Conference on Education',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => '\"There’s a theory behind what we’re doing!\" Ethnomathematics and Indigenous Peoples’ Education',
				'author' => 'Alangui, W.',
				'conference_date' => '2016-07-24',
				'type' => 'International',
				'venue' => 'University of Hamburg, Hamburg, Germany',
				'conference_title' => '13th International Congress on Mathematical Education (ICME-13)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Preparing Mathematics Teachers for a Culturally Responsive Education: the Case of the Gohang National High School as a Special School for the Conservation of the Ifugao Rice Terraces',
				'author' => 'Alangui, W.',
				'conference_date' => '2015-05-11',
				'type' => 'International',
				'venue' => 'Waterfront Hotel, Cebu, Philippines',
				'conference_title' => '7th International Commission on Mathematical Instruction – East Asia Regional Conference on Mathematics Education (ICMI EARCOME-7)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Learning mathematics from cultural practice: Lessons from the experiences of several schools for indigenous students in the Philippines',
				'author' => 'Alangui, W.',
				'conference_date' => '2013-06-17',
				'type' => 'International',
				'venue' => 'Athens, Greece',
				'conference_title' => '7th Annual International Conference on Mathematics Education & Statistics Education',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Ethnomathematics: Investigating the Interplay of Mathematics and Cultural Practice',
				'author' => 'Alangui, W.',
				'conference_date' => '2012-06-30',
				'type' => 'International',
				'venue' => 'UP Baguio, Baguio City, Benguet, Philippines',
				'conference_title' => 'Kapwa 3: Indigenous Knowledge in the Academe: Bridging local and global paradigms',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Indigenous Peoples’ Traditional Knowledge in Forest Management as Means for Climate Change Adaptation and Mitigation ',
				'author' => 'Alangui, W.',
				'conference_date' => '2011-06-19',
				'type' => 'International',
				'venue' => 'Hilton Hotel Reforma, Mexico City',
				'conference_title' => 'Workshop on Indigenous Peoples, Marginalized Populations and Climate Change: Vulnerability, Adaptation and Traditional Knowledge',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Mutual Interrogation as an Ethnomathematical Approach',
				'author' => 'Alangui, W.',
				'conference_date' => '2006-02-12',
				'type' => 'International',
				'venue' => 'Auckland, New Zealand',
				'conference_title' => 'Third International Congress on Ethnomathematics (ICEM3)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Culture and Mathematics: Philosophical Perspectives from Anthropology and Ethnomathematics. Roundtable Discussion on Contributions from Other Disciplines',
				'author' => 'Alangui, W. (presented by B. Barton, co-author)',
				'conference_date' => '2004-07-01',
				'type' => 'International',
				'venue' => 'Copenhagen',
				'conference_title' => 'International Conference on Mathematics Education (ICME 10)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Ethnomathematics and Epistemology. Roundtable Discussion',
				'author' => 'Alangui, W.',
				'conference_date' => '2004-04-01',
				'type' => 'International',
				'venue' => 'Universidade Federao do Rio Grande do Norte, Natal, Brazil',
				'conference_title' => 'Second Brazilian Conference on Ethnomathematics, (CBEm2)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Connecting Indigenous Knowledge of Stone Walling and Water Management with Mathematics and its Implication to Indigenous Peoples\' Education',
				'author' => 'Alangui, W.',
				'conference_date' => '2003-08-01',
				'type' => 'International',
				'venue' => 'Unibersidad Autonoma de Mexico, Mexico City, Mexico',
				'conference_title' => '4th APRU Doctoral Students\' Conference',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Searching for Mathematical Ideas in Stone Walls',
				'author' => 'Alangui, W.',
				'conference_date' => '2003-07-01',
				'type' => 'International',
				'venue' => 'Deakind University, Geelong, Melbourne, Australia',
				'conference_title' => '26th International Congress of the Mathematics Education Research Group of Australasia (MERGA)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'A Methodology for Ethnomathematics',
				'author' => 'Alangui, W.',
				'conference_date' => '2002-08-01',
				'type' => 'International',
				'venue' => 'Ouro Preto, Brazil',
				'conference_title' => 'Second International Conference on Ethnomathematics (ICEM2)',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Stone Walls and Mathematics: Searching for Connections',
				'author' => 'Alangui, W.',
				'conference_date' => '2002-12-01',
				'type' => 'International',
				'venue' => 'The University of Auckland, Auckland, New Zealand',
				'conference_title' => 'New Zealand Colloquium',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Ethnomathematics and the Rice Terracing Practice in Northern Philippines',
				'author' => 'Alangui, W.',
				'conference_date' => '2001-10-01',
				'type' => 'International',
				'venue' => 'University of Auckland, Auckland, New Zealand',
				'conference_title' => 'LOGOS 10',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Global Financial Issues: A Southern Perspective',
				'author' => 'Alangui, W.',
				'conference_date' => '2000-04-21',
				'type' => 'International',
				'venue' => 'United Nations Headquarters, New York, New York',
				'conference_title' => 'Side Event on Global Financial Architecture, the 8th Session of the Commission of Sustainable Development',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Indigenous Peoples and the Arts: Perspectives from Asia',
				'author' => 'Alangui, W.',
				'conference_date' => '2000-04-02',
				'type' => 'International',
				'venue' => 'La Paz, Bolivia',
				'conference_title' => 'Consultation on Cultural Symbols and Expressions: Arts, Poetry, Music and Dances and their Importance in the Life and Identity of Indigenous Peoples; World Council of Churches',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Toward a People-Centred Economics: Issues and Prospects in the Cordillera, Northern Philippines',
				'author' => 'Alangui, W.',
				'conference_date' => '1999-08-05',
				'type' => 'International',
				'venue' => 'University of Auckland, Auckland, New Zealand',
				'conference_title' => 'International Conference on People-Centred Economics: Challenges of Indigenous Peoples and Ethnic Minorities',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Tourism and Indigenous Peoples',
				'author' => 'Alangui, W.',
				'conference_date' => '1999-04-19',
				'type' => 'International',
				'venue' => 'United Nations Headquarters, New York, New York',
				'conference_title' => 'Side Event on Tourism, the 7th Session of the Commission of Sustainable Development',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'International Solidarity Work and Indigenous Peoples',
				'author' => 'Alangui, W.',
				'conference_date' => '1998-12-05',
				'type' => 'International',
				'venue' => 'Chiangmai, Thailand',
				'conference_title' => 'Asia-Pacific Policy Workshop on Indigenous and Ethnic Minority and Economic Participation, Rights and Identity in the Context of Globalisation',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Reconfiguring Traditional and Modern Systems of Conflict Resolution: A Model from the Cordillera, Northern Philippines ',
				'author' => 'Alangui, W.',
				'conference_date' => '1998-12-01',
				'type' => 'International',
				'venue' => 'Asian Institute of Technology, Thailand',
				'conference_title' => 'International Conference on Indigenous Asia: Knowledge, Technology and Gender Relations',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Re-Learning Culture: Indigenisation of Education in the Cordillera, Northern Philippines',
				'author' => 'Alangui, W.',
				'conference_date' => '1996-12-09',
				'type' => 'International',
				'venue' => 'Bangkok, Thailand',
				'conference_title' => '2nd ACEID-UNESCO International Conference',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Possibilities for Ethnomathematics Research in the Philippines',
				'author' => 'Alangui, W.',
				'conference_date' => '2016-12-02',
				'type' => 'National',
				'venue' => 'DepEd Ecotech Center, Lahug, Cebu City',
				'conference_title' => '2016 Mathematical Society of the Philippines Research Congress and Convention',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Research in Science and Math Education',
				'author' => 'Alangui, W.',
				'conference_date' => '2014-05-01',
				'type' => 'National',
				'venue' => 'La Maja Rica, Tarlac City',
				'conference_title' => '2014 International Research Conference',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'The ancestral domain is my classroom: Teaching math in a culturally responsive way',
				'author' => 'Alangui, W.',
				'conference_date' => '2013-05-17',
				'type' => 'National',
				'venue' => 'Palawan',
				'conference_title' => '2013 National Convention of the Mathematical Society of the Philippines and 40th Founding Anniversary',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Strengthening Collaboration between Science, Mathematics and the Industry: Issues and Prospects',
				'author' => 'Alangui, W.',
				'conference_date' => '2009-11-25',
				'type' => 'National',
				'venue' => 'Gracious Angeli Hotel, Baguio City',
				'conference_title' => 'Education Meets the Industry: Re-engineering the Science and Mathematics Curriculum for Industrial Development',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Linear Stability of a Harvested Predator-Prey System with Non-monotonic Functional Response',
				'author' => 'Alangui, W.',
				'conference_date' => '2006-05-27',
				'type' => 'National',
				'venue' => 'Ateneo de Davao University, Davao City, Philippines',
				'conference_title' => 'National Convention of the Mathematical Society of the Philippines',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Resurfacing the Mathematics of the Periphery',
				'author' => 'Alangui, W.',
				'conference_date' => '2000-05-20',
				'type' => 'National',
				'venue' => 'Saint Louis University, Baguio City, Philippines',
				'conference_title' => '2000 National Convention of the Mathematical Society of the Philippines',
				'link' => NULL,
				'user_id' => 5,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Prevalence and Risk Factors of Erectile Dysfunction among Diabetic Men at the BGHMC Baguio City, Philippines',
				'author' => 'R.C. Addawe',
				'conference_date' => '2008-01-17',
				'type' => 'International',
				'venue' => 'Waikiki Beach Marriot Resort & Spa Honolulu, Hawaii',
				'conference_title' => '2008 Hawaii International Conference on Statistics, Mathematics and Related Fields',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Determination of Significant Proteinuria in Preeclampsia',
				'author' => 'R.C. Addawe',
				'conference_date' => '2008-01-17',
				'type' => 'International',
				'venue' => 'Waikiki Beach Marriot Resort & Spa Honolulu, Hawaii',
				'conference_title' => '2008 Hawaii International Conference on Statistics, Mathematics and Related Fields',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'DESA: A Hybrid Optimization Algorithm for High Dimensional Functions',
				'author' => 'R.C. Addawe',
				'conference_date' => '2006-05-24',
				'type' => 'International',
				'venue' => 'Delta Hotel, Montreal, Quebec, Canada',
				'conference_title' => '(IASTED) 8th International Conference on Control and Applications',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'DESA: Differential Evolution: Simulated Annealing for Fitting Linear Combinations of Gaussians to data',
				'author' => 'R.C. Addawe',
				'conference_date' => '2005-04-05',
				'type' => 'International',
				'venue' => 'Sydney, Australia',
				'conference_title' => '55th Session of the International Statistics Institute (ISI2005)',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Assessment of the RGEP of the College of Science AY 2003-2008',
				'author' => 'Rizavel Addawe, Ben Ibarra Fernandez and Jocelyn Rafanan',
				'conference_date' => '2008-06-26',
				'type' => 'National',
				'venue' => 'Mt. Data, Bauko, Mt. Province',
				'conference_title' => 'Faculty Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'More Lessons from the Survey and FGDs',
				'author' => 'Rizavel Addawe and Alipio Garcia',
				'conference_date' => '2008-06-26',
				'type' => 'National',
				'venue' => 'Mt. Data Lodge, Mt. Province',
				'conference_title' => 'Faculty Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Strengths and Weaknesses of UP Baguio Faculty in Teaching RGEP Courses in The college of Science Domain',
				'author' => 'RC Addawe, B. Fernandez, and J. Rafanan',
				'conference_date' => '2008-10-27',
				'type' => 'International',
				'venue' => 'UP-NISMED, Diliman, Quezon City',
				'conference_title' => 'International Conference in Science and Mathematics Education',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'The Ecology of Benguet Lily (Lilium Philippinense), An Endemic Species in the Cordillera Central Range, Luzon, Philippines',
				'author' => 'Teodora Balangcod, Virginia Cuevas, Rizavel Addawe et. al.',
				'conference_date' => '2008-02-07',
				'type' => 'International',
				'venue' => 'UP Baguio',
				'conference_title' => 'First Cordillera Studies Center International Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Conchological and Anatomical Studies of Selected Philippine Cone Snails',
				'author' => 'R.C. Addawe and Z. Baoanan',
				'conference_date' => '2006-07-17',
				'type' => 'International',
				'venue' => 'University of Singapore',
				'conference_title' => 'Conchological and Anatomical Studies of International Doctoral Students Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'A DESA algorithm for Parameter Estimation of Sums of Gaussians',
				'author' => 'R.C. Addawe',
				'conference_date' => '2005-03-04',
				'type' => 'International',
				'venue' => 'University of Cebu held at Banilad Campus, Cebu City',
				'conference_title' => '5th Philippine Computing Science Congress',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'DESA: Differential Evolution: Simulated Annealing for Fitting Linear Combinations of Gaussians to data (an application)',
				'author' => 'R.C. Addawe',
				'conference_date' => '2004-09-25',
				'type' => 'International',
				'venue' => 'UP School of Statistics-Diliman, Quezon City',
				'conference_title' => '5th Faculty-Student Conference on Statistical Sciences',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'DESA: Differential Evolution: Simulated Annealing for Fitting Linear Combinations of Gaussians',
				'author' => 'R.C. Addawe',
				'conference_date' => '2004-09-10',
				'type' => 'International',
				'venue' => 'Thesis Fellowship Program SRTC Building, Kalayaan Road, Quezon City',
				'conference_title' => 'Statistical Research and Training Center (SRTC)',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Simulated Annealing and Differential Evolution for fitting Linear Combination of Gaussians to data: A Comparison',
				'author' => 'R.C. Addawe',
				'conference_date' => '2004-05-22',
				'type' => 'International',
				'venue' => 'Siliman University, Dumaguete City',
				'conference_title' => '2004 Annual Convention of the Mathematical Society of the Philippines',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'A Comparison of Differential Evolution and Simulated Annealing',
				'author' => 'R.C. Addawe',
				'conference_date' => '2004-04-01',
				'type' => 'International',
				'venue' => 'Bulwagang Juan Luna Auditorium, University of the Philippines Baguio, Baguio City',
				'conference_title' => 'Summer Institute in the Natural Sciences and Mathematics (SINSM2004)',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Conchological Approach to the Study of Cone Snail Diversity and Conservation',
				'author' => 'R.C. Addawe and Z. Baoanan',
				'conference_date' => '2006-05-05',
				'type' => 'International',
				'venue' => 'Western Philippines University, Puerto Princesa City',
				'conference_title' => '15th Annual Philippine Biodiversity Symposium',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'UBJ-ARIMA Modeling of the Air Pollutant Carbon Monoxide in the Central Business District of Baguio City',
				'author' => 'Apuad, Mark Anthony G., Carlos, Imir Jovel E., Florentino, Marco Reuben A.,and Addawe, Rizavel C.',
				'conference_date' => '2008-05-01',
				'type' => 'International',
				'venue' => NULL,
				'conference_title' => 'Baguio Centennial Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Imminent Crime Rates in Baguio City',
				'author' => 'Juan, Vera Lo, Villegas Ma. Angela Elaine B. and Addawe, Rizavel C.',
				'conference_date' => '2008-03-01',
				'type' => 'International',
				'venue' => NULL,
				'conference_title' => 'Baguio Centennial Conference',
				'link' => NULL,
				'user_id' => 4,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'paper_title' => 'Tourist’s Arrivals in Baguio City',
				'author' => 'Cariaga, Shirley B., Castillo, Rachele P., Dapitan, Rodnir Ian L., De Jesus, Joanna Margarita R. and Addawe, Rizavel C.',
				'conference_date' => '2008-03-01',
				'type' => 'International',
				'venue' => NULL,
				'conference_title' => 'Baguio Centennial Conference',
				'link' => NULL,
				'user_id' => 4,
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
