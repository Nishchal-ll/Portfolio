<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $table = 'about_me';

    protected $fillable = [
        'role',
        'line_1',
        'line_2',
        'line_3',
        'image_url',
    ];
}
