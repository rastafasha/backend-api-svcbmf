<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => '¿Qué hace un cirujano bucomaxilofacial?',
                'slug' => 'que-hace-un-cirujano-bucomaxilofacial',
                'user_id' => 1,
                'category_id' => 1,
                'favorite_id' => null,
                'description' => '<p>De acuerdo con la <a href="http://alacibu.org/">Asociaci&oacute;n Latinoamericana de Cirug&iacute;a Bucomaxilofacial, Alacibu, </a>la Cirug&iacute;a Bucomaxilofacial &ldquo;es aquella especialidad de la odontolog&iacute;a que se ocupa de la prevenci&oacute;n, diagn&oacute;stico y tratamiento de las enfermedades, traumatismos y defectos funcionales o est&eacute;ticos, cong&eacute;nitos o adquiridos, de los tejidos duros y blandos de la regi&oacute;n bucal y maxilofacial, as&iacute; como de los tejidos y &oacute;rganos relacionados que la limitan e integran.&rdquo;</p>
<p>&nbsp;</p>
<p>En Venezuela solamente puede utilizar el t&iacute;tulo de &ldquo;Cirujano Bucal&rdquo; o &ldquo;Cirujano Bucomaxilofacial&rdquo; aquel Odont&oacute;logo que ha culminado a cabalidad un curso de postgrado en Cirug&iacute;a Bucal de no menos de dos a&ntilde;os de duraci&oacute;n, o de Cirug&iacute;a Bucomaxilofacial de no menos de tres a&ntilde;os de duraci&oacute;n, en una instituci&oacute;n universitaria u hospitalaria reconocida por el Ministerio del Poder Popular para la Salud y el Ministerio del Poder Popular para la Educaci&oacute;n y validada dicha especialidad por el <a href="http://www.elcov.org/">Colegio de Odont&oacute;logos de Venezuela.</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Los campos de actuaci&oacute;n, del cual se desprenden &aacute;reas de formaci&oacute;n acad&eacute;mica e investigaci&oacute;n cient&iacute;fica, incluyen entre otros: anomal&iacute;as y patolog&iacute;as de las estructuras buco-maxilofaciales, cirug&iacute;a de labio y paladar hendido; implantes endo&oacute;seos, transplantes y reimplantes en la regi&oacute;n buco-maxilofacial, injertos y cirug&iacute;a reconstructiva de los tejidos duros y blandos en la regi&oacute;n bucomaxilofacial, distracci&oacute;n osteog&eacute;nica; cirug&iacute;a dentoalveolar; tratamiento de trauma de los tejidos duros y blandos de la regi&oacute;n maxilofacial; cirug&iacute;a ortogn&aacute;tica, preprot&eacute;sica y ortop&eacute;dica facial, cirug&iacute;a con finalidades ortod&oacute;nticas y anomal&iacute;as dentofaciales, biopsias de la regi&oacute;n bucomaxilofacial, tratamiento conservador y quir&uacute;rgico de los trastornos de la articulaci&oacute;n temporomandibular, diagn&oacute;stico y tratamiento quir&uacute;rgico y no quir&uacute;rgico de los quistes, tumores y enfermedades de la regi&oacute;n bucomaxilofacial, tratamiento de las malformaciones cong&eacute;nitas, adquiridas y del desarrollo de los tejidos blandos y duros de la regi&oacute;n bucomaxilofacial, tratamiento del dolor en regi&oacute;n bucomaxilofacial</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>El rol del cirujano bucomaxilofacial es determinante, por lo tanto su presencia en las &aacute;reas de emergencia en cl&iacute;nicas y hospitales es vital, especialmente si hay sospecha de traumatismo que involucre el &aacute;rea maxilofacial</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Si usted requiere mayor informaci&oacute;n acerca de esta especialidad, los profesionales miembros de la <a href="http://www.svcbmf.net/">Sociedad Venezolana de Cirug&iacute;a Bucomaxilofacial</a>, cursos de postgrado o cualquier duda relacionada, comun&iacute;quese con nosotros aqu&iacute; y con gusto le responderemos.</p>',
                'avatar' => 'blogs/y0mG1klmJpf45Ane95KdOOL2GQysSydSO3CY4OEC.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => '2018-10-27 08:12:09',
                'updated_at' => '2024-04-20 19:18:41',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Libro Dr. César Guerrero Barros',
                'slug' => 'libro-dr-cesar-guerrero-barros',
                'user_id' => 1,
                'category_id' => 1,
                'favorite_id' => null,
                'description' => '<p>Es un orgullo Venezolano exponer los conocimientos cient&iacute;ficos que durante a&ntilde;os han sido desarrollados por el Dr C&eacute;sar Guerrero y su equipo (Dres. Gisela y Rafael Contasti, Elena Mujica, Mariana Henriquez, Enif Dominguez, Marianela Gonzalez, Wendy Camacho, Helen Rivera y Aura Marina Rodriguez) en la correcci&oacute;n de Deformidades Craneofaciales y Reconstrucci&oacute;n Facial en publicaciones de prestigio Internacional, entre ellos:<br />
