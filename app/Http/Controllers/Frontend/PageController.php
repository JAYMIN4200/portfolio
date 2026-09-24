<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;

class PageController extends Controller
{
    public function show(string $slug)
    {
        $page = Page::published()->where('slug', $slug)->firstOrFail();

        return view('pages.page', [
            'page' => $page,
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']),
        ]);
    }
}
