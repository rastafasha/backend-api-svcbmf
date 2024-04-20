<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pacientes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'title',
        'description',
        'is_active',
        'short_desc',
        'avatar',
        'slug',
    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