&nbsp;</p>
<p><strong>Atlas of Oral and Maxillofacial Surgery.</strong> Kademani / Tiwana. Elsevier 2016, Mandibular and Maxillary Intraoral Distraction Osteogenesis.</p>
<p><strong>Orthognathic Surgery:</strong> Principles, Planning and Practice .Naini/Gil Wiley-Blackwell 2017 Mandibular and Maxillary Distraction Osteogenesis.</p>
<p><strong>Craniofacial Distraction J McCarthy.</strong> 2nd Edition. Springer 2017. Intraoral mandibular distraction.</p>
<p><strong>Oral and Maxillofacial Surgery .Fonseca. </strong>3rd Edition. Elsevier 2017. Intraoral distraction osteogenesis.</p>
<p><strong>Principles of Oral and Maxillofacial Surgery.</strong> Miloro-Ghali-Larsen-Waite. Elsevier 2018.</p>
<p>Publicaciones que han contribuido a la formaci&oacute;n de profesionales en nuestro pa&iacute;s y fuera de sus fronteras, siendo referencia en los siete continentes.</p>
<p>&nbsp;</p>
<p>El Dr. C&eacute;sar A. Guerrero es Odont&oacute;logo graduado de la Universidad Central de Venezuela, continu&oacute; su educaci&oacute;n en el Hospital de la Cruz Roja de Venezuela por 3 a&ntilde;os en el &aacute;rea de Cirug&iacute;a Maxilofacial del postgrado de Cirug&iacute;a Pl&aacute;stica y Reconstructiva. Hizo su residencia completa en Cirug&iacute;a Bucal y Maxilofacial en la Escuela de Medicina de la Universidad del Suroeste, en el Hospital de Parkland Memorial y hospitales asociados de Dallas y Fort Worth, Texas. Fue Director del Centro de Cirug&iacute;a Maxilofacial Santa Rosa y Profesor colaborador de las C&aacute;tedras de Cirug&iacute;a y Ortodoncia de la UCV. Continu&oacute; como profesor de la Universidad de Texas en la Escuela de Medicina de Galveston, como Profesor en Cirug&iacute;a Bucal y Maxilofacial; actualmente est&aacute; dedicado a la pr&aacute;ctica privada de la especialidad en el Sur de Houston, Texas. Recibi&oacute; el premio "como cirujano del a&ntilde;o" del Colegio Americano de Cirug&iacute;a Bucal y Maxilofacial, con el premio Harry Archer en el 2016, di&oacute; la conferencia presidencial Kurt H Thoma, recibi&oacute; el segundo premio en Innovaciones en Cirug&iacute;a Bucal y Maxilofacial en el congreso mundial de la Asociaci&oacute;n Internacional en Hong Kong, China, en el 2017.</p>',
                'avatar' => 'blogs/itDnTcllQvLEETWKhXqS7eS7IVhSaZeLFJIHDlbi.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => '2018-10-27 10:12:09',
                'updated_at' => '2024-04-20 19:20:00',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Venezuela tiene un nuevo Delegado AOCMF para el periodo 2018-2021',
                'slug' => 'venezuela-tiene-un-nuevo-delegado-aocmf-para-el-periodo-2018-2021',
                'user_id' => 1,
                'category_id' => 2,
                'favorite_id' => null,
                'description' => '<p>En el mes de Julio, se abri&oacute; la postulaci&oacute;n para la elecci&oacute;n del nuevo delegado (chair) de la AOCMF para Venezuela, siendo electo posterior al an&aacute;lisis curricular, experiencia docente y finalmente sometido al proceso de votaci&oacute;n entre los miembros del pa&iacute;s y latinoam&eacute;rica el Dr. Paul Maurette, Actual presidente de nuestra Sociedad.</p>
