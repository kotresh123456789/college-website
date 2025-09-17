<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'student_name',
        'student_id',
        'supervisor_id',
        'year',
        'semester',
        'project_type',
        'technologies_used',
        'github_link',
        'demo_link',
        'image',
        'is_featured',
        'is_completed'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_completed' => 'boolean',
        'technologies_used' => 'array'
    ];

    public function supervisor()
    {
        return $this->belongsTo(Faculty::class, 'supervisor_id');
    }
}
