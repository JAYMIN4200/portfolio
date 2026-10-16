<?php

namespace App\Support;

use Illuminate\Support\Facades\Vite;

class ViteDevServer
{
    /**
     * Placeholder hot file that is never written to disk. Pointing Vite at it
     * makes isRunningHot() report false so the built manifest is used instead.
     */
    private const UNREACHABLE_HOT_FILE = 'framework/vite-hot-unreachable';

    /**
     * Port assumed when the hot file omits one, matching the Vite default.
     */
    private const DEFAULT_PORT = 5173;

    /**
     * Seconds to wait for the dev server socket before giving up.
     */
    private const CONNECT_TIMEOUT = 0.5;

    /**
     * While `npm run dev` is running, Vite records the dev server URL in
     * public/hot and Laravel loads every asset from it. If that process is
     * force-closed (terminal killed, machine rebooted) the file survives but
     * nothing listens on the port, so the site silently loses all CSS and JS.
     * When the recorded server is unreachable, fall back to the built assets.
     */
    public static function useBuiltAssetsWhenDevServerIsDown(): void
    {
        $hotFile = public_path('hot');

        if (! is_file($hotFile)) {
            return;
        }

        $devServerUrl = trim((string) file_get_contents($hotFile));

        if (self::isReachable($devServerUrl)) {
            return;
        }

        Vite::useHotFile(storage_path(self::UNREACHABLE_HOT_FILE));
    }

    /**
     * Determine whether a Vite dev server is accepting connections at the
     * given URL. Never throws, so a malformed hot file cannot take a page
     * down.
     */
    public static function isReachable(string $url): bool
    {
        $host = parse_url($url, PHP_URL_HOST);

        if (! is_string($host) || $host === '') {
            return false;
        }

        $port = parse_url($url, PHP_URL_PORT) ?: self::DEFAULT_PORT;

        $connection = rescue(
            fn () => fsockopen(trim($host, '[]'), $port, $errorCode, $errorMessage, self::CONNECT_TIMEOUT),
            null,
            report: false,
        );

        if (! is_resource($connection)) {
            return false;
        }

        fclose($connection);

        return true;
    }
}
