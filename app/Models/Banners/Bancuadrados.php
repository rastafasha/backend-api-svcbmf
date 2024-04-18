<?php

namespace App\Models\Banners;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bancuadrados extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'titulo',
        'target',
        'enlace',
        'is_active',
        'avatar',

    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
