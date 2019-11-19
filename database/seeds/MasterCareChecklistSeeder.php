<?php

use Illuminate\Database\Seeder;

class MasterCareChecklistSeeder extends Seeder
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
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' => '',
			'created_at' => now(),
			'updated_at' => now()
        ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="1st-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Full-time Students</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>First Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 260</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 261</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 265</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 230</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>12</strong></td>
        		</tr>
        	</tfoot>
        </table>',
			'created_at' => now(),
			'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="1st-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Full-time Students (12 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>First Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 283</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 281</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 299</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>12</strong></td>
        		</tr>
        	</tfoot>
        </table>',
			'created_at' => now(),
			'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="2nd-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Full-time Students (12 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Second Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 298</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
			'created_at' => now(),
			'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
      'body' =>
        '<table class="table table-striped" id="2nd-2nd" style="border-collapse: collapse;">
          <thead>
            <tr>
              <td style="text-align: center;" colspan="2"><strong>For Full-time Students (12 units)</strong></td>
            </tr>
            <tr>
              <td style="text-align: center;" colspan="2"><strong>Second Year, Second Semester</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Subjects</strong></td>
              <td style="text-align: center;"><strong>Units</strong></td>
            </tr>
            <tr>
              <td>CRE 300</td>
              <td style="text-align: center;">3</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td style="text-align: center;"><strong>Total Units</strong></td>
              <td style="text-align: center;"><strong>3</strong></td>
            </tr>
          </tfoot>
        </table>',
      'created_at' => now(),
      'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
      'body' =>
        '<table class="table table-striped" id="3rd-1st" style="border-collapse: collapse;">
          <thead>
            <tr>
              <td style="text-align: center;" colspan="2"><strong>For Part-time Students (9 units)</strong></td>
            </tr>
            <tr>
              <td style="text-align: center;" colspan="2"><strong>First Year, First Semester</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Subjects</strong></td>
              <td style="text-align: center;"><strong>Units</strong></td>
            </tr>
            <tr>
              <td>CRE 260</td>
              <td style="text-align: center;">3</td>
            </tr>
            <tr>
              <td>CRE 261</td>
              <td style="text-align: center;">3</td>
            </tr>
            <tr>
              <td>CRE 230</td>
              <td style="text-align: center;">3</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td style="text-align: center;"><strong>Total Units</strong></td>
              <td style="text-align: center;"><strong>9</strong></td>
            </tr>
          </tfoot>
        </table>',
      'created_at' => now(),
      'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="3rd-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (9 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>First Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 265</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 299</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>9</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="4th-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (9 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Second Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 281</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 283</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 298</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>9</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="4th-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (9 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Second Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 300</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="5th-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>First Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 260</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 230</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="5th-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>First Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 261</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 299</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="6th-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Second Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 265</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 283</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="6th-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Second Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 298</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="7th-1st" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Third Year, First Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>Elective</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 281</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>6</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="7th-2nd" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>For Part-time Students (6 units)</strong></td>
        		</tr>
        		<tr>
        			<td style="text-align: center;" colspan="2"><strong>Third Year, Second Semester</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><strong>Subjects</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 300</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        	<tfoot>
        		<tr>
        			<td style="text-align: center;"><strong>Total Units</strong></td>
        			<td style="text-align: center;"><strong>3</strong></td>
        		</tr>
        	</tfoot>
        </table>',
    	'created_at' => now(),
    	'updated_at' => now()
    ],
		[
			'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
        	<thead>
        		<tr>
        			<td style="text-align: center;" colspan="3"><strong>List of Courses in the Master of Science in Conservation and Restoration Ecology Program</strong></td>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td style="text-align: center;" colspan="3"><strong>Core Courses (15 units)</strong></td>
        		</tr>
        		<tr>
        			<td><strong>Course</strong></td>
        			<td><strong>Title</strong></td>
        			<td style="text-align: center;"><strong>Units</strong></td>
        		</tr>
        		<tr>
        			<td>CRE 260</td>
        			<td>Theories, Principles, and Applications of Conservation and Restoration Ecology*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 261</td>
        			<td>Disturbance Ecology*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 265</td>
        			<td>Advanced Biogeography*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 230</td>
        			<td>GIS and Mapping for Ecology*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        		<tr>
        			<td>CRE 299</td>
        			<td>Design and Analysis of Laboratory and Field Experiments 3</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td style="text-align: center;" colspan="3"><strong>Elective Courses (6 units)</strong></td>
        		</tr>
            <tr>
        			<td>CRE 220</td>
        			<td>Environmental Microbiology*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 224</td>
        			<td>Biological Responses to Environmental Stress*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 262</td>
        			<td>Conservation and Restoration Ecology in Marine Ecosystems*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 263</td>
              <td>Conservation and Restoration Ecology in Terrestrial Ecosystems*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 264</td>
              <td>Conservation and Restoration Ecology in Freshwater Ecosystems*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 266</td>
        			<td>Landscape Ecology*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 297</td>
        			<td>Special Topics in Conservation and Restoration Ecology</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td style="text-align: center;" colspan="3"><strong>Other Required Courses (14 units)</strong></td>
        		</tr>
            <tr>
        			<td>CRE 283</td>
        			<td>Ethical, Legal, and Social Issues on the Environment</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 281</td>
        			<td>Indigenous Management of Resources*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 298</td>
        			<td>Seminar</td>
        			<td style="text-align: center;">3</td>
        		</tr>
            <tr>
        			<td>CRE 300</td>
        			<td>Master\'s Thesis*</td>
        			<td style="text-align: center;">3</td>
        		</tr>
        	</tbody>
        </table>',
			'created_at' => now(),
			'updated_at' => now()
		],
    [
            'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
        '<h3>Program Requirements</h3><br>
        <ul>
          <li>
            Core Courses
            <ul>
              <li>27 units - MM 201, 202, 203, 220, 222, 230, 240, 291.1, and 291.2</li>
            </ul>
          </li>
          <li>
            Elective Courses
            <ul>
              <li>9 units - MM 250, 290, 292, 293, 294, 295, 296, 298**, and 299</li>
            </ul>
          </li>
          <li>Comprehensive Examination</li>
        </ul>
        <p>**May be taken for credit twice; student may take a maximum of two different special topics.</p>
        <p>*Courses with field or lab methods and techniques</p>

        <h3>Graduation Requirements</h3>
        <p>To qualify for graduation, a student must satisfy the following requirements:</p>
        <ol>
          <li>Complete a minimum of twenty-seven (27) units of course work, 2 units of seminar course and 6 units of Master’s thesis;</li>
          <li>Maintain a Cumulative Weighted Average Grade (CWAG) of “2.0” or better in his/her graduate courses at the end of each academic year;</li>
          <li>Successfully defend a Master’s Thesis;</li>
          <li>Submit at least five (5) bound copies and 3 soft copies (in CDs) of the certified and approved Master’s Thesis; and,</li>
          <li>Submit a publishable form of a research paper based on the MS thesis (student as lead author) to a peer-reviewed or ISI/SCOPUS-listed.</li>
        </ol>

        <p><a href="http://gpo.upb.edu.ph/graduate-programs/mscare">For more information, see the GPO website.</a></p>
        ',
			'created_at' => now(),
			'updated_at' => now()
    ],
    [
      'title' => 'Master of Science in Conservation and Restoration Ecology',
			'body' =>
'<p>For older checklists, refer to the <a href="https://www.upb.edu.ph/cs-menu-degr-progs/ms-care" target="_blank">University of the Philippines Baguio website.</a></p>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
