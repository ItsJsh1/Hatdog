<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'author'
    ];

    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('created_at', 'desc')->take($limit);
    }

    public function scopePast($query, $skip = 5, $limit = 10)
    {
        return $query->orderBy('created_at', 'desc')->skip($skip)->take($limit);
    }
}
