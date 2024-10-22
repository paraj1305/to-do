<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'scheduled_at',
        'completed',
    ];

    // Cast 'scheduled_at' to a Carbon instance
    protected $casts = [
        'scheduled_at' => 'datetime',
    ];
}
