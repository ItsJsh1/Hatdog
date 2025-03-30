<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsUpdate extends Model
{
    use HasFactory, SoftDeletes;

    // Disable automatic updated_at timestamp
    public $timestamps = false;
    
    protected $fillable = [
        'user_id',
        'featured_image',
        'caption',
        'created_at',
    ];

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}