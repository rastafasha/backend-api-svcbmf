<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DirectoriesTableSeeder extends Seeder
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
                'user_id' => 1,
                'nombre' => 'Paul Sebastian',
                'surname' => 'Abecasis Rivers',
                'especialidad' => 'Cirugía Bucomaxilofacial',
                'universidad' => 'Universidad Catolica Argentina Santa Maria de los Buenos Aires. Argentin',
                'ano' => '2008',
                'org' => '',
                'website' => '',
                'email' => 'abecasispaul@gmail.com',
                'direccion' => 'Av. Francisco Solano, Edif. Galerias Bolivar, Torre B, Piso 3, Ofic: 36-B. Grupo Dental Acuario, Urb. Sabana Grande. Caracas -1050-',
                'direccion1' => '',
                'estado' => 'Distrito Capital',
                'ciudad' => 'Caracas',
                'telefonos' => '',
                'tel1' => '+58(212)763-46.90',
                'telhome' => '',
                'telmovil' => '',
                'telprincipal' => '+58(212)761-53.84',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'linkedin' => '',
                'avatar' => null,
                'vcard' => 'BEGIN:VCARD
VERSION:3.0
N:Abecasis Rivers;Paul Sebastian
FN:Abecasis Rivers Paul Sebastian
ORG:null
URL:
URL:
URL:
URL:
URL:
EMAIL:abecasispaul@gmail.com
PHOTO:
TITLE:Cirugía Bucomaxilofacial
ADR;TYPE=work:Av. Francisco Solano, Edif. Galerias Bolivar, Torre B, Piso 3, Ofic: 36-B. Grupo Dental Acuario, Urb. Sabana Grande. Caracas -1050-
ADR;TYPE=home:
TEL;TYPE=voice,work,oref:+58(212)763-46.90
TEL;TYPE=voice,home,oref:
TEL;TYPE=voice,mobile,oref:
TEL;TYPE=voice,first,oref:+58(212)761-53.84
END:VCARD
',
                'created_at' => Carbon::parse('2025-05-23 18:14:06'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'nombre' => 'Elizabeth',
                'surname' => 'Albornoz Ríos',
                'especialidad' => 'Cirugía Bucal',
                'universidad' => 'Universidad Central de Venezuela.',
                'ano' => '2010',
                'org' => '',
                'website' => '',
                'email' => 'elyalbornoz@hotmail.com',
                'direccion' => 'Av. Las Acacias con Gran Avenida, Torre Lincoln, Piso 4 Ofic. C, Plaza Venezuela. Caracas. 1050.',
                'direccion1' => '',
                'estado' => 'Distrito Capital',
                'ciudad' => 'Caracas',
                'telefonos' => '',
                'tel1' => '',
                'telhome' => '',
                'telmovil' => '+58(414)315-99.42.',
                'telprincipal' => '+58(212)782-10.31',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'linkedin' => '',
                'avatar' => null,
                'vcard' => 'BEGIN:VCARD
VERSION:3.0
N:Albornoz Ríos;Elizabeth
FN:Albornoz Ríos Elizabeth
ORG:
URL:
URL:
URL:
URL:
URL:
EMAIL:elyalbornoz@hotmail.com
PHOTO:
TITLE:Cirugía Bucal
ADR;TYPE=work:Av. Las Acacias con Gran Avenida, Torre Lincoln, Piso 4 Ofic. C, Plaza Venezuela. Caracas. 1050.
ADR;TYPE=home:
TEL;TYPE=voice,work,oref:
TEL;TYPE=voice,home,oref:
TEL;TYPE=voice,mobile,oref:+58(414)315-99.42.
TEL;TYPE=voice,first,oref:+58(212)782-10.31
END:VCARD
',
                'created_at' => Carbon::parse('2025-05-23 18:14:09'),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            // ... more records up to 20
        ];

        DB::table('directories')->insert($data);
    }
}
