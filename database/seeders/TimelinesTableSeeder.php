<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TimelinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => '¿Qué hace un cirujano bucomaxilofacial?',
                'user_id' => 1,
                'category_id' => 1,
                'description' => '<p>De acuerdo con la <a href="http://alacibu.org/">Asociación Latinoamericana de Cirugía Bucomaxilofacial, Alacibu, </a>la Cirugía Bucomaxilofacial “es aquella especialidad de la odontología que se ocupa de la prevención, diagnóstico y tratamiento de las enfermedades, traumatismos y defectos funcionales o estéticos, congénitos o adquiridos, de los tejidos duros y blandos de la región bucal y maxilofacial, así como de los tejidos y órganos relacionados que la limitan e integran.”</p><p>&nbsp;</p><p>En Venezuela solamente puede utilizar el título de “Cirujano Bucal” o “Cirujano Bucomaxilofacial” aquel Odontólogo que ha culminado a cabalidad un curso de postgrado en Cirugía Bucal de no menos de dos años de duración, o de Cirugía Bucomaxilofacial de no menos de tres años de duración, en una institución universitaria u hospitalaria reconocida por el Ministerio del Poder Popular para la Salud y el Ministerio del Poder Popular para la Educación y validada dicha especialidad por el <a href="http://www.elcov.org/">Colegio de Odontólogos de Venezuela.</a></p><p>&nbsp;</p><p>&nbsp;</p><p>Los campos de actuación, del cual se desprenden áreas de formación académica e investigación científica, incluyen entre otros: anomalías y patologías de las estructuras buco-maxilofaciales, cirugía de labio y paladar hendido; implantes endoóseos, transplantes y reimplantes en la región buco-maxilofacial, injertos y cirugía reconstructiva de los tejidos duros y blandos en la región bucomaxilofacial, distracción osteogénica; cirugía dentoalveolar; tratamiento de trauma de los tejidos duros y blandos de la región maxilofacial; cirugía ortognática, preprotésica y ortopédica facial, cirugía con finalidades ortodónticas y anomalías dentofaciales, biopsias de la región bucomaxilofacial, tratamiento conservador y quirúrgico de los trastornos de la articulación temporomandibular, diagnóstico y tratamiento quirúrgico y no quirúrgico de los quistes, tumores y enfermedades de la región bucomaxilofacial, tratamiento de las malformaciones congénitas, adquiridas y del desarrollo de los tejidos blandos y duros de la región bucomaxilofacial, tratamiento del dolor en región bucomaxilofacial</p><p>&nbsp;</p><p>&nbsp;</p><p>El rol del cirujano bucomaxilofacial es determinante, por lo tanto su presencia en las áreas de emergencia en clínicas y hospitales es vital, especialmente si hay sospecha de traumatismo que involucre el área maxilofacial</p><p>&nbsp;</p><p>&nbsp;</p><p>Si usted requiere mayor información acerca de esta especialidad, los profesionales miembros de la <a href="http://www.svcbmf.net/">Sociedad Venezolana de Cirugía Bucomaxilofacial</a>, cursos de postgrado o cualquier duda relacionada, comuníquese con nosotros aquí y con gusto le responderemos.</p>',
                'image' => '966331.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'youtube' => '',
                'facebook' => '',
                'created_at' => Carbon::parse('2018-10-27 08:12:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Titulo Video Facebook',
                'user_id' => 1,
                'category_id' => 1,
                'description' => '<p>este es un video que se carga desde la bd </p>',
                'image' => '266488.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'youtube' => '',
                'facebook' => 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fvideos%2F10153231379946729%2F&width=500&show_text=false&appId=1220443371425206&height=280',
                'created_at' => Carbon::parse('2018-10-27 10:12:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Titulo Video Youtube',
                'user_id' => 1,
                'category_id' => 2,
                'description' => '<p>Este es un video de youtube que se carga desde la bd
</p>',
                'image' => '173931.jpg',
                'is_featured' => 0,
                'is_active' => 1,
                'youtube' => 'j1TXbN_nAVY',
                'facebook' => '',
                'created_at' => Carbon::parse('2018-10-27 11:12:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Plataforma Virtual Educativa de la Sociedad Venezolana de Cirugía Buco-Maxilofacial',
                'user_id' => 1,
                'category_id' => 2,
                'description' => '<p>Con una Visión Innovadora en pro de la Educación.</p><p>Rompiendo Fronteras!</p><p>&nbsp;</p><p>En poco tiempo nuestros miembros, residentes y colegas del área de la salud contarán con un recurso innovador que se encuentra en la fase final de implantación y que conjugara herramientas, recursos educativos, de intercambio clínico y académico, &nbsp;para el fortalecimientos de nuestras especialidades.</p><p>&nbsp;</p><p>Nuestra Sociedad sigue avanzando con visión innovadora, con el fortalecimiento de los valores institucionales, bajo pilares de educación, profesionalismo y ética que consolidan el trabajo de más de 60 años en pro de nuestra Venezuela.</p>',
                'image' => '772049.jpg',
                'is_featured' => 0,
                'is_active' => 1,
                'youtube' => '',
                'facebook' => '',
                'created_at' => Carbon::parse('2018-10-27 13:12:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        DB::table('timelines')->insert($data);
    }
}