<p>&nbsp;</p>
<p>La AOCMF (la división clínica craneo maxilofacial de AO Foundation) &nbsp;con m&aacute;s de 60 a&ntilde;os de actividades educativas, est&aacute; conformada por un grupo multidisciplinario de participantes y profesores de diversas especialidades como lo son la Cirug&iacute;a Buco-Maxilofacial. Otorrinolaringologia, Cirug&iacute;a de cabeza y cuello, Cirug&iacute;a Pl&aacute;stica y Reconstructiva. &nbsp;Cada año, AOCMF ofrece alrededor de 110 actividades educativas celebradas en todo el mundo a más de 5.000 apasionados cirujanos.</p>
<p>&nbsp;</p>
<p>La misión de AOCMF es la excelencia en el tratamiento de la cirugía facial en sus diversas especialidades. Por ello, desde AOCMF animamos a todos aquellos profesionales interesados en el campo de la cirug&iacute;a craneo-maxilofacial, cirugía plástica, ENT, cirug&iacute;a oculoplástica y neurocirugía a que participen y hagan suya esta organización. Para conseguirlo, nos comprometemos a permanecer en la vanguardia de la educaci&oacute;n y de los nuevos avances, ofreciendo aprendizaje y experiencias destacables en la red enfocadas en el tratamiento de trauma y reconstrucción craneo-maxilofacial.</p>
<p>&nbsp;</p>
<p>Es un orgullo para nuestro gremio que &eacute;l haya sido electo nuevamente un delegado para Venezuela de nuestra especialidad, Esto refuerza el compromiso y la excelencia desarrollada durante la gesti&oacute;n del Dr. Jos&eacute; Gregorio Melillo quien despu&eacute;s de 6 a&ntilde;os dejo esta gran responsabilidad, la cual llev&oacute; de manera impecable y logr&oacute; grandes avances y el posicionamiento de nuestro pa&iacute;s a nivel regional e internacional a pesar de la crisis que atravesamos actualmente. &nbsp; &Eacute;xitos al Dr. Maurette en esta nueva responsabilidad el pro de Venezuela.</p>',
                'avatar' => 'blogs/7HArU6Uj1i6BVy4iO5h1OaMlZr1ssBDGqI4dhuqv.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => '2018-10-27 11:12:09',
                'updated_at' => '2024-04-21 00:53:11',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Plataforma Virtual Educativa de la Sociedad Venezolana de Cirugía Buco-Maxilofacial',
                'slug' => 'plataforma-virtual-educativa-de-la-sociedad-venezolana-de-cirugia-buco-maxilofacial',
                'user_id' => 1,
                'category_id' => 2,
                'favorite_id' => null,
                'description' => '<p>Con una Visi&oacute;n Innovadora en pro de la Educaci&oacute;n.</p>
<p>Rompiendo Fronteras!</p>
<p>&nbsp;</p>
<p>En poco tiempo nuestros miembros, residentes y colegas del &aacute;rea de la salud contar&aacute;n con un recurso innovador que se encuentra en la fase final de implantaci&oacute;n y que conjugara herramientas, recursos educativos, de intercambio cl&iacute;nico y acad&eacute;mico, &nbsp;para el fortalecimientos de nuestras especialidades.</p>
<p>&nbsp;</p>
<p>Nuestra Sociedad sigue avanzando con visi&oacute;n innovadora, con el fortalecimiento de los valores institucionales, bajo pilares de educaci&oacute;n, profesionalismo y &eacute;tica que consolidan el trabajo de m&aacute;s de 60 a&ntilde;os en pro de nuestra Venezuela.</p>',
                'avatar' => 'blogs/lGddqiH0XyQJhlrbm0DN4sDNAR0fcVodCss7DNiS.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => '2018-10-27 13:12:09',
                'updated_at' => '2024-04-21 00:53:19',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'Educación continúa 2021',
                'slug' => 'educacion-continua-2021',
                'user_id' => 1,
                'category_id' => 0,
                'favorite_id' => null,
                'description' => '<p><img alt="" src="https://tipscirubucal.com/wp-content/uploads/2021/04/jorn2.jpg" style="height:242px; width:500px" /></p>
