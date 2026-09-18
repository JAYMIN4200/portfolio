<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'site_title' => Setting::get('site_title', ''),
            'site_tagline' => Setting::get('site_tagline', ''),
            'site_description' => Setting::get('site_description', ''),
            'footer_text' => Setting::get('footer_text', ''),
            'meta_keywords' => Setting::get('meta_keywords', ''),
            'meta_description' => Setting::get('meta_description', ''),
            'contact_email' => Setting::get('contact_email', ''),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(SettingRequest $request)
    {
        Setting::setMany($request->input('settings'));

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
