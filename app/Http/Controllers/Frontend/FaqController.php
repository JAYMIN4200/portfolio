<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;

class FaqController extends Controller
{
    public function index()
    {
        return view('pages.faq', [
            'faqs' => Faq::visible()->ordered()->get(),
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']),
        ]);
    }
}
