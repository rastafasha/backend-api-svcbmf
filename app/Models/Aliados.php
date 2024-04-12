<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aliados extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'title',
        'is_active',
        'enlace',
        'target',
        'image',

    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
