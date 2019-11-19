<?php

use Illuminate\Database\Seeder;

class MasterMathChecklistSeeder extends Seeder
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
            'title' => 'Master of Science in Mathematics',
			'body' =>
'<strong>Total number of units: 30-33 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Master of Science in Mathematics',
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
			<td>Math 232</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 222</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 221</td>
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
            'title' => 'Master of Science in Mathematics',
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
			<td>Math 234</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective</td>
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
            'title' => 'Master of Science in Mathematics',
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
			<td>Math Elective</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective</td>
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
            'title' => 'Master of Science in Mathematics',
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
			<td>Math Elective</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math Elective (For COMPRE option only)</td>
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
			'title' => 'Master of Science in Mathematics',
			'body' =>
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the MS Mathematics Program</strong></td>
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
			<td>Math 232</td>
			<td>Real Analysis</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 222</td>
			<td>Linear Algebra</td>
			<td style="text-align: center;">3/td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 221</td>
			<td>Abstract Algebra I</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 234</td>
			<td>Complex Analysis</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
			<td style="text-align: center;" colspan="4"><strong>Electives</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 213</td>
			<td>Theory of Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 214</td>
			<td>Dynamical Systems</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 215</td>
			<td>Introduction to Mathematical Modeling</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 216</td>
			<td>Applied Partial Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 217</td>
			<td>Integral Equations</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 218</td>
			<td>Introduction to Applied Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 223</td>
			<td>Abstract Algebra II</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 225</td>
			<td>Number Theory with Applications</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 235</td>
			<td>Applied Complex Variable Theory</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 236</td>
			<td>Numerical Analysis</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 237</td>
			<td>Functional Analysis</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 240</td>
			<td>Topological Structures</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 250</td>
			<td>Modern Geometry</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 255</td>
			<td>Applied Combinatorics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 256</td>
			<td>Graph Theory</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 260</td>
			<td>Probability and Applications</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Math 298</td>
			<td>Special Topics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
    [
      'title' => 'Master of Science in Mathematics',
			'body' =>
'<p>For older checklists, refer to the <a href="https://www.upb.edu.ph/cs-menu-degr-progs/cs-msmath" target="_blank">University of the Philippines Baguio website.</a></p>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
