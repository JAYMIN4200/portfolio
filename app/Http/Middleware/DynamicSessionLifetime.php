<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class DynamicSessionLifetime
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::check()) {
            return $next($request);
        }

        $sessionLifetime = (int) Setting::get('session_lifetime', 120);

        // If 0, disable auto-logout (use a very large value)
        if ($sessionLifetime === 0) {
            Config::set('session.lifetime', 525600); // 1 year in minutes
            Session::put('_session_lifetime', 525600);
        } else {
            Config::set('session.lifetime', $sessionLifetime);
            Session::put('_session_lifetime', $sessionLifetime);
        }

        // Update the session's last activity time
        $lastActivity = Session::get('_last_activity');
        $now = time();

        if ($lastActivity && $sessionLifetime > 0) {
            $idleTime = $now - $lastActivity;
            $maxIdleTime = $sessionLifetime * 60; // Convert to seconds

            if ($idleTime > $maxIdleTime) {
                // Session has expired due to inactivity
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('login')
                    ->with('warning', 'You have been logged out due to inactivity.');
            }
        }

        // Update last activity timestamp
        Session::put('_last_activity', $now);

        return $next($request);
    }
}
