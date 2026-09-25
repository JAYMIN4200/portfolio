<?php

namespace App\Models;

use App\Models\Concerns\HasImageFallback;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasImageFallback;

    protected $fillable = [
        'company', 'position', 'description', 'start_date',
        'end_date', 'is_current', 'location', 'website', 'logo', 'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'is_current' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('start_date', 'desc');
    }

    /**
     * Company logo. Returns null when no file is stored so callers can keep
     * their inline SVG icon instead of rendering a placeholder.
     */
    public function logoUrl(): ?string
    {
        return $this->firstExistingImageUrl([$this->logo], null);
    }
}
