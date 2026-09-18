@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Profile</h1>
        <p class="text-slate-500 mt-1">Update your profile information, avatar and resume.</p>
    </div>

    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" class="max-w-3xl">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Personal Information</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('name') border-red-300 @enderror"
                           placeholder="Your name">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('email') border-red-300 @enderror"
                           placeholder="you@example.com">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Professional Title</label>
                    <input type="text" name="title" value="{{ old('title', $user->profile->title ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="e.g. Full-Stack Developer">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->profile->phone ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="+1 234 567 890">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                    <input type="text" name="location" value="{{ old('location', $user->profile->location ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="City, Country">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Website</label>
                    <input type="url" name="website" value="{{ old('website', $user->profile->website ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://example.com">
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Bio</label>
                    <textarea name="bio" rows="4"
                              class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none"
                              placeholder="Tell visitors about yourself...">{{ old('bio', $user->profile->bio ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Social Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">GitHub</label>
                    <input type="url" name="github" value="{{ old('github', $user->profile->github ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://github.com/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">LinkedIn</label>
                    <input type="url" name="linkedin" value="{{ old('linkedin', $user->profile->linkedin ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://linkedin.com/in/you">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Twitter / X</label>
                    <input type="url" name="twitter" value="{{ old('twitter', $user->profile->twitter ?? '') }}"
                           class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all"
                           placeholder="https://x.com/you">
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Media</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Avatar</label>
                    @if ($user->profile && $user->profile->avatar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $user->profile->avatar) }}" alt="Avatar" class="w-20 h-20 rounded-lg object-cover border border-slate-200">
                        </div>
                    @endif
                    <input type="file" name="avatar" accept="image/*"
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">Max 2MB. Recommended: 400x400px</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Resume (PDF)</label>
                    @if ($user->profile && $user->profile->resume_path)
                        <div class="mb-2">
                            <a href="{{ asset('storage/' . $user->profile->resume_path) }}" target="_blank" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                Current resume
                            </a>
                        </div>
                    @endif
                    <input type="file" name="resume" accept=".pdf"
                           class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors">
                    <p class="text-xs text-slate-400 mt-1">Max 5MB. PDF only.</p>
                </div>
            </div>
        </div>

        <button type="submit" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition-colors">
            Save Changes
        </button>
    </form>

@endsection