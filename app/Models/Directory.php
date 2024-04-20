<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Directory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
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
        'avatar',
        'vcard',
        'status',

    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }

    // filtro buscador

    public function scopefilterAdvance($query,$speciality_id, $name_doctor){
        
        // if($speciality_id){
        //     $query->where("speciality_id", $speciality_id);
        // }

        if($name_doctor){
            $query->whereHas("doctor", function($q)use($name_doctor){
                $q->where("name", "like","%".$name_doctor."%")
                    ->orWhere("surname", "like","%".$name_doctor."%");
            });
        }

        
        return $query;
    }


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
