<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'project_role',
        'client',
        'industry',
        'date_range',
        'status',
        'overview',
        'features',
        'architecture',
        'challenges',
        'order',
        'technologies',
        'github_link',
        'live_link',
        'image_url',
        'gallery_images',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'gallery_images' => 'array',
        'order' => 'integer',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

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

    /**
     * Get array of full URLs for gallery images.
     */
    public function getGalleryImageUrlsAttribute(): array
    {
        if (!$this->gallery_images || !is_array($this->gallery_images)) {
            return [];
        }

        return array_map(function ($img) {
            if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://') || str_starts_with($img, '/')) {
                return $img;
            }
            return \Illuminate\Support\Facades\Storage::url($img);
        }, $this->gallery_images);
    }
}
