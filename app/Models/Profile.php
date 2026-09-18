<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'title', 'bio', 'avatar', 'resume_path',
        'phone', 'location', 'github', 'linkedin', 'twitter', 'website',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
