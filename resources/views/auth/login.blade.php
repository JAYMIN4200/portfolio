<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin Panel</title>
    @php $authFavicon = App\Models\Setting::get('favicon'); @endphp
    @if ($authFavicon)
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $authFavicon) }}">
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
                    <img src="{{ asset('storage/' . $authFavicon) }}" alt="Favicon" class="w-full h-full object-cover">
                @else
                    <span class="text-white font-bold text-2xl">A</span>
                @endif
            </div>
            <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
            <p class="text-slate-400 mt-1 text-sm">Sign in to manage your portfolio</p>
        </div>

        <div class="bg-white rounded-2xl shadow-2xl border border-white/40 p-8">
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200 text-red-600 text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.attempt') }}" class="space-y-5" data-validate data-validate-messages='@json((new \App\Http\Requests\LoginRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="admin@example.com">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                               class="w-full px-4 py-3 pr-12 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                               placeholder="••••••••">
                        <button type="button" data-password-toggle data-password-toggle-for="password"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 transition-colors" aria-label="Show password">
                            <svg class="w-5 h-5" data-icon-eye fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            <svg class="w-5 h-5 hidden" data-icon-eye-off fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/></svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="text-sm text-slate-600">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">Forgot password?</a>
                </div>
                <button type="submit" data-submit-form class="w-full inline-flex items-center justify-center gap-2 py-3 px-6 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] transition-all">
                    <span data-submit-label>Sign In</span>
                    <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </button>
            </form>
        </div>

        <p class="text-center mt-6 text-sm text-slate-400">
            <a href="{{ route('home') }}" class="text-indigo-400 hover:text-indigo-300 font-medium">&larr; Back to website</a>
        </p>
    </div>

    <x-bootstrap.toasts />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-password-toggle]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const input = document.getElementById(btn.dataset.passwordToggleFor);
                    if (!input) return;
                    const show = input.type === 'password';
                    input.type = show ? 'text' : 'password';
                    btn.querySelector('[data-icon-eye]')?.classList.toggle('hidden', show);
                    btn.querySelector('[data-icon-eye-off]')?.classList.toggle('hidden', !show);
                });
            });

            const form = document.querySelector('[data-submit-form]')?.closest('form');
            form?.addEventListener('submit', () => {
                form.querySelectorAll('[type="submit"]').forEach(btn => {
                    const label = btn.querySelector('[data-submit-label]');
                    const spinner = btn.querySelector('[data-submit-spinner]');
                    btn.disabled = true;
                    if (label) label.textContent = 'Submitting...';
                    if (spinner) spinner.classList.remove('hidden');
                });
            });
        });
    </script>

    @stack('scripts')

    @include('components.inline-validation')
</body>
</html>