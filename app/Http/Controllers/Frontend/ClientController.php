<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Setting;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::where('status', 'active')
            ->orderByDesc('created_at')
            ->paginate(12);

        $settings = Setting::getMany(['site_title', 'site_tagline', 'site_description', 'signature_image', 'favicon']);

        return view('pages.clients.index', compact('clients', 'settings'));
    }
}