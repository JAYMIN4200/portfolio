<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@hasSection('title')@yield('title') | @endif{{ $settings['site_title'] ?? config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', $settings['site_description'] ?? '')">
    <meta name="keywords" content="{{ $settings['meta_keywords'] ?? '' }}">
    <meta name="author" content="{{ $settings['site_title'] ?? config('app.name') }}">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $settings['site_title'] ?? config('app.name') }}">
    <meta property="og:title" content="@hasSection('title')@yield('title') | @endif{{ $settings['site_title'] ?? config('app.name') }}">
    <meta property="og:description" content="@yield('meta_description', $settings['site_description'] ?? '')">

    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128187;</text></svg>">

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-300 antialiased min-h-screen flex flex-col">

    <x-frontend.navbar :settings="$settings" />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-frontend.footer :settings="$settings" />

    @stack('scripts')
</body>
</html>