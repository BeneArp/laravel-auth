<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'description',
        'slug'
    ];

    protected $casts = [
        'start_date' => 'datetime:d/m/Y',
        'end_date' => 'datetime:d/m/Y',
    ];
}
