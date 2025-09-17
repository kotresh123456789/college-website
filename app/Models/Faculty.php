<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'qualification',
        'specialization',
        'email',
        'phone',
        'image',
        'bio',
        'experience',
        'publications',
        'research_interests',
        'is_hod',
        'is_coordinator',
        'coordinator_type',
        'is_active'
    ];

    protected $casts = [
        'is_hod' => 'boolean',
        'is_coordinator' => 'boolean',
        'is_active' => 'boolean',
        'publications' => 'array',
        'research_interests' => 'array'
    ];
}
