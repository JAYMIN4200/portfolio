<?php

namespace App\Models;

use App\Models\Concerns\HasImageFallback;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasImageFallback;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'image',
        'is_published', 'published_at',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->whereNotNull('published_at');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    /**
     * Cover image, or null when no file is stored so callers can keep their
     * own designed placeholder block.
     */
    public function imageUrl(): ?string
    {
        return $this->firstExistingImageUrl([$this->image], null);
    }
}
