<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

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
            'signature_image' => Setting::get('signature_image', ''),
            'favicon' => Setting::get('favicon', ''),
            'hero_words' => Setting::get('hero_words', ''),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(SettingRequest $request)
    {
        $settings = $request->input('settings', []);

        if ($request->hasFile('settings.signature_image')) {
            $old = Setting::get('signature_image');
            if ($old) {
                Storage::disk('public')->delete($old);
            }
            $settings['signature_image'] = $request->file('settings.signature_image')->store('settings', 'public');
        }

        if ($request->hasFile('settings.favicon')) {
            $old = Setting::get('favicon');
            if ($old) {
                Storage::disk('public')->delete($old);
            }
            $settings['favicon'] = $request->file('settings.favicon')->store('settings', 'public');
        }

        Setting::setMany($settings);

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
