<?php

namespace App\Models;

use App\Models\Concerns\HasImageFallback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use HasImageFallback;

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

    public function avatarUrl(): string
    {
        return $this->firstExistingImageUrl([$this->avatar]);
    }

    public function aboutImageUrl(): string
    {
        return $this->firstExistingImageUrl(
            [$this->about_image, $this->avatar],
            'images/default-profile.svg',
        );
    }

    public function homeAboutImageUrl(): string
    {
        return $this->firstExistingImageUrl(
            [$this->home_about_image, $this->avatar],
            'images/default-profile.svg',
        );
    }

    public function hasResume(): bool
    {
        return $this->storedImageExists($this->resume_path);
    }

    public function resumeUrl(): ?string
    {
        return $this->hasResume() ? asset('storage/'.$this->resume_path) : null;
    }

    public function deleteStoredMedia(): void
    {
        $disk = Storage::disk('public');

        foreach (array_filter([$this->avatar, $this->about_image, $this->home_about_image, $this->resume_path]) as $path) {
            $disk->delete($path);
        }
    }
}
