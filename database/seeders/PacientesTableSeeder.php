<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PacientesTableSeeder extends Seeder
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
                'title' => 'Cirugía de Cordales (Terceros molares o muelas del juicio)',
                'slug' => 'cirugia-de-cordales-terceros-molares-o-muelas-del-juicio',
                'user_id' => 1,
                'category_id' => 1,
                'description' => '<p><em>Quiz&aacute;s una de las intervenciones m&aacute;s comunes y, por qu&eacute; no, rutinarias realizadas de manera ambulatoria de la Cirug&iacute;a Bucal y Maxilofacial, es la extracci&oacute;n quir&uacute;rgica de las cordales o terceros molares...</em></p>

<p>&nbsp;</p>

<p>Los terceros molares erupcionan a trav&eacute;s de las enc&iacute;as normalmente entre los 17 y 21 a&ntilde;os de edad. Sin embargo en una gran cantidad de casos puede ocurrir un retraso en su erupci&oacute;n generalmente ocasionado porque no hay suficiente espacio en los maxilares para dichos molares.</p>

<p>Esta falta de espacio suele ocasionar que los terceros molares &ndash;&ndash;coloquialmente conocidos como &ldquo;muelas del juicio&rdquo;&ndash;&ndash; no erupci&oacute;n en del todo y permanezcan impactados en la enc&iacute;a o el hueso, lo cual puede causar complicaciones como dolor e inflamaci&oacute;n; el api&ntilde;amiento y/o mala oclusi&oacute;n dentaria debido a que &eacute;stos ejercen presi&oacute;n sobre los dem&aacute;s dientes en su intento por erupcionar; aparici&oacute;n de quistes abscesos o procesos infecciosos, y en algunos casos desviaci&oacute;n en la mordida.</p>

<p>La Pericoronitis es una infecci&oacute;n relacionada con los terceros molares, causada por restos de comida y placa bacteriana en la regi&oacute;n de la cordal y la mucosa, la cual puede extenderse a otros espacios bucales. Puede tener como manifestaciones cl&iacute;nicas la presencia de enrojecimiento, inflamaci&oacute;n, dolor, mal aliento, sensibilidad en las enc&iacute;as, sabor desagradable, dificultad para abrir la boca, fiebre, dolor de cabeza e incluso de o&iacute;dos, entre otros.</p>

<p>Debido a estas afecciones se suele indicar la extracci&oacute;n de las cordales, la cual se realiza mediante un procedimiento quir&uacute;rgico bastante sencillo, sin dolor ni ansiedad, y que generalmente demora menos de una hora.</p>

<p>Antes de pautar la cirug&iacute;a, es importante que el paciente sea objeto de una correcta evaluaci&oacute;n cl&iacute;nica y radiogr&aacute;fica por parte del cirujano tratante durante la primera consulta para poder determinar el plan de tratamiento adecuado para usted.</p>

<p>Dicha cirug&iacute;a es realizada sobre anestesia local, gracias a la cual el paciente no siente molestia alguna durante la remoci&oacute;n. En caso de que por alguna raz&oacute;n particular se requiera, tambi&eacute;n existe la posibilidad de realizar el procedimiento bajo &ldquo;Sedaci&oacute;n Endovenosa&rdquo;, la cual se efect&uacute;a en conjunto con un m&eacute;dico anestesi&oacute;logo y bajo monitorizaci&oacute;n, para el bloqueo total de la ansiedad y miedo durante la cirug&iacute;a, con el beneficio adicional que brinda al paciente excesivamente ansioso una sensaci&oacute;n de bienestar y, adem&aacute;s, no recordar&aacute; la intervenci&oacute;n realizada.</p>

