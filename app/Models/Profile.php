<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'title', 'bio', 'avatar', 'about_image', 'home_about_image', 'resume_path',
        'resume_downloads',
        'phone', 'whatsapp', 'telegram', 'location', 'github', 'linkedin', 'twitter', 'website',
        'instagram', 'facebook', 'brand_font',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
