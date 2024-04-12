<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'title',
        'description',
        'short_desc',
        'author',
        'is_active',
        'image',

    ];

    public function author() {
        return $this->belongsTo(User::class,"user_id");
    }
}
