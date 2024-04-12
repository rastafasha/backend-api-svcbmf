<?php

namespace App\Models;

use App\Models\User;
use App\Models\Cargos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ceos extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        'cargo_id',
        'name',
        'cargoceo_name',
        'image',
    ];

    public function author() {
        return $this->belongsTo(User::class,"user_id");
    }
    public function cargo() {
        return $this->hasMany(Cargos::class,"cargo_id");
    }
}
