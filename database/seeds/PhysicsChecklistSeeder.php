<?php

use Illuminate\Database\Seeder;

class PhysicsChecklistSeeder extends Seeder
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
            'title' => 'Bachelor of Science in Physics',
			'body' =>
'<strong>Total number of units: 143 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="1st-1st" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 101</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 101.1</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Math 53</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>NSM GE 1 (SCIENCE 10)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 1 (Ethics 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 2 (KAS 1 or HIST 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PE 1</td>
			<td style="text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="1st-2nd" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 102</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 102.1</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Physics 121</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Math 54</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>AH GE 1 (ARTS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PE 2</td>
			<td style="text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="2nd-1st" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 103</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 103.1</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Physics 122</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 131</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>NSM GE 2 (SCIENCE 11)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 2 (COMM 10)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSTP 1</td>
			<td style="text-align: center;">(3)</td>
		</tr>
		<tr>
			<td>PE 2</td>
			<td style="text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="2nd-2nd" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 104</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 104.1</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Physics 123</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 161</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 171</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 3 (Wika 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSTP 2</td>
			<td style="text-align: center;">(3)</td>
		</tr>
		<tr>
			<td>PE 2</td>
			<td style="text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>18</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="3rd-1st" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 173</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Physics 172</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 181</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 162</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 1</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="3rd-2nd" style="border-collapse: collapse;">
	<thead>
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
			<td>Physics 165</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 175</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 182</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 199</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Chemistry 18</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Chemistry 18.1</td>
			<td style="text-align: center;">1</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="4th-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Fourth Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>Physics 183</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 195</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 196</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Free Elective 2</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 3 (SAS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 3 (STS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Geo 11</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="4th-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Fourth Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>Physics 195</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Physics 200</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PI 100</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>15</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Physics',
			'body' =>
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the BS Physics Program</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Foundation Courses</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 53</td>
			<td>Elementary Analysis I</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 54</td>
			<td>Elementary Analysis II</td>
			<td style="text-align: center;">5</td>
			<td>Math 53</td>
		</tr>
		<tr>
			<td>Geology 11</td>
			<td>Principles of Geology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Chemistry 18</td>
			<td>Introductory Physical Chemistry</td>
			<td style="text-align: center;">4</td>
			<td>Corequisite: Chemistry 18.1</td>
		</tr>
		<tr>
			<td>Chemistry 18.1</td>
			<td>Introductory Physical Chemistry Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>Corequisite: Chemistry 18</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Major Courses</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Physics 101</td>
			<td>Fundamental Physics I</td>
			<td style="text-align: center;">4</td>
			<td>Corequisite: Math 53</td>
		</tr>
		<tr>
			<td>Physics 101.1</td>
			<td>Fundamental Physics I Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>Corequisite: Physics 101</td>
		</tr>
		<tr>
			<td>Physics 102</td>
			<td>Fundamental Physics II</td>
			<td style="text-align: center;">4</td>
			<td>Physics 101/equiv., Physics 101.1/equiv., and Math 53; Corequisite: Math 54</td>
		</tr>
		<tr>
			<td>Physics 102.1</td>
			<td>Fundamental Physics II Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>Corequisite: Physics 102</td>
		</tr>
		<tr>
			<td>Physics 103</td>
			<td>Fundamental Physics III</td>
			<td style="text-align: center;">4</td>
			<td>Physics 102/equiv., Physics 102.1/equiv., and Math 54</td>
		</tr>
		<tr>
			<td>Physics 103.1</td>
			<td>Fundamental Physics III Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>Corequisite: Physics 103</td>
		</tr>
		<tr>
			<td>Physics 104</td>
			<td>Modern Physics I</td>
			<td style="text-align: center;">4</td>
			<td>Physics 103; Corequisite: Physics 121</td>
		</tr>
		<tr>
			<td>Physics 104.1</td>
			<td>Modern Physics I Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>Corequisite: Physics 104</td>
		</tr>
		<tr>
			<td>Physics 121</td>
			<td>Mathematical Methods in Physics I</td>
			<td style="text-align: center;">4</td>
			<td>Math 53</td>
		</tr>
		<tr>
			<td>Physics 122</td>
			<td>Mathematical Methods in Physics II</td>
			<td style="text-align: center;">4</td>
			<td>Physics 121 or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 123</td>
			<td>Mathematical Methods in Physics III</td>
			<td style="text-align: center;">4</td>
			<td>Physics 121</td>
		</tr>
		<tr>
			<td>Physics 131</td>
			<td>Computational Physics</td>
			<td style="text-align: center;">4</td>
			<td>Physics 121 or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 161</td>
			<td>Theoretical Mechanics I</td>
			<td style="text-align: center;">3</td>
			<td>Physics 101; Corequisite: Physics 123 or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 162</td>
			<td>Theoretical Mechanics II</td>
			<td style="text-align: center;">3</td>
			<td>Physics 161</td>
		</tr>
		<tr>
			<td>Physics 165</td>
			<td>Statistical Physics I</td>
			<td style="text-align: center;">3</td>
			<td>Physics 161 or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 171</td>
			<td>Electromagnetic Theory I</td>
			<td style="text-align: center;">3</td>
			<td>Physics 102; Corequisite: Physics 123</td>
		</tr>
		<tr>
			<td>Physics 172</td>
			<td>Electromagnetic Theory II</td>
			<td style="text-align: center;">3</td>
			<td>Physics 171</td>
		</tr>
		<tr>
			<td>Physics 173</td>
			<td>Electronic Physics</td>
			<td style="text-align: center;">4</td>
			<td>Physics 102, Physics 102.1</td>
		</tr>
		<tr>
			<td>Physics 175</td>
			<td>Optical Physics</td>
			<td style="text-align: center;">3</td>
			<td>Physics 172 or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 181</td>
			<td>Quantum Physics I</td>
			<td style="text-align: center;">3</td>
			<td>Physics 104</td>
		</tr>
		<tr>
			<td>Physics 182</td>
			<td>Quantum Physics II</td>
			<td style="text-align: center;">3</td>
			<td>Physics 181</td>
		</tr>
		<tr>
			<td>Physics 183</td>
			<td>Solid State Physics</td>
			<td style="text-align: center;">3</td>
			<td>Physics 165 and Physics 181</td>
		</tr>
		<tr>
			<td>Physics 195</td>
			<td>Special Topics in Physics and Applied Physics</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI); Must be taken twice with different topics</td>
		</tr>
		<tr>
			<td>Physics 196</td>
			<td>Undergraduate Seminar</td>
			<td style="text-align: center;">1</td>
			<td>Senior Standing</td>
		</tr>
		<tr>
			<td>Physics 199</td>
			<td>Undergraduate Research</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Physics 200</td>
			<td>Undergraduate Thesis</td>
			<td style="text-align: center;">3</td>
			<td>Physics 199</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Electives</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td></td>
		</tr>
		<tr>
			<td>Two (2) Free Electives</td>
			<td>Any Electives from the 3 colleges</td>
			<td style="text-align: center;">6</td>
			<td></td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
            'title' => 'Bachelor of Science in Physics',
			'body' =>
'<h3>Retention Policy</h3><br>
<p>A student who obtains failing grades in <strong>more than six (6) units of Mathematics and/or Physics at the end of a school year</strong> shall be removed from the program, unless he/she is of senior standing. (A senior standing BS Physics student should have at least 70 units of Physics and Math courses.) Students are subject to evaluation at the end of every academic year.</p>
',
  		'created_at' => now(),
  		'updated_at' => now()
    ],
    [
      'title' => 'Bachelor of Science in Physics',
			'body' =>
'<p>For older checklists, refer to the <a href="https://www.upb.edu.ph/cs-menu-degr-progs/cs-physics" target="_blank">University of the Philippines Baguio website.</a></p>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
