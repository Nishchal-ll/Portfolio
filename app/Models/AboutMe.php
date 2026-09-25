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
        'cv_url',
    ];

    /**
     * Get the dynamic URL for the uploaded CV.
     */
    public function getCvFileUrlAttribute(): string
    {
        if (!$this->cv_url) {
            return '/cv.pdf';
        }

        if (str_starts_with($this->cv_url, 'http://') || str_starts_with($this->cv_url, 'https://') || str_starts_with($this->cv_url, '/')) {
            return $this->cv_url;
        }

        return \Illuminate\Support\Facades\Storage::url($this->cv_url);
    }
}
