<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * Branding is shared with every transactional email template. The child
     * views reference $siteName inside their @extends payload, which is
     * evaluated before the mail layout runs, so it has to be injected here
     * rather than inside layouts/mail.blade.php.
     */
    public function boot(): void
    {
        View::composer(['layouts.mail', 'emails.*'], function ($view) {
            $view->with('siteName', Setting::get('site_title') ?: config('app.name'));
            $view->with('siteUrl', config('app.url'));
        });
    }
}