<p>Reg&iacute;strate en el siguiente link:</p>
<p><a href="https://www.eventbrite.com/e/jornadas-de-educacion-continua-2021-tickets-150555544687" target="_blank">https://www.eventbrite.com/e/jornadas-de-educacion-continua-2021-tickets-150555544687</a></p>
<hr />
<p>Fecha: 14 de abril<br />
Hora: 8:00pm (Hora de Venezuela)</p>
<p><br />
Con&eacute;ctate en Zoom:<br />
<a href="https://us02web.zoom.us/j/87672680634?pwd=bXJGQ1BIWUJ1Z3dHaHMvMElhMVVIdz09" target="_blank">https://us02web.zoom.us/j/87672680634?pwd=bXJGQ1BIWUJ1Z3dHaHMvMElhMVVIdz09</a></p>
<p><br />
ID de la reuni&oacute;n: 876 7268 0634<br />
C&oacute;digo de acceso: 524298</p>
<hr />
<p><strong>Rinoplastia como procedimiento complementario en la cirug&iacute;a Ortognatica</strong></p>
<p>Dr. Paolo Verona</p>
<p><img alt="" src="https://tipscirubucal.com/wp-content/uploads/2021/04/91003820-D2F8-4161-B5E3-27535EF0E69D-1.jpeg" style="height:248px; width:250px" /></p>
<p>Cirujano Maxilofacial de la universidad militar nueva granada / Hospital militar Central de Bogot&aacute; ,entrenamiento en Cirugia artroscopia de ATM hospital Clinico San Carlos Madrid , fellow en Cirugia estetica facial y rinoplastia Leon, Mexico y Roma Italia , Diplomado en Cirug&iacute;a estetica facial , certificaci&oacute;n board en Cirug&iacute;a oral y maxilofacial por alacibu board en Cirugia estetica facial academia internacional de Cirugia estetica , coordinador de la seccional de cirug&iacute;a est&eacute;tica maxilofacial de alacibu , miembro de la junta directiva de la SVCBMF.</p>
<hr />
<p><strong>Osteotom&iacute;as Faciales Complementarias a la Cirug&iacute;a Ortogn&aacute;tica</strong></p>
<p>Dr. Sergio Olate</p>
<p><img alt="" src="https://tipscirubucal.com/wp-content/uploads/2021/04/Olate12-1.jpeg" style="height:375px; width:250px" /></p>
<p>Sergio Olate, CD, COMF, MSc, PhD Fellow del European Face Centre Profesor Asociado, Divisi&oacute;n de Cirug&iacute;a Oral, Facial y Maxilofacial, Universidad de La Frontera Sub Director, Centro de Excelencia en Estudios Morfol&oacute;gicos y Quir&uacute;rgicos, Universidad de La Frontera CHILE.</p>
<h3>Moderadores:</h3>
<h3>Dr. Jos&eacute; Luis Castro</h3>
<h3>Dr. Fidel Guzm&aacute;n</h3>
<hr />
<p>Fecha: 14 de abril</p>
<p>Hora: 8:00pm (Hora de Venezuela)</p>
<p>Con&eacute;ctate en Zoom:&nbsp;<a href="https://us02web.zoom.us/j/87672680634?pwd=bXJGQ1BIWUJ1Z3dHaHMvMElhMVVIdz09">https://us02web.zoom.us/j/87672680634?pwd=bXJGQ1BIWUJ1Z3dHaHMvMElhMVVIdz09</a></p>
<p>ID de la reuni&oacute;n: 876 7268 0634</p>
<p>C&oacute;digo de acceso: 524298</p>',
                'avatar' => 'jorn11.jpg',
                'is_featured' => 1,
                'is_active' => 0,
                'created_at' => '2021-04-10 20:46:24',
                'updated_at' => '2024-04-20 19:21:17',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'title' => 'prueba',
                'slug' => 'prueba',
                'user_id' => 1,
                'category_id' => 0,
                'favorite_id' => null,
                'description' => '<h2><img alt="" src="https://mmedia.eluniversal.com/18726/proceso-de-vacunacion-para-personas-de-tercera-edad-71928.jpg" style="height:406px; width:720px" /></h2>
<h2><strong>Mant&eacute;ngase &aacute;gil y eficiente en tiempos de transformaci&oacute;n digital</strong></h2>
<p>Realizamos asociaciones estrat&eacute;t&eacute;gicas con proveedores de tecnolog&iacute;a, con soluciones y servicios de clase mundial.</p>
<p>Con nuestras soluciones apoyamos el desarrollo de las capacidades tecnol&oacute;gicas que le permitir&aacute; dar una respuesta r&aacute;pida a las demandas de sus clientes, actualizar eficazmente sus sistemas, desarrollar nuevas aplicaciones con lanzamiento acelerado al mercado y generar mas presupuesto para la innovaci&oacute;n.</p>
<p>Somos especialistas en automatizaci&oacute;n de procesos para clientes con soluciones de tipo ERP de proveedores de tecnolog&iacute;a como SAP, Oracle, Microsoft, etc.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'avatar' => 'osteo.jpg',
                'is_featured' => 0,
                'is_active' => 0,
                'created_at' => '2021-04-11 01:49:07',
                'updated_at' => '2025-05-24 06:36:31',
                'deleted_at' => '2025-05-24 06:36:31',
            ],
            [
                'id' => 7,
                'title' => 'Educación Continua 2021 - Videos',
                'slug' => 'educacion-continua-2021-videos',
                'user_id' => 1,
                'category_id' => 0,
                'favorite_id' => null,
                'description' => '<p>Procedimientos est&eacute;ticos asociados a Cirug&iacute;a Ortogn&aacute;tica:</p>
<p><a href="https://youtu.be/2IHBwBptYrQ">https://youtu.be/2IHBwBptYrQ</a></p>',
                'avatar' => 'Screen_Shot_2021-07-30_at_2_13_12_AM.png',
                'is_featured' => 0,
                'is_active' => 0,
                'created_at' => '2021-04-17 20:49:15',
                'updated_at' => '2025-05-24 06:37:22',
                'deleted_at' => null,
            ],
        ]);
    }
}
