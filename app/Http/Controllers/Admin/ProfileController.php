<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $user->load('profile');

        return view('admin.profile.edit', ['user' => $user]);
    }

    public function update(ProfileRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            if ($user->profile && $user->profile->avatar) {
                Storage::disk('public')->delete($user->profile->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        if ($request->hasFile('resume')) {
            if ($user->profile && $user->profile->resume_path) {
                Storage::disk('public')->delete($user->profile->resume_path);
            }
            $data['resume_path'] = $request->file('resume')->store('resumes', 'public');
        }

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
        unset($data['name'], $data['email']);

        $user->profile()->updateOrCreate(['user_id' => $user->id], $data);

        return redirect()->route('admin.profile.edit')->with('success', 'Profile updated successfully.');
    }
}
