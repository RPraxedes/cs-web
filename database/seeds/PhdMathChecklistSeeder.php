<?php

use Illuminate\Database\Seeder;

class PhdMathChecklistSeeder extends Seeder
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
            'title' => 'Doctor of Philosophy in Mathematics',
			'body' => '',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Doctor of Philosophy in Mathematics',
			'body' =>
'<table class="table table-striped" id="1st-1st" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Regular Ph.D. Mathematics Program</strong></td>
		</tr>
	</thead>
	<tbody>
    <tr>
      <td colspan="2">A three-year program designed for students who have earned their Master of Science in Mathematics degree (or in an allied field).</td>
    </tr>
		<tr>
			<td><strong>Courses</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>Required Courses</td>
			<td style="text-align: center;">9</td>
		</tr>
		<tr>
			<td>Electives</td>
			<td style="text-align: center;">18</td>
		</tr>
		<tr>
			<td>Graduate Seminar</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Qualifying Examination</td>
			<td style="text-align: center;">-</td>
		</tr>
		<tr>
			<td>Candidacy Examination</td>
			<td style="text-align: center;">-</td>
		</tr>
		<tr>
			<td>Dissertation</td>
			<td style="text-align: center;">12</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>40</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Doctor of Philosophy in Mathematics',
			'body' =>
'<table class="table table-striped" id="1st-2nd" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Straight Ph.D. Mathematics Program</strong></td>
		</tr>
	</thead>
	<tbody>
    <tr>
      <td colspan="2">A four-year program designed for students who have earned their Bachelor of Science in Mathematics degree (or in allied field) who meet certain qualifications (consult the Graduate Program Office).</td>
    </tr>
		<tr>
			<td><strong>Courses</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr>
			<td>Required Courses</td>
			<td style="text-align: center;">21</td>
		</tr>
		<tr>
			<td>Electives</td>
			<td style="text-align: center;">24</td>
		</tr>
    <tr>
			<td>Graduate Seminar</td>
			<td style="text-align: center;">1</td>
		</tr>
		<tr>
			<td>Qualifying Examination</td>
			<td style="text-align: center;">-</td>
		</tr>
		<tr>
			<td>Candidacy Examination</td>
			<td style="text-align: center;">-</td>
		</tr>
		<tr>
			<td>Dissertation</td>
			<td style="text-align: center;">12</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>58</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
			'title' => 'Doctor of Philosophy in Mathematics',
			'body' =>
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the Ph.D. Mathematics Program</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>Required Core Courses</strong></td>
		</tr>
		<tr>
			<td><strong>Course</strong></td>
			<td><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Math 221</td>
			<td>Abstract Algebra I</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
		<tr>
			<td>Math 222</td>
			<td>Linear Algebra</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
		<tr>
			<td>Math 232</td>
			<td>Real Analysis</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
		<tr>
			<td>Math 234</td>
			<td>Complex Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 232</td>
		</tr>
		<tr>
			<td>Math 223</td>
			<td>Abstract Algebra II</td>
			<td style="text-align: center;">3</td>
			<td>Math 221</td>
		</tr>
		<tr>
			<td>Math 237</td>
			<td>Functional Analysis</td>
			<td style="text-align: center;">3</td>
			<td>Math 234</td>
		</tr>
		<tr>
			<td>Math 240</td>
			<td>Topological Structures</td>
			<td style="text-align: center;">3</td>
			<td>COI</td>
		</tr>
    <tr>
			<td style="text-align: center;" colspan="4"><strong>Elective Courses</strong></td>
		</tr>
    <tr>
			<td>Math 213</td>
			<td>Theory of Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 214</td>
			<td>Dynamical Systems</td>
			<td style="text-align: center;">3</td>
			<td>Math 213</td>
		</tr>
    <tr>
			<td>Math 215</td>
			<td>Introduction to Mathematical Modeling</td>
			<td style="text-align: center;">3</td>
			<td>Math 213</td>
		</tr>
    <tr>
			<td>Math 216</td>
			<td>Applied Partial Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td>Math 213</td>
		</tr>
    <tr>
			<td>Math 217</td>
			<td>Integral Equations</td>
			<td style="text-align: center;">3</td>
			<td>COI</td>
		</tr>
    <tr>
			<td>Math 218</td>
			<td>Introduction to Applied Mathematics</td>
			<td style="text-align: center;">3</td>
			<td>COI</td>
		</tr>
    <tr>
			<td>Math 219</td>
			<td>Delay Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 224</td>
			<td>Matrix Analysis</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 225</td>
			<td>Number Theory with Applications</td>
			<td style="text-align: center;">3</td>
			<td>COI</td>
		</tr>
    <tr>
			<td>Math 235</td>
			<td>Applied Complex Variable Theory</td>
			<td style="text-align: center;">3</td>
			<td>Math 234</td>
		</tr>
    <tr>
			<td>Math 236</td>
			<td>Numerical Analysis</td>
			<td style="text-align: center;">3</td>
			<td>COI</td>
		</tr>
    <tr>
			<td>Math 238</td>
			<td>Semigroup Theory and Applications</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 239</td>
			<td>Numerical Partial Differential Equations</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 241</td>
			<td>Algebraic Topology</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 245</td>
			<td>Computational Topology with Applications</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 250</td>
			<td>Modern Geometry</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 251</td>
			<td>Differential Geometry</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 255</td>
			<td>Applied Combinatorics</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 256</td>
			<td>Graph Theory</td>
			<td style="text-align: center;">3</td>
			<td>Math 255</td>
		</tr>
    <tr>
			<td>Math 255</td>
			<td>Applied Combinatorics</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 256</td>
			<td>Graph Theory</td>
			<td style="text-align: center;">3</td>
			<td>Math 255</td>
		</tr>
    <tr>
			<td>Math 260</td>
			<td>Probability and Applications</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 280</td>
			<td>Linear and Nonlinear Optimization</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 296</td>
			<td>Selected Topics in Applied Analysis</td>
			<td style="text-align: center;">3</td>
			<td></td>
		</tr>
    <tr>
			<td>Math 298</td>
			<td>Special Topics</td>
			<td style="text-align: center;">3</td>
			<td>COI; May be taken twice; May take two different special topics max.</td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
    [
            'title' => 'Doctor of Philosophy in Mathematics',
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
      <li>9 units - MM 250, 290, 292, 293, 294, 295, 296, 298*, and 299</li>
    </ul>
  </li>
  <li>Comprehensive Examination</li>
</ul>
<p>*May be taken for credit twice; student may take a maximum of two different special topics.</p>
<p><a href="http://gpo.upb.edu.ph/graduate-programs/phd-mathematics">For more information, see the GPO website.</a></p>
',
			'created_at' => now(),
			'updated_at' => now()
        ]
		]);
    }
}
