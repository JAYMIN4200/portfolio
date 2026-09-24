<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="dark" style="color-scheme: dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128187;</text></svg>">
    <title>Server Error</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-300 antialiased min-h-screen flex flex-col relative overflow-x-hidden">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>
    </div>

    <nav class="w-full px-6 py-6 flex items-center justify-between max-w-7xl mx-auto relative z-10">
        <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 text-transparent bg-clip-text" style="font-family: 'Dancing Script', cursive; font-weight: 700">Portfolio</a>
        <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg border border-white/10 text-white text-sm font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">Back to Home</a>
    </nav>

    <main class="flex-1 flex items-center justify-center px-6 py-16 relative z-10">
        <div class="text-center max-w-lg">
            <p class="text-7xl md:text-8xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 text-transparent bg-clip-text mb-6">500</p>
            <h1 class="text-2xl md:text-3xl font-bold text-white mb-4">Something Went Wrong</h1>
            <p class="text-slate-400 leading-relaxed mb-8">An unexpected error occurred on our end. Please try again in a moment, or head back to the homepage in the meantime.</p>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10"/></svg>
                    Go to Homepage
                </a>
                <button type="button" onclick="window.location.reload()" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-white/10 text-white font-semibold hover:bg-white/5 hover:border-indigo-500/50 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    Try Again
                </button>
            </div>
        </div>
    </main>

    <footer class="py-8 text-center text-sm text-slate-500 relative z-10">&copy; {{ date('Y') }} Portfolio. All rights reserved.</footer>

</body>
</html>