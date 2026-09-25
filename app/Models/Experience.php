<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'role',
        'company',
        'company_url',
        'location',
        'employment_type',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'highlights',
        'technologies',
        'order',
    ];

    protected $casts = [
        'is_current' => 'boolean',
        'highlights' => 'array',
        'technologies' => 'array',
        'order' => 'integer',
    ];
}
