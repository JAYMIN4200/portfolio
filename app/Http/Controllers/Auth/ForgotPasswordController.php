<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    public function showForgotForm(): View
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(ForgotPasswordRequest $request): RedirectResponse
    {
        if (! $request->session()->has('reset_email')) {
            $request->session()->put('reset_email', $request->input('email'));
        }

        return redirect()->route('password.reset');
    }

    public function showResetForm(): View|RedirectResponse
    {
        if (! session()->has('reset_email')) {
            return redirect()->route('password.request');
        }

        return view('auth.reset-password');
    }

    public function reset(ResetPasswordRequest $request): RedirectResponse
    {
        $email = $request->session()->pull('reset_email');

        $user = User::where('email', $email)->first();

        if (! $user) {
            return redirect()->route('password.request')->withErrors(['email' => 'We could not find an account with that email.']);
        }

        $user->update(['password' => $request->input('password')]);

        return redirect()->route('login')->with('success', 'Your password has been reset. Please sign in with your new password.');
    }
}
