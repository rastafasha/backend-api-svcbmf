<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formacions extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'title',
        'tipoPrograma',
        'aval',
        'tiempoFormacion',
        'frecuencia',
        'director',
        'is_active',
        'is_featured',
    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
