<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'achiever_name',
        'achiever_type', // 'faculty' or 'student'
        'achievement_type', // 'award', 'publication', 'project', 'competition', etc.
        'year',
        'organization',
        'certificate',
        'image',
        'is_featured',
        'is_active'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];
}
