<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_info';

    protected $fillable = [
        'email',
        'github_url',
        'linkedin_url',
        'instagram_url',
        'twitter_url',
    ];
}
