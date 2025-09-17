<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'faculty_id',
        'publication_type',
        'journal_name',
        'year',
        'doi',
        'authors',
        'abstract',
        'keywords',
        'impact_factor',
        'is_published',
        'is_featured'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'authors' => 'array',
        'keywords' => 'array'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
