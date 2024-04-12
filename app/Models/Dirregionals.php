<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dirregionals extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id', 
        'title', 
        'presidente', 
        'secretario', 
        'tesorero', 
        'vocal',
        'primerSuplente',
    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
