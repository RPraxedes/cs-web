<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
  			[
  				'department' => 'Department of Biology',
  				'short_title' => 'biology',
  			],
  			[
  				'department' => 'Department of Mathematics and Computer Science',
  				'short_title' => 'math-comsci',
  			],
        [
          'department' => 'Department of Physical Sciences',
          'short_title' => 'physical-science',
        ],
        [
          'department' => 'Human Kinetics Program Faculty',
          'short_title' => 'hkp',
        ],
        [
  				'department' => 'College Executive Board',
  				'short_title' => 'executive',
  			],
		  ]);

      DB::table('checklists')->insert([
        [
          'title' => 'Department of Mathematics and Computer Science',
    			'body' =>
            '<div class="row margin-top-80">
              <div class="col-xl-12 display-4 title text-center">
                <h1>Overview</h1>
              </div>
              <div class="row margin-top-80 justify-content-center">
          			<div class="col-md-10">
          				<div class="text-justify">
          					<p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
                    </p>
          				</div>
          			</div>
              </div>
            </div>
            <div class="row margin-top-80">
              <div class="col-xl-12 display-4 title text-center">
                <h1>Mission Vision</h1>
              </div>
              <div class="row margin-top-80 justify-content-center">
          			<div class="col-md-10">
          				<div class="text-justify">
          					<p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
                    </p>
          				</div>
          			</div>
              </div>
            </div>',
    			'created_at' => now(),
    			'updated_at' => now()
        ],
      ]);
    }
}
