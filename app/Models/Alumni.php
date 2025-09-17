<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'graduation_year',
        'degree',
        'current_position',
        'company',
        'email',
        'linkedin',
        'bio',
        'image',
        'achievements',
        'is_featured',
        'is_active'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'achievements' => 'array'
    ];
}
