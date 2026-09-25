<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

class Media
{
    /**
     * Per-request memoization of public-disk existence checks.
     *
     * @var array<string, bool>
     */
    private static array $existenceCache = [];

    /**
     * Default placeholder used whenever a profile or setting image cannot
     * be resolved to a real file.
     */
    public const DEFAULT_AVATAR = 'images/default-avatar.svg';

    public const DEFAULT_PLACEHOLDER = 'images/default-profile.svg';

    /**
     * Determine whether a stored path still points at a real file on the
     * public disk. Never throws, so a broken disk cannot take a page down.
     */
    public static function exists(?string $path): bool
    {
        if (blank($path)) {
            return false;
        }

        return self::$existenceCache[$path] ??= rescue(
            fn (): bool => Storage::disk('public')->exists($path),
            false,
            report: false,
        );
    }

    /**
     * Resolve a stored path to a public URL, or null when the file is gone.
     */
    public static function url(?string $path): ?string
    {
        return self::exists($path) ? asset('storage/'.$path) : null;
    }

    /**
     * Resolve the first stored path that still exists to a public URL,
     * falling back to the given placeholder when every candidate is gone.
     */
    public static function firstUrl(array $paths, ?string $fallback = self::DEFAULT_AVATAR): ?string
    {
        foreach ($paths as $path) {
            if ($url = self::url($path)) {
                return $url;
            }
        }

        return filled($fallback) ? asset($fallback) : null;
    }

    /**
     * Drop memoized existence checks. Call this after writing to the public
     * disk from a long-lived process (queue worker, Octane, tests).
     */
    public static function flush(): void
    {
        self::$existenceCache = [];
    }
}
