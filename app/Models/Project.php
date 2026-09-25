<?php

namespace App\Models;

use App\Models\Concerns\HasImageFallback;
use App\Support\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasImageFallback;

    protected $fillable = [
        'title', 'slug', 'description', 'long_description', 'image',
        'technologies', 'live_url', 'github_url', 'is_featured', 'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'technologies' => 'array',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Cover image, falling back to the shared placeholder when the column is
     * empty or the file is missing from the public disk.
     */
    public function imageUrl(): string
    {
        return $this->firstExistingImageUrl([$this->image], Media::DEFAULT_PLACEHOLDER);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
