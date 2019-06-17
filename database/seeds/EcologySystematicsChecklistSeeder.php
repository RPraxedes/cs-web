<?php

use Illuminate\Database\Seeder;

class EcologySystematicsChecklistSeeder extends Seeder
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
            'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
			'body' => 
'<strong>Total number of units: 151-155 units</strong>',
			'created_at' => now(),
			'updated_at' => now()
        ],
		[
            'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Biology 100</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Botany 109</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>NSM GE 1 (SCIENCE 10)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Math 100</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>AH GE 1 (ARTS I)</td>
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
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Zoology 102</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Botany 119</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Chemistry 26</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Chemistry 26.1</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>Biology 110</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>PE 2 (Swimming)</td>
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
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Chemistry 31</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Chemistry 31.1</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>Biology 101</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Biology 120</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Zoology 111</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Geology 11</td>
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
			<td style="text-align: center;"><strong>21</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Physics 100</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>Biology 160</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Zoology 132</td>
			<td style="text-align: center;">5</td>
		</tr>
		<tr>
			<td>SSP GE 1 (Ethics 1)</td>
			<td style="text-align: center;">3</td>
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
			<td>NSTP 2</td>
			<td style="text-align: center;">(3)</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>20</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>SSP GE 2 (KAS 1 or HIST 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 3 (Wika 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Chemistry 40</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Chemistry 40.1</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>Biology 195</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Biology 162</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Biology 198</td>
			<td style="text-align: center;">1</td>
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
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Biology 150</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Botany 164</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Biology 165</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>Biology 200.1</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>Biology or Ecology or Taxonomy Elective</td>
			<td style="text-align: center;">3-5</td>
		</tr>
		<tr>
			<td>NSM GE 2 (SCIENCE 11)</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>19-21</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Biology 140</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Zoology 120</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Botany 120</td>
			<td style="text-align: center;">4</td>
		</tr>
		<tr>
			<td>Biology 200.2</td>
			<td style="text-align: center;">2</td>
		</tr>
		<tr>
			<td>SSP GE 3 (SAS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 3 (STS 1)</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>20</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
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
			<td>Biology or Botany or Zoology Elective</td>
			<td style="text-align: center;">3-5</td>
		</tr>
		<tr>
			<td>PI 100</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>NSM GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>AH GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
		<tr>
			<td>SSP GE 4 (Elective)</td>
			<td style="text-align: center;">3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align: center;"><strong>Total Units</strong></td>
			<td style="text-align: center;"><strong>15-17</strong></td>
		</tr>
	</tfoot>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		[
			'title' => 'Bachelor of Science in Biology (Ecology and Systematics)',
			'body' => 
'<table class="table table-striped" id="list-course" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td style="text-align: center;" colspan="4"><strong>List of Courses in the BS Biology (Ecology and Systematics) Program</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align: center;"><strong>Course</strong></td>
			<td style="text-align: center;"><strong>Title</strong></td>
			<td style="text-align: center;"><strong>Units</strong></td>
			<td style="text-align: center;"><strong>Prerequisites</strong></td>
		</tr>
		<tr>
			<td>Biology 100</td>
			<td>Integrative Biology</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Biology 101</td>
			<td>Statistical Methods in Biology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Biology 102</td>
			<td>Phycology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Biology 103</td>
			<td>Mycology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Biology 110</td>
			<td>Systematics</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Biology 113</td>
			<td>Fundamentals of Virology</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120, Biology 150</td>
		</tr>
		<tr>
			<td>Biology 120</td>
			<td>Microbiology</td>
			<td style="text-align: center;">5</td>
			<td>Chemistry 26, Chemistry 26.1</td>
		</tr>
		<tr>
			<td>Biology 121</td>
			<td>Industrial Microbiology</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120</td>
		</tr>
		<tr>
			<td>Biology 123</td>
			<td>Fundamentals of Microbial Physiology</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120</td>
		</tr>
		<tr>
			<td>Biology 125</td>
			<td>Medical Microbiology</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120</td>
		</tr>
		<tr>
			<td>Biology 140</td>
			<td>Genetics</td>
			<td style="text-align: center;">4</td>
			<td>Botany 10; Zoology 10; Biology 101; Chemistry 40</td>
		</tr>
		<tr>
			<td>Biology 141</td>
			<td>Fundamentals of Microbial Genetics</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120</td>
		</tr>
		<tr>
			<td>Biology 150</td>
			<td>Introduction to Molecular and Cell Biology</td>
			<td style="text-align: center;">4</td>
			<td>Chemistry 40, Chemistry 40.1</td>
		</tr>
		<tr>
			<td>Biology 160</td>
			<td>Ecology</td>
			<td style="text-align: center;">4</td>
			<td>Zoology 111, Botany 109, Chemistry 26, Chemistry 26.1, Geology 11</td>
		</tr>
		<tr>
			<td>Biology 161</td>
			<td>Field Biology</td>
			<td style="text-align: center;">5</td>
			<td>Biology 160</td>
		</tr>
		<tr>
			<td>Biology 162</td>
			<td>Terrestrial Communities</td>
			<td style="text-align: center;">4</td>
			<td>Biology 160</td>
		</tr>
		<tr>
			<td>Biology 163</td>
			<td>Fundamentals of Microbial Ecology</td>
			<td style="text-align: center;">3</td>
			<td>Biology 120</td>
		</tr>
		<tr>
			<td>Biology 164</td>
			<td>Limnology</td>
			<td style="text-align: center;">4</td>
			<td>Biology 160</td>
		</tr>
		<tr>
			<td>Biology 165</td>
			<td>Biogeography</td>
			<td style="text-align: center;">3</td>
			<td>Junior Standing or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Biology 166</td>
			<td>Marine Ecology</td>
			<td style="text-align: center;">4</td>
			<td>Biology 160</td>
		</tr>
		<tr>
			<td>Biology 195</td>
			<td>Biological Evolution</td>
			<td style="text-align: center;">3</td>
			<td>Junior Standing</td>
		</tr>
		<tr>
			<td>Biology 198</td>
			<td>Seminar</td>
			<td style="text-align: center;">1</td>
			<td>Junior Standing or Consent of Instructor (COI)</td>
		</tr>
		<tr>
			<td>Biology 200.1</td>
			<td>Undergraduate Thesis Proposal Writing</td>
			<td style="text-align: center;">2</td>
			<td>Junior Standing</td>
		</tr>
		<tr>
			<td>Biology 200.2</td>
			<td>Undergraduate Thesis</td>
			<td style="text-align: center;">2</td>
			<td>Biology 200.1</td>
		</tr>
		<tr>
			<td>Botany 105</td>
			<td>Bryology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Botany 106</td>
			<td>Pteridology</td>
			<td style="text-align: center;">3</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Botany 109</td>
			<td>Systematics of Spermatophytes</td>
			<td style="text-align: center;">4</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Botany 119</td>
			<td>Plant Anatomy</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Botany 120</td>
			<td>Plant Physiology</td>
			<td style="text-align: center;">4</td>
			<td>Physics 100, Math 100, Chemistry 40, Chemistry 40.1, Botany 119</td>
		</tr>
		<tr>
			<td>Chemistry 26</td>
			<td>Elementary Analytical Chemistry</td>
			<td style="text-align: center;">3</td>
			<td>Corequisite: Chemistry 26.1</td>
		</tr>
		<tr>
			<td>Chemistry 26.1</td>
			<td>Elementary Analytical Chemistry Laboratory</td>
			<td style="text-align: center;">2</td>
			<td>Corequisite: Chemistry 26</td>
		</tr>
		<tr>
			<td>Chemistry 31</td>
			<td>Elementary Organic Chemistry</td>
			<td style="text-align: center;">3</td>
			<td>Corequisite: Chemistry 31.1</td>
		</tr>
		<tr>
			<td>Chemistry 31.1</td>
			<td>Elementary Organic Chemistry Laboratory</td>
			<td style="text-align: center;">2</td>
			<td>Corequisite: Chemistry 31</td>
		</tr>
		<tr>
			<td>Chemistry 40</td>
			<td>Elementary Biochemistry</td>
			<td style="text-align: center;">3</td>
			<td>Corequisite: Chemistry 40.1</td>
		</tr>
		<tr>
			<td>Chemistry 40.1</td>
			<td>Elementary Biochemistry Laboratory</td>
			<td style="text-align: center;">2</td>
			<td>Corequisite: Chemistry 40</td>
		</tr>
		<tr>
			<td>Math 100</td>
			<td>Introduction to Calculus</td>
			<td style="text-align: center;">4</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Physics 100</td>
			<td>Applied Biological Physics</td>
			<td style="text-align: center;">5</td>
			<td>Math 100</td>
		</tr>
		<tr>
			<td>Zoology 102</td>
			<td>Comparative Anatomy of Vertebrates</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Zoology 106</td>
			<td>General Histology</td>
			<td style="text-align: center;">4</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Zoology 111</td>
			<td>Invertebrate Zoology</td>
			<td style="text-align: center;">5</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Zoology 113</td>
			<td>Parasitology</td>
			<td style="text-align: center;">4</td>
			<td>None</td>
		</tr>
		<tr>
			<td>Zoology 120</td>
			<td>Animal Physiology</td>
			<td style="text-align: center;">4</td>
			<td>Physics 100, Math 100, Chemistry 40, Chemistry 40.1, Zoology 102</td>
		</tr>
		<tr>
			<td>Zoology 132</td>
			<td>Vertebrate Embryology</td>
			<td style="text-align: center;">5</td>
			<td>Zoology 102</td>
		</tr>
	</tbody>
</table>',
			'created_at' => now(),
			'updated_at' => now()
		],
		]);
    }
}
