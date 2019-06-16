<?php

use Illuminate\Database\Seeder;

class CMSCChecklistSeeder extends Seeder
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
            'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<strong>Total number of units: 137 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="1st-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>First Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 11</td>
			<td style="text-align: center;">3</td>
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
			<td>AH GE 1 (ARTS I)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 1 (SCIENCE 10)</td>
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
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="1st-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>First Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 12</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 55</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>CMSC 130</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 54</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>SSP GE 1 (Ethics 1)</td>
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
			<td style="text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="2nd-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Second Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 110</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 131</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 55</td>
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
			<td>AH GE 2 (COMM 10)</td>
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
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="2nd-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Second Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 116</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 123</td>
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
			<td>NSM GE 2 (SCIENCE 11)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 2 (KAS 1 or HIST 1)</td>
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
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="3rd-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Third Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 117</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 124</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 127</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC or Math Elective 1</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 3 (Wika 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 2 (STS 1)</td>
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
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="3rd-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Third Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 125</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 128</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 141</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 199</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>CMSC or Math Elective 2</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 1</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>16</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="4th-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Fourth Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 135</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 142</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC 190</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 2 (SAS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Free Elective 2</td>
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
			<td style="text-align: center;"><strong>18</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="4th-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Fourth Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Subjects</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>CMSC 190</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>CMSC or Math Elective 3</td>
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
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the BS Computer Science Program</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Major Courses (57 units)</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td style="text-align: center;"><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>CMSC 11</td>
			<td>Introduction to Computer Sciences</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>CMSC 12</td>
			<td>Advance Programming Concepts</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 11 or Math 182</td>
		</tr>
		<tr>
			<td>CMSC 55</td>
			<td>Discrete Mathematical Structures in Computer Science</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>CMSC 110</td>
			<td>Internet Technologies</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 12</td>
		</tr>
		<tr>
			<td>CMSC 116</td>
			<td>Mathematical Methods for the Computational Sciences</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
		</tr>
		<tr>
			<td>CMSC 117</td>
			<td>Numerical Methods</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 116</td>
		</tr>
		<tr>
			<td>CMSC 123</td>
			<td>Data Structures</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 12 and CMSC 55, or Math 182 and Math 29</td>
		</tr>
		<tr>
			<td>CMSC 124</td>
			<td>Design and Implementation of Programming Languages</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123</td>
		</tr>
		<tr>
			<td>CMSC 125</td>
			<td>Operating Systems</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123 and CMSC 131</td>
		</tr>
		<tr>
			<td>CMSC 127</td>
			<td>File Processing and Database Systems</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123</td>
		</tr>
		<tr>
			<td>CMSC 128</td>
			<td>Introduction to Software Engineering</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123</td>
		</tr>
		<tr>
			<td>CMSC 130</td>
			<td>Logic Design and Digital Computer Circuits</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 11 or Math 182</td>
		</tr>
		<tr>
			<td>CMSC 131</td>
			<td>Computer Organization and Assembly Language Programming</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 12</td>
		</tr>
		<tr>
			<td>CMSC 135</td>
			<td>Computer Networks</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 125</td>
		</tr>
		<tr>
			<td>CMSC 141</td>
			<td>Automata and Language Theory</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 55 or Math 29</td>
		</tr>
		<tr>
			<td>CMSC 142</td>
			<td>Design and Analysis of Algorithms</td>
			<td style="text-align: center;">3</td>
			<td>CMSC 123</td>
		</tr>
		<tr>
			<td>CMSC 190</td>
			<td>Special Problem</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI); Must be taken twice</td>
		</tr>
		<tr>
			<td>CMSC 199</td>
			<td>Undergraduate Seminar</td>
			<td style="text-align: center;">1</td>
			<td>Consent of Instructor (COI); May be taken twice</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Foundation Courses (26 units)</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td style="text-align: center;"><strong>Prerequisites</strong></td>
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
		<tr>
			<td>Math 101</td>
			<td>Elementary Statistics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
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
			<td style="text-align: center;" colspan="4"><strong>Qualified Electives (9 units)</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td style="text-align: center;"><strong>Prerequisites</strong></td>
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
			<td>Math 120</td>
			<td>Algebraic Structures I</td>
			<td style="text-align: center;">3</td>
			<td>Math 29 or CMSC 55</td>
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
			<td>Math 134</td>
			<td>Complex Analysis</td>
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
			<td>Math 163</td>
			<td>Mathematical Statistics</td>
			<td style="text-align: center;">3</td>
			<td>Math 55</td>
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
			<td>Math 197</td>
			<td>Selected Topics in Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>Consent of Instructor (COI); May be taken twice</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Other Required Courses (45 units)</strong></td>
		</tr>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;" colspan="2"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>2 Free Electives</td>
			<td colspan="2">Any electives from the 3 Colleges</td>
			<td style="text-align: center;">6</td>
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
		]);
    }
}
