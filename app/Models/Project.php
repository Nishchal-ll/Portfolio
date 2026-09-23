<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'order',
        'technologies',
        'github_link',
        'live_link',
        'image_url',
    ];

    protected $casts = [
        'technologies' => 'array',
        'order' => 'integer',
    ];

    /**
     * Get the full URL for the project cover image.
     */
    public function getCoverImageUrlAttribute(): ?string
    {
        if (!$this->image_url) {
            return null;
        }

        if (str_starts_with($this->image_url, 'http://') || str_starts_with($this->image_url, 'https://') || str_starts_with($this->image_url, '/')) {
            return $this->image_url;
        }

        return \Illuminate\Support\Facades\Storage::url($this->image_url);
    }
}
