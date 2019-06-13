<?php

use Illuminate\Database\Seeder;

class ChecklistSeeder extends Seeder
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
'<table class="table table-striped" id="1st-1st" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>First Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 11</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Math 53</td>
			<td style="width: 50%; height: 21px; text-align: center;">5</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Math 101</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">AH GE 1 (ARTS I)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">NSM GE 1 (SCIENCE 10)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">PE 1</td>
			<td style="width: 50%; height: 19px; text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="1st-2nd" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>First Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 12</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 55</td>
			<td style="width: 50%; height: 21px; text-align: center;">5</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;"CMSC 130</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Math 54</td>
			<td style="width: 50%; height: 21px; text-align: center;">5</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">SSP GE 1 (Ethics 1)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">PE 2</td>
			<td style="width: 50%; height: 19px; text-align: center;">(2)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>19</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="2nd-1st" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Second Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 110</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 131</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Math 55</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Physics 101</td>
			<td style="width: 50%; height: 21px; text-align: center;">4</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Physics 101.1</td>
			<td style="width: 50%; height: 21px; text-align: center;">1</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">AH GE 2 (COMM 10)</td>
			<td style="width: 50%; height: 19px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">PE 2</td>
			<td style="width: 50%; height: 19px; text-align: center;">(2)</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">NSTP 1</td>
			<td style="width: 50%; height: 19px; text-align: center;">(3)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="2nd-2nd" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Second Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 116</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 123</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Physics 102</td>
			<td style="width: 50%; height: 21px; text-align: center;">4</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Physics 102.1</td>
			<td style="width: 50%; height: 21px; text-align: center;">1</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">NSM GE 2 (SCIENCE 11)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">SSP GE 2 (KAS 1 or HIST 1)</td>
			<td style="width: 50%; height: 19px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">PE 2</td>
			<td style="width: 50%; height: 19px; text-align: center;">(2)</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">NSTP 2</td>
			<td style="width: 50%; height: 19px; text-align: center;">(3)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="3rd-1st" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Third Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 117</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 124</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 127</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC or Math Elective 1</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">AH GE 3 (Wika 1)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">NSM GE 2 (STS 1)</td>
			<td style="width: 50%; height: 19px; text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>18</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="3rd-2nd" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Third Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 125</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 128</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 141</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 199</td>
			<td style="width: 50%; height: 21px; text-align: center;">1</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC or Math Elective 2</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">Free Elective 1</td>
			<td style="width: 50%; height: 19px; text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>16</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="4th-1st" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Fourth Year, First Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 135</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 142</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 190</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">SSP GE 2 (SAS 1)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">Free Elective 2</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 19px;">PI 100</td>
			<td style="width: 50%; height: 19px; text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>18</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Computer Science',
			'body' => 
'<table class="table table-striped" id="4th-2nd" style="border-collapse: collapse; width: 100%; height: 202px;">
	<thead>
		<tr style="height: 21px;">
			<td style="width: 100%; height: 21px; text-align: center;" colspan="2"><strong>Fourth Year, Second Semester</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Subjects</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Units</strong></td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC 190</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">AH GE 4 (Elective)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">NSM GE 4 (Elective)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">SSP GE 4 (Elective)</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px;">CMSC or Math Elective 3</td>
			<td style="width: 50%; height: 21px; text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr style="height: 21px;">
			<td style="width: 50%; height: 21px; text-align: center;"><strong>Total Units</strong></td>
			<td style="width: 50%; height: 21px; text-align: center;"><strong>15</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
