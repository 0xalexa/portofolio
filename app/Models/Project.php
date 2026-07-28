<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'screenshots',
        'demo_url',
        'repo_url',
    ];

    protected $casts = [
        'screenshots' => 'array',
    ];
}
