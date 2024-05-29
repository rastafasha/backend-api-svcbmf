<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'surname',
        'especialidad',
        'universidad',
        'ano',
        'org',
        'website',
        'email',
        'direccion',
        'direccion1',
        'estado',
        'ciudad',
        'telefonos',
        'tel1',
        'telhome',
        'telmovil',
        'telprincipal',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
    ];

    public static function search($query = ''){
        if(!$query){
            return self::all();
        }
        return self::where('nombre', 'like', "%$query%")
        ->orWhere('surname', 'like', "%$query%")
        ->orWhere('email', 'like', "%$query%")
        ->orWhere('telefonos', 'like', "%$query%")
        ->orWhere('tel1', 'like', "%$query%")
        ->orWhere('telhome', 'like', "%$query%")
        ->orWhere('telmovil', 'like', "%$query%")
        ->orWhere('telprincipal', 'like', "%$query%")
        ->orWhere('especialidad', 'like', "%$query%")
        ->get();
    }
}
