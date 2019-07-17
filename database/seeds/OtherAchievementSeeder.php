<?php

use Illuminate\Database\Seeder;

class OtherAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Joel M. Addawe
		DB::table('otherachievements')->insert([
			[
				'content' => 
'<ul>
<li>UPB CSC Research:&nbsp;Mathematical Modeling of the Predation of Rice Plants and Weeds by Invasive Golden Apple Snail (<em>Pomacea canaliculata</em>) with Harvesting: 2016-2017</li>
<li>UP EIDR: Mathematical Analysis of Climate-based Malaria Transmission Model with Age-Structured Human Population: 2015-2017</li>
<li>Doctoral Studies Program : June 2002 &mdash; May 2004; June 1, 2005-May 31, 2006; Nov 2, 2010 &mdash; May 31, 2011</li>
<li>Principal Investigator: RpnMPI - An Open Source Project (UP Faculty Research Grant &mdash; UP Diliman 2005) Software and Computer Programs</li>
<li>Financial Grant Under the Alternate (Sandwich) Study of the System Faculty Development Program of UP. Study visit at Ludwig Maximilian University, Munich Germany (June &mdash; August 2004)</li>
<li>Local Faculty Grant: June 1992- May 31, 1995 .MS Applied Mathematics (Computer Science)</li>
</ul>',
				'user_id' => 3,
				'published_at' => now(),
				'created_at' => now(),
				'updated_at' => now(),
			],
		]);
    }
}
