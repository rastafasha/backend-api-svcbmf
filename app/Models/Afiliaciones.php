<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Afiliaciones extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'nombres',
        'apellidos',
        'titulo',
        'universidad',
        'graduacion',
        'ciudad',
        'estado',
        'telefonos',
        'email',
        'archivo',

    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
