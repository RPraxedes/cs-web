<?php

use Illuminate\Database\Seeder;

class MathChecklistSeeder extends Seeder
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
            'title' => 'Bachelor of Science in Mathematics',
			'body' =>
'<strong>Total number of units: 135 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 53</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Math 101</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 1 (SCIENCE 10)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 1 (ARTS I)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 1 (Ethics 1)</td>
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
			<td style="text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 54</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Math 29</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 2 (COMM 10)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 2 (KAS 1 or HIST I)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 3 (SAS 1)</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 55</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 182</td>
			<td style="text-align: center;">3</td>
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
			<td>AH GE 3 (Wika 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 2 (SCIENCE 11)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PE 2</td>
			<td style="text-align: center;">(2)</td>
		</tr>
		<tr>
			<td>NSTP 1</td>
			<td style="text-align: center;">(3)</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 113</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 120</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 130</td>
			<td style="text-align: center;">3</td>
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
			<td>NSM GE 3 (STS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PE 2</td>
			<td style="text-align: center;">(2)</td>
		</tr>
		<tr>
			<td>NSTP 2</td>
			<td style="text-align: center;">(3)</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 121</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 122</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective 1</td>
			<td style="text-align: center;">3</td>
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
			<td>AH GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 140</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 136</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 163</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective 2</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 198</td>
			<td style="text-align: center;">2</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 132</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 134</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
		<tr>
			<td>Math 199</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PI 100</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 1</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 2</td>
			<td style="text-align: center;">3</td>
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
            'title' => 'Bachelor of Science in Mathematics',
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
			<td>Math 200</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective 3</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
		<tr>
			<td>Math or CMSC Elective</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 3</td>
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
			'title' => 'Bachelor of Science in Mathematics',
			'body' =>
'<table class="table table-striped" id="core-course" style="border-collapse: collapse;">
	<tbody>
		<thead>
			<tr>
				<td style="text-align: center;" colspan="4"><strong>Core Courses (16 units)</strong></td>
			</tr>
		</thead>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td style="text-align: center;"><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 29</td>
			<td>Basic Concepts in Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
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
			<td>Math 55</td>
			<td>Elementary Analysis III</td>
			<td style="text-align: center;">3</td>
			<td>Math 54</td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Mathematics',
			'body' =>
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the BS Mathematics Program</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Major Courses (44 units)</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 101</td>
			<td>Elementary Statistics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 113</td>
			<td>Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 120</td>
			<td>Algebraic Structures I</td>
			<td style="text-align: center;">3</td>
			<td>Math 29 or CMSC 55</td>
		</tr>
		<tr>
			<td>Math 121</td>
			<td>Algebraic Structures II</td>
			<td style="text-align: center;">3</td>
			<td>Math 120</td>
		</tr>
		<tr>
			<td>Math 122</td>
			<td>Linear Algebra and Matrix Theory</td>
			<td style="text-align: center;">3</td>
			<td>Math 29</td>
		</tr>
		<tr>
			<td>Math 130</td>
			<td>Mathematical Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 132</td>
			<td>Real Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 134</td>
			<td>Complex Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 136</td>
			<td>Introduction to Numerical Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 113 and Math 122</td>
		</tr>
		<tr>
			<td>Math 140</td>
			<td>Topological Structures</td>
			<td style="text-align: center;">3</td>
			<td>Junior Standing</td>
		</tr>
		<tr>
			<td>Math 163</td>
			<td>Mathematical Statistics</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 182</td>
			<td>Introduction to Computer Programming</td>
			<td style="text-align: center;">3</td>
			<td>Math 54</td>
		</tr>
		<tr>
			<td>Math 198</td>
			<td>Seminar</td>
			<td style="text-align: center;">2</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Math 199</td>
			<td>Research in Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Math 200</td>
			<td>Undergraduate Thesis</td>
			<td style="text-align: center;">3</td>
			<td>Math 199</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Qualified Electives (12 units)</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 123</td>
			<td>Elementary Theory of Numbers</td>
			<td style="text-align: center;">3</td>
			<td>Math 29 or CMSC 55</td>
		</tr>
		<tr>
			<td>Math 124</td>
			<td>Applied Algebra and Combinatorics</td>
			<td style="text-align: center;">3</td>
			<td>Math 29 or CMSC 55, and Math 55; May be taken twice</td>
		</tr>
		<tr>
			<td>Math 133</td>
			<td>Introduction to Functional Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 130</td>
		</tr>
		<tr>
			<td>Math 137</td>
			<td>Applied Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 113; May be taken twice</td>
		</tr>
		<tr>
			<td>Math 150</td>
			<td>Modern Geometry</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>Math 160</td>
			<td>Probability Theory</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Math 165</td>
			<td>Applied Statistics</td>
			<td style="text-align: center;">3</td>
			<td>Math 160 or Math 163; May be taken twice</td>
		</tr>
		<tr>
			<td>Math 170</td>
			<td>Foundations of Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>Math 29 or CMSC 55</td>
		</tr>
		<tr>
			<td>Math 181</td>
			<td>Mathematical Methods of Operation Research</td>
			<td style="text-align: center;">3</td>
			<td>Math 122 or CMSC 116</td>
		</tr>
		<tr>
			<td>Math 190</td>
			<td>Issues in Mathematics Education</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Math 197</td>
			<td>Selected Topics in Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI); May be taken twice</td>
		</tr>
		<tr>
			<td>CMSC 161</td>
			<td>Interactive Computer Graphics</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 116; or Math 113, Math 122, and Math 182; or Physics 121, Physics 122, and Physics 131</td>
		</tr>
		<tr>
			<td>CMSC 162</td>
			<td>Artificial Intelligence</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123</td>
		</tr>
		<tr>
			<td>CMSC 191</td>
			<td>Special Topics</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI); May be taken twice</td>
		</tr>
		<tr>
			<td>CMSC 198</td>
			<td>Practicum</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Physical Science Courses (15 units)</strong></td>
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
			<td>None</td>
		</tr>
		<tr>
			<td>Physics 101.1</td>
			<td>Fundamental Physics I Laboratory</td>
			<td style="text-align: center;">1</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Physics 102</td>
			<td>Fundamental Physics II</td>
			<td style="text-align: center;">4</td>
			<td>Physics 101/equiv., Physics 101.1/equiv., and Math 53</td>
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
			<td style="text-align: center;" colspan="4"><strong>Other Required Courses (48 units)</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td colspan="2"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>3 Free Electives</td>
			<td colspan="2">Any electives from the 3 Colleges</td>
			<td style="text-align: center;">9</td>
		</tr>
		<tr>
			<td>PI 100</td>
			<td colspan="2">Life of Rizal</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>GE</td>
			<td colspan="2">12 units of Arts and Humanities GE courses, 12 units of Social Sciences and Philosophy GE courses, 12 units of Natural Sciences and Mathematics GE courses</td>
			<td style="text-align: center;">36</td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
    [
      'title' => 'Bachelor of Science in Mathematics',
			'body' =>
'<p>For older checklists, refer to the <a href="https://www.upb.edu.ph/cs-menu-degr-progs/bachelor-of-science-in-mathematics" target="_blank">University of the Philippines Baguio website.</a></p>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