<p>El proceso de recuperaci&oacute;n luego de la extracci&oacute;n de las cordales es breve y con m&iacute;nimas molestias. Es normal una leve inflamaci&oacute;n que ceder&aacute; en poco tiempo. El paciente recibir&aacute; indicaciones para ayudarlo a que este per&iacute;odo de recuperaci&oacute;n sea lo m&aacute;s expedito y confortable posible as&iacute; como el esquema de medicamentos necesario para su caso.</p>',
                'avatar' => 'areapacientes/hCJPgngjrN725nruPPoMw8DfDcQIVPZxyRjpU3qU.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => Carbon::parse('2018-10-27 08:12:09'),
                'updated_at' => Carbon::parse('2024-04-20 23:44:25'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Implantes Dentales Oseointegrados',
                'slug' => 'implantes-dentales-oseointegrados',
                'user_id' => 1,
                'category_id' => 1,
                'description' => '<p><em>La opci&oacute;n que hoy en d&iacute;a es el protocolo de elecci&oacute;n para la rehabilitaci&oacute;n en caso de p&eacute;rdida de piezas dentales son los implantes. &Eacute;stos son un recurso altamente recomendable para la restituci&oacute;n...</em></p>

<p>&nbsp;</p>

<p>Un procedimiento cada vez m&aacute;s difundido para la rehabilitaci&oacute;n en caso de p&eacute;rdida de piezas dentales son los implantes. &Eacute;stos son un recurso altamente recomendable para la restituci&oacute;n de dientes que por cualquier causa &ndash;&ndash;traumatismos, patolog&iacute;as&ndash;&ndash; han sido extra&iacute;dos.</p>

<p>Los implantes dentales son unos dispositivos &ndash;&ndash;similares a unos tornillos&ndash;&ndash;&nbsp; realizados 99% de titanio, los cuales se insertan en el hueso maxilar con el fin de sustituir a las ra&iacute;ces de las piezas dentarias perdidas. Esto luego permite reemplazar la pieza natural por una pieza artificial (corona) de mejor funcionalidad e igual o mejor est&eacute;tica que la natural, y que evita la perdida fisiol&oacute;gica de tejido &oacute;seo que ocurre con la perdida dentaria.</p>

<p>El implante se fusiona con el hueso (fase de oseointegraci&oacute;n), proporcionando un soporte estable para los dientes artificiales. Las pr&oacute;tesis y los puentes colocados sobre los implantes no se deslizan ni se salen accidentalmente de la boca, lo cual es una ventaja especialmente importante para la masticaci&oacute;n y el habla. Esta adaptaci&oacute;n ayuda a que las pr&oacute;tesis y los puentes (al igual que las coronas individuales colocadas sobre los implantes) se sientan m&aacute;s naturales que los convencionales.</p>

<p>Los implantes proporcionan varias ventajas a los pacientes:</p>

<p>&nbsp;</p>

<p>Se reduce el movimiento de las dentaduras, brindando un perfecto soporte y estabilidad a las pr&oacute;tesis.</p>

<p>Son permanentes y de por vida.</p>

<p>Ofrecen una sensaci&oacute;n m&aacute;s cercana a los dientes naturales, que las dentaduras removibles (totales y/o parciales) no logran.</p>

<p>Proporcionan un resultado exitoso a nivel est&eacute;tico y al hablar, lo cual adicionalmente contribuye a promover la autoestima y seguridad en el paciente.&nbsp;&nbsp;</p>

<p>Ayudan a conservar el hueso impidiendo la reabsorci&oacute;n que ocurre tras la p&eacute;rdida temprana de los dientes.</p>

<p>Se logra por sus dise&ntilde;os una mejor higiene oral.</p>

<p>No se requiere tocar o tallar otros&nbsp; dientes para la confecci&oacute;n de las pr&oacute;tesis.</p>

<p>Permite una sensaci&oacute;n masticatoria similar a la de los dientes naturales.</p>

<p>En casos en los cuales se pierden todos los dientes, los Implantes con pr&oacute;tesis fijas, incrementan la calidad de vida de los pacientes y evitan el envejecimiento facial secundario.</p>

<p>La rehabilitaci&oacute;n mediante implantes oseointegrados es un procedimiento que se realiza en varias etapas. La primera de ellas es la instalaci&oacute;n &ndash;&ndash;mediante cirug&iacute;a&ndash;&ndash; de los implantes en el maxilar. En muchas oportunidades, cuando el caso lo permite, pueden ser restaurados prot&eacute;sicamente en forma inmediata&nbsp; y en otros casos requieren de un periodo de unas 12 semanas aproximadamente para colocar unos pilares intermediarios de segunda fase a trav&eacute;s de la enc&iacute;a y luego finalizar con el sistema prot&eacute;sico elegido (coronas, puentes), de forma firme y precisa.</p>

<p>El tercer y &uacute;ltimo paso es la instalaci&oacute;n del sistema prot&eacute;sico elegido (coronas, puentes), de forma firme y precisa.</p>

<p>Es muy importante que luego de realizado todo el proceso y finalizado el tratamiento prot&eacute;sico rehabilitador, el paciente debe seguir fielmente las indicaciones del especialista, con particular atenci&oacute;n al cepillado, uso de hilo dental, control de placa bacteriana, y visitas peri&oacute;dicas al Cirujano y al Protesista para asegurar el &eacute;xito de su tratamiento.</p>',
                'avatar' => 'areapacientes/cgm5xiSPdC90rYdrua6zkU69zqB5Yu8cIncYSykx.jpg',
                'is_featured' => 1,
                'is_active' => 1,
                'created_at' => Carbon::parse('2018-10-27 10:12:09'),
                'updated_at' => Carbon::parse('2024-04-20 23:44:31'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Cirugía Ortognática y Apnea Obstructiva del Sueño',
                'slug' => 'cirugia-ortognatica-y-apnea-obstructiva-del-sueno',
                'user_id' => 1,
                'category_id' => 2,
                'description' => '<p>El t&eacute;rmino Anomal&iacute;as Dentofaciales refiere a pacientes que presentan deformidades est&eacute;ticas y/o funcionales como poco ment&oacute;n o mand&iacute;bula prominente, problemas para respirar por la nariz o alteraciones en el &ldquo;encaje&rdquo; de los dientes, entre otros,&nbsp; los cuales se relacionan no s&oacute;lo con problemas en las arcadas dentarias sino que tambi&eacute;n con exceso o deficiencia en el crecimiento de los maxilares.</p>

<p>Estas alteraciones provocan defectos en la apariencia facial, que ocasionan dificultades para hablar, masticar, respirar, as&iacute; como alteraciones est&eacute;ticas que se traducen en problemas psicosociales. A su vez pueden desencadenar disfunci&oacute;n de la articulaci&oacute;n temporomandibular, generando dolores en los m&uacute;sculos faciales, los cuales se irradian hacia la cabeza, el cuello y los o&iacute;dos, entre otros.</p>

<p>La Cirug&iacute;a Ortogn&aacute;tica corrige las anomal&iacute;as de los maxilares al colocarlos en la posici&oacute;n correcta, en armon&iacute;a con la oclusi&oacute;n, mejorando dram&aacute;ticamente la apariencia facial del paciente (que contribuye sobremanera a elevar la autoestima) as&iacute; como la fonaci&oacute;n y la masticaci&oacute;n.</p>

<p>Este tratamiento requiere el concurso de varias especialidades, siendo el Cirujano Bucomaxilofacial y el Ortodoncista determinantes a lo largo de todo el proceso que se realiza en varias etapas.</p>

<p>El ortodoncista inicia el tratamiento alineando los dientes con el uso de aparatos ortod&oacute;nticos fijos. Esta fase dura de nueve a 18 meses aproximadamente, dependiendo de cada caso.</p>

<p>Luego el Cirujano Bucomaxilofacial realiza la cirug&iacute;a bajo anestesia general, reposicionando los maxilares en la posici&oacute;n correcta. Pasado el per&iacute;odo indicado de recuperaci&oacute;n postoperatoria, el Ortodoncista proceder&aacute; a la conclusi&oacute;n del tratamiento para corregir cualquier detalle de alineaci&oacute;n dental que se requiera.</p>',
                'avatar' => 'areapacientes/fdK6AfKdIrbAo0PatTm55MpHLWy5sNBvt6YJxr9w.jpg',
                'is_featured' => 0,
                'is_active' => 1,
                'created_at' => Carbon::parse('2018-10-27 11:12:09'),
                'updated_at' => Carbon::parse('2024-04-20 23:44:35'),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'prueba',
                'slug' => 'prueba',
                'user_id' => 1,
                'category_id' => 1,
                'description' => '<p>fdsf</p>',
                'avatar' => 'areapacientes/xppyUrQzyltAfmxeLMFvOXG5mwzdf1MbYFPSnxbF.jpg',
                'is_featured' => 0,
                'is_active' => 0,
                'created_at' => Carbon::parse('2021-04-10 20:28:49'),
                'updated_at' => Carbon::parse('2024-04-21 00:46:29'),
                'deleted_at' => Carbon::parse('2024-04-21 00:46:29'),
            ],
        ];

        DB::table('pacientes')->insert($data);
    }
}
