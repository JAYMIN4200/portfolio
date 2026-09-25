<!DOCTYPE html>
<html lang="en" data-theme="dark" data-auth>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Admin Panel</title>
    @php $authFavicon = App\Models\Setting::imageUrl('favicon'); @endphp
    @if ($authFavicon)
        <link rel="icon" type="image/png" href="{{ $authFavicon }}">
    @else
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128272;</text></svg>">
    @endif
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-950 antialiased min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-indigo-600/30 blur-3xl"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-purple-600/30 blur-3xl"></div>

    <div class="w-full max-w-md relative">
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur flex items-center justify-center overflow-hidden shadow-xl shadow-indigo-500/20 mx-auto mb-4">
                @if ($authFavicon)
                    <img src="{{ $authFavicon }}" alt="Favicon" class="w-full h-full object-cover">
                @else
                    <span class="text-white font-bold text-2xl">A</span>
                @endif
            </div>
            <h1 class="text-2xl font-bold text-white">Forgot Password</h1>
            <p class="text-slate-400 mt-1 text-sm">Enter your email address to reset your password.</p>
        </div>

        <div class="bg-slate-900/70 backdrop-blur-xl rounded-2xl shadow-2xl shadow-indigo-950/40 border border-white/10 p-8">
            @if (session('status'))
                <div class="mb-6 p-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" data-submitting class="space-y-5" data-validate data-validate-messages='@json((new \App\Http\Requests\ForgotPasswordRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3 rounded-lg border border-white/10 bg-slate-950/60 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="admin@example.com">
                </div>
                <button type="submit" data-submit-form class="w-full inline-flex items-center justify-center gap-2 py-3 px-6 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] transition-all">
                    <span data-submit-label>Continue</span>
                    <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </button>
            </form>
        </div>

        <p class="text-center mt-6 text-sm text-slate-400">
            <a href="{{ route('login') }}" class="text-indigo-400 hover:text-indigo-300 font-medium">&larr; Back to login</a>
        </p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('[data-submit-form]')?.closest('form');
            form?.addEventListener('submit', () => {
                form.querySelectorAll('[type="submit"]').forEach(btn => {
                    const label = btn.querySelector('[data-submit-label]');
                    const spinner = btn.querySelector('[data-submit-spinner]');
                    btn.disabled = true;
                    if (label) label.textContent = 'Checking...';
                    if (spinner) spinner.classList.remove('hidden');
                });
            });
        });
    </script>

    @include('components.inline-validation')
</body>
</html>