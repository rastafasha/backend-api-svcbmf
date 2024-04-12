<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timelines extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        'title',
        'youtube',
        'facebook',
        'short_desc',
        'author',
        'is_featured',
        'is_active',
        'category_id',
        'image',
    ];

    public function doctor() {
        return $this->belongsTo(User::class,"user_id");
    }
}
