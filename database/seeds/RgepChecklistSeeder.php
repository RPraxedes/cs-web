<?php

use Illuminate\Database\Seeder;

class RgepChecklistSeeder extends Seeder
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
    'title' => 'The Revitalized General Education Program',
		'body' => '',
		'created_at' => now(),
		'updated_at' => now()
  ],
	[
    'title' => 'The Revitalized General Education Program',
		'body' =>
      '<p>The Revitalized General Education Program (RGEP) of the University of the Philippines System is a basic general education or liberal arts program which makes up the first two years of a baccalaureate (Bachelor of Arts or Bachelor of Science) curriculum. In general, it aims to provide students a broad perspective grounded both in the arts and in the sciences. It is the liberal arts education that makes the UP student a well-rounded person, ready for lifelong learning skills.</p>
      <p>Students must take a minimum of 15 units from each of the 3 domains for a total of 45 units.</p>',
		'created_at' => now(),
		'updated_at' => now()
  ],
  [
    'title' => 'The Revitalized General Education Program',
		'body' =>
      '<h3>The 3 domains of knowledge are:</h3>
      <ul>
        <li>Arts and Humanities (15 units)</li>
        <li>Social Sciences and Philosophy (15 units)</li>
        <li>Natural Sciences and Mathematics (15 units)</li>
      </ul>
      <h3>Objectives</h3>
      <ul>
        <li>to broaden intellectual and cultural horizons</li>
        <li>to foster commitment to nationalism balanced by a sense of internationalism</li>
        <li>to cultivate a capacity for independent, critical, and creative thinking</li>
        <li>to infuse a passion for learning with a high sense of moral and intellectual integrity</li>
      </ul>
      <h3>Methods of Inquiry</h3>
      <ul>
        <li>quantitative and other forms of reasoning</li>
        <li>interpretive and aesthetic modes</li>
      </ul>
      <h3>Competencies</h3>
      <ul>
        <li>oral and written communication skills</li>
        <li>independent and critical thinking</li>
        <li>creative thinking</li>
      </ul>',
		'created_at' => now(),
		'updated_at' => now()
  ],
  [
    'title' => 'The Revitalized General Education Program',
    'body' =>
      '<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
        <thead>
          <tr>
            <td style="text-align: center;" colspan="3"><strong>List of RGEP/GE Courses in the College of Science (as of November 2008)</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Course</strong></td>
            <td><strong>Description</strong></td>
            <td style="text-align: center;"><strong>Units</strong></td>
          </tr>
          <tr>
            <td>Biology 10</td>
            <td><i>The Gene in Life.</i><br>The fundamental role of the gene in life.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Chemistry 1</td>
            <td><i>A Practical Approach.</i><br>Basic chemistry concepts and their applications.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Geology 2</td>
            <td><i>The Changing Philippine Landforms.</i><br>Description and analysis of major physical features and attributes of the Philippine archipelago.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Mathematics 1</td>
            <td><i>Mathematics in Life.</i><br>Fundamental concepts in mathematics & applications.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Natural Science I</td>
            <td><i>Foundations of Natural Science I.</i><br>Fundamental concepts, principles & theories of physics & chemistry.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Natural Science II</td>
            <td><i>Foundations of Natural Science II.</i><br>Fundamental concepts, principles & theories of earth & life sciences.<br>Prereq: Nat Sci I.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Natural Science III</td>
            <td><i>Earth and Life Through Time.</i><br>Study of the physical, atmospheric, hydrologic and biologic conditions of the earth from pre-history to the modern times.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Physics 11</td>
            <td><i>The Physics of Everyday Activities.</i><br>Study of basic physical principles through everyday experience of simple to sophisticated technologies in the areas of communication, transportation, information technology and medical technology.</td>
            <td style="text-align: center;">3</td>
          </tr>
          <tr>
            <td>Science, Technology & Society (STS)</td>
            <td>The analysis from historical & futuristic perspectives of the nature & role of science & technology in society & of the socio-cultural & politico-economic factors affecting their development with emphasis on Philippine setting.<br>Prereq: SS.</td>
            <td style="text-align: center;">3</td>
          </tr>
        </tbody>
      </table>',
    'created_at' => now(),
    'updated_at' => now()
  ]
	]);
  }
}
