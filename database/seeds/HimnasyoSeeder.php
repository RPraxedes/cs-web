<?php

use Illuminate\Database\Seeder;

class HimnasyoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
		//data from 2019
	DB::table('checklists')->insert([
	[
    'title' => 'Himnasyo Amianan',
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
            <p>
              Fusce ut lacus ut diam porta molestie. Suspendisse sed augue sit amet nunc consectetur tincidunt. Aliquam blandit orci eu sem scelerisque, sit amet pellentesque eros auctor. Praesent faucibus id diam ac tristique. Donec et lectus pulvinar, sodales dui sed, fringilla est. Aenean sollicitudin auctor eros, sit amet commodo nibh vehicula et. Integer faucibus nunc id lectus imperdiet dignissim. Sed euismod, dolor at tristique viverra, elit velit bibendum tortor, et dictum lectus libero vitae purus. Nam elementum tempus lacus, eu maximus neque consectetur non.
  					</p>
  				</div>
  			</div>
      </div>
    </div>
    <div class="row margin-top-80">
      <div class="col-xl-12 display-4 title text-center">
        <h1>Department of Biology</h1>
      </div>
      <div class="row margin-top-80 justify-content-center">
        <div class="col-md-10">
          <div class="text-justify">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
            </p>
            <p>
              Fusce ut lacus ut diam porta molestie. Suspendisse sed augue sit amet nunc consectetur tincidunt. Aliquam blandit orci eu sem scelerisque, sit amet pellentesque eros auctor. Praesent faucibus id diam ac tristique. Donec et lectus pulvinar, sodales dui sed, fringilla est. Aenean sollicitudin auctor eros, sit amet commodo nibh vehicula et. Integer faucibus nunc id lectus imperdiet dignissim. Sed euismod, dolor at tristique viverra, elit velit bibendum tortor, et dictum lectus libero vitae purus. Nam elementum tempus lacus, eu maximus neque consectetur non.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-top-80">
      <div class="col-xl-12 display-4 title text-center">
        <h1>Department of Physical Sciences</h1>
      </div>
      <div class="row margin-top-80 justify-content-center">
        <div class="col-md-10">
          <div class="text-justify">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
            </p>
            <p>
              Fusce ut lacus ut diam porta molestie. Suspendisse sed augue sit amet nunc consectetur tincidunt. Aliquam blandit orci eu sem scelerisque, sit amet pellentesque eros auctor. Praesent faucibus id diam ac tristique. Donec et lectus pulvinar, sodales dui sed, fringilla est. Aenean sollicitudin auctor eros, sit amet commodo nibh vehicula et. Integer faucibus nunc id lectus imperdiet dignissim. Sed euismod, dolor at tristique viverra, elit velit bibendum tortor, et dictum lectus libero vitae purus. Nam elementum tempus lacus, eu maximus neque consectetur non.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-top-80">
      <div class="col-xl-12 display-4 title text-center">
        <h1>Department of Mathematics and Computer Science</h1>
      </div>
      <div class="row margin-top-80 justify-content-center">
        <div class="col-md-10">
          <div class="text-justify">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
            </p>
            <p>
              Fusce ut lacus ut diam porta molestie. Suspendisse sed augue sit amet nunc consectetur tincidunt. Aliquam blandit orci eu sem scelerisque, sit amet pellentesque eros auctor. Praesent faucibus id diam ac tristique. Donec et lectus pulvinar, sodales dui sed, fringilla est. Aenean sollicitudin auctor eros, sit amet commodo nibh vehicula et. Integer faucibus nunc id lectus imperdiet dignissim. Sed euismod, dolor at tristique viverra, elit velit bibendum tortor, et dictum lectus libero vitae purus. Nam elementum tempus lacus, eu maximus neque consectetur non.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-top-80">
      <div class="col-xl-12 display-4 title text-center">
        <h1>Human Kinetics Program Faculty</h1>
      </div>
      <div class="row margin-top-80 justify-content-center">
        <div class="col-md-10">
          <div class="text-justify">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris mauris, eleifend vel nisi eu, placerat elementum lectus. Quisque at cursus turpis, vel luctus lorem. Aenean fermentum pulvinar condimentum. Duis ultricies quis nibh non sodales. Aenean semper, sem ut pellentesque aliquam, quam velit egestas odio, et sodales ante libero id ipsum. Duis aliquet augue non magna accumsan, at tempor tellus tincidunt. Mauris congue, dui id tincidunt placerat, arcu lacus sollicitudin metus, id auctor elit mi eget orci. Fusce imperdiet placerat nisl nec mattis. Morbi placerat urna a nibh finibus mattis. Etiam id ultricies ligula. Morbi viverra quam quis risus ornare, eget iaculis odio accumsan. Quisque magna nisl, commodo vitae sodales vitae, rutrum vitae libero. Ut congue urna quam, id sodales purus dignissim nec.
            </p>
            <p>
              Fusce ut lacus ut diam porta molestie. Suspendisse sed augue sit amet nunc consectetur tincidunt. Aliquam blandit orci eu sem scelerisque, sit amet pellentesque eros auctor. Praesent faucibus id diam ac tristique. Donec et lectus pulvinar, sodales dui sed, fringilla est. Aenean sollicitudin auctor eros, sit amet commodo nibh vehicula et. Integer faucibus nunc id lectus imperdiet dignissim. Sed euismod, dolor at tristique viverra, elit velit bibendum tortor, et dictum lectus libero vitae purus. Nam elementum tempus lacus, eu maximus neque consectetur non.
            </p>
          </div>
        </div>
      </div>
    </div>',
		'created_at' => now(),
		'updated_at' => now()
  ],
  [
    'title' => 'Himnasyo Amianan',
		'body' => 'gallery',
		'created_at' => now(),
		'updated_at' => now()
  ],
	]);
  }
}
