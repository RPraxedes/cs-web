<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
			[
				'filename' => 'Action Photos/20190527_150244.jpg',
				'caption' => 'DMCS faculty and graduate students attended the 2019 Mathematical Society of the Philippines (MSP) National Convention held in Greenleaf Hotel, General Santos City, last 27-29 May 2019',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/A participant presenting their group report on Modeling and Optimization during the 25th SINSM.JPG',
				'caption' => 'A participant presenting their group report on Modeling and Optimization during the 25th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/A participant raising his question after Dr. Macansantos plenary talk during the 24th SINSM.JPG',
				'caption' => 'A participant raising his question after Dr. Macansantos plenary talk during the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Ashlyn Balangcod handling a lecture on JAVA programming during the 24th SINSM.JPG',
				'caption' => 'Ashlyn Balangcod handling a lecture on JAVA programming during the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Certificates awarded to college students and their professors during the 25th SINSM.JPG',
				'caption' => 'Certificates awarded to college students and their professors during the 25th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Alleli Ester Domingo together with Dr. Jerico Bacani and Professor Reymart Lagunero.JPG',
				'caption' => 'Dr. Alleli Ester Domingo together with Dr. Jerico Bacani and Professor Reymart Lagunero',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Alleli Ester Domingo together with the participants of the 25th SINSM at Abraham Sarmiento Hall.JPG',
				'caption' => 'Dr. Alleli Ester Domingo together with the participants of the 25th SINSM at Abraham Sarmiento Hall',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Edna Gueco in one of her lectures on Conic Sections during SINSM.JPG',
				'caption' => 'Dr. Edna Gueco in one of her lectures on Conic Sections during SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Edna Gueco presents the certificate of appreciation to Dr. Eduard Taganap after his talk.JPG',
				'caption' => 'Dr. Edna Gueco presents the certificate of appreciation to Dr. Eduard Taganap after his talk',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Eduard Taaganap delivering his talk on Tilings, Colorings, and Origami during the 2018 Breakthroughs in Mathematics at UP Baguio.JPG',
				'caption' => 'Dr. Eduard Taaganap delivering his talk on Tilings, Colorings, and Origami during the 2018 Breakthroughs in Mathematics at UP Baguio',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Eduard Taganap together with the BS and MS Math students of UP Baguio.JPG',
				'caption' => 'Dr. Eduard Taganap together with the BS and MS Math students of UP Baguio',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Gilbert Peralta discussing his lecture on Optimization during the 24th SINSM.JPG',
				'caption' => 'Dr. Gilbert Peralta discussing his lecture on Optimization during the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Jerico Bacani delivering his plenary talk before the participants of 24th SINSM at the Abraham Sarmiento Hall, UP Baguio.JPG',
				'caption' => 'Dr. Jerico Bacani delivering his plenary talk before the participants of 24th SINSM at the Abraham Sarmiento Hall, UP Baguio',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Jerico Bacani together with the invited speakers for the 2018 DMCS Breakthroughs in Mathematics, Dr. Eduard Taganap and Dr. Jerome Dimabayao..JPG',
				'caption' => 'Dr. Jerico Bacani together with the invited speakers for the 2018 DMCS Breakthroughs in Mathematics, Dr. Eduard Taganap and Dr. Jerome Dimabayao.',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Jerico Bacani.JPG',
				'caption' => 'Dr. Jerico Bacani',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Jerome Dimabayao delivering his research on rational points on elliptic curves.JPG',
				'caption' => 'Dr. Jerome Dimabayao delivering his research on rational points on elliptic curves',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Jerome Dimabayao poses with the attendees of the 2018 Breakthroughs in Mathematics.JPG',
				'caption' => 'Dr. Jerome Dimabayao poses with the attendees of the 2018 Breakthroughs in Mathematics',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Joel Addawe delivering his lecture on root finding using MatLab.JPG',
				'caption' => 'Dr. Joel Addawe delivering his lecture on root finding using MatLab',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Joel Addawe introducing Moodle-enabled Blended Learning before the participants of the 25th SINSM at Abraham Sarmiento Hall.JPG',
				'caption' => 'Dr. Joel Addawe introducing Moodle-enabled Blended Learning before the participants of the 25th SINSM at Abraham Sarmiento Hall',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Joel Addawe.JPG',
				'caption' => 'Dr. Joel Addawe',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Juancho Collera introducing MATLAB before the participants of SINSM.JPG',
				'caption' => 'Dr. Juancho Collera introducing MATLAB before the participants of SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Juancho Collera serves as a plenary speaker during the 23rd SINSM.JPG',
				'caption' => 'Dr. Juancho Collera serves as a plenary speaker during the 23rd SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Mohd Hafiz of Universiti Sains Malaysia delivers his talk on Dynamical Systems Analysis of Local and Nonlocal Dispersal Models before the Math graduate students of UP Baguio.JPG',
				'caption' => 'Dr. Mohd Hafiz of Universiti Sains Malaysia delivers his talk on Dynamical Systems Analysis of Local and Nonlocal Dispersal Models before the Math graduate students of UP Baguio',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Priscilla Macansantos delivering her lecture on Mathematical Modeling during the 23rd SINSM.JPG',
				'caption' => 'Dr. Priscilla Macansantos delivering her lecture on Mathematical Modeling during the 23rd SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Priscilla Macansantos gives the certificate of appreciation to Dr. Jerome Dimabayao after delivering his talk.JPG',
				'caption' => 'Dr. Priscilla Macansantos gives the certificate of appreciation to Dr. Jerome Dimabayao after delivering his talk',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Priscilla Macansantos together with the SINSM participants after delivering her plenary talk.JPG',
				'caption' => 'Dr. Priscilla Macansantos together with the SINSM participants after delivering her plenary talk',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Priscilla Macansantos with Dr. Jerico Bacani and Professor Joy Ascano after the plenary talk.JPG',
				'caption' => 'Dr. Priscilla Macansantos with Dr. Jerico Bacani and Professor Joy Ascano after the plenary talk',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Rizavel Addawe delivering her lecture during the 25th SINSM.JPG',
				'caption' => 'Dr. Rizavel Addawe delivering her lecture during the 25th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Teodora Balangcod serves as facilitator during the DMCS AUN-QA workshop.JPG',
				'caption' => 'Dr. Teodora Balangcod serves as facilitator during the DMCS AUN-QA workshop',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Willy Alangui discussing Number Theory before the participants of 24th SINSM.JPG',
				'caption' => 'Dr. Willy Alangui discussing Number Theory before the participants of 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Dr. Willy Alangui presenting his lecture on Topology during the 24th SINSM.JPG',
				'caption' => 'Dr. Willy Alangui presenting his lecture on Topology during the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0059.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0100.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0181.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0201.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0342.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0701.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0771.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0805.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/DSC_0847.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/IMG_8686.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/IMG_8989.JPG',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/IMG_9004.JPG',
				'caption' => NULL,
				'alt' => '...',
				'caption' => '',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Participants listening to the plenary talk delivered by Dr. Macansantos.JPG',
				'caption' => 'Participants listening to the plenary talk delivered by Dr. Macansantos',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Professor Andrei Domogo delivering his lecture before the  participants of the 24th SINSM.JPG',
				'caption' => 'Professor Andrei Domogo delivering his lecture before the  participants of the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Professor Lee Javellana in one of his lectures during the 24th SINSM.JPG',
				'caption' => 'Professor Lee Javellana in one of his lectures during the 24th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/Professor Reymart Lagunero discusses the house rules during the opening ceremony of the 25th SINSM.JPG',
				'caption' => 'Professor Reymart Lagunero discusses the house rules during the opening ceremony of the 25th SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/SINSM participants actively listen in one of the lectures during 23rd SINSM.JPG',
				'caption' => 'SINSM participants actively listen in one of the lectures during 23rd SINSM',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The 23rd SINSM participants and the DMCS faculty at the Kolehiyo ng Agham Quad.JPG',
				'caption' => 'The 23rd SINSM participants and the DMCS faculty at the Kolehiyo ng Agham Quad',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The Department of Mathematics and Computer Science during the AUN-QA workshop held at Palm Grove Hotsprings.JPG',
				'caption' => 'The Department of Mathematics and Computer Science during the AUN-QA workshop held at Palm Grove Hotsprings',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The Faculty of the Department of Math and Computer Science.JPG',
				'caption' => 'The Faculty of the Department of Math and Computer Science',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The Faculty of the Department of Mathematics and Computer Science  during the iAADs workshop at Green Valley Hotel.JPG',
				'caption' => 'The Faculty of the Department of Mathematics and Computer Science  during the iAADs workshop at Green Valley Hotel',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The faculty of the Department of Mathematics and Computer Science  together with the graduate students at Puerto de San Juan, La Union.JPG',
				'caption' => 'The faculty of the Department of Mathematics and Computer Science  together with the graduate students at Puerto de San Juan, La Union',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/The Faculty of the Department of Mathematics and Computer Science during the 24th SINSM at UP Baguio.JPG',
				'caption' => 'The Faculty of the Department of Mathematics and Computer Science during the 24th SINSM at UP Baguio',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/2.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'filename' => 'Action Photos/5.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/11.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/12.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10362369_10152533013901364_7344683990154675503_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10389080_10152533013541364_4691603507160246781_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10624877_10152320167736364_3867771932177615877_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10690027_10152320170821364_5168943347915744248_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10955719_10152533013776364_2346370540148219687_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10978533_10152533012921364_3520864645166382525_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/10980715_10152533013366364_6063925228434412196_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34473971_10155248993696364_117112178930089984_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34523374_10155248995931364_2312456215172481024_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34536769_10155248994226364_2926078317306052608_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34557770_10155248995511364_2023668820417183744_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34583767_10155248995766364_8907970241594654720_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34625155_10155248994466364_5142058460224946176_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'Action Photos/34637616_10155248994596364_4842868019023577088_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/1.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/3.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/4.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/6.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/7.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/8.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/9.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/1463114_10151690542781364_276389470_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/10934042_10152533011586364_863688904013521945_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/34523374_10155248995931364_2312456215172481024_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/34721549_10155251385426364_9218360613179228160_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
      [
				'filename' => 'SRC/34748251_10155251385991364_431113247916032000_n.jpg',
				'caption' => NULL,
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			/* [
				'filename' => '',
				'caption' => '',
				'alt' => '...',
				'created_at' => now(),
				'updated_at' => now(),
			],
			*/
		]);
    }
}
