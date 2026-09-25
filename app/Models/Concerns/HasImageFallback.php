<?php

namespace App\Models\Concerns;

use App\Support\Media;

trait HasImageFallback
{
    /**
     * Resolve a stored image path to a public URL, falling back when the
     * column is empty or the file is missing from the public disk.
     */
    protected function firstExistingImageUrl(array $paths, ?string $fallback = Media::DEFAULT_AVATAR): ?string
    {
        return Media::firstUrl($paths, $fallback);
    }

    protected function storedImageExists(?string $path): bool
    {
        return Media::exists($path);
    }
}
