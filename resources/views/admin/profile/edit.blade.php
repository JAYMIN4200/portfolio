@extends('layouts.admin')
@section('title', 'Profile')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">My Profile</h1>
        <p class="text-slate-500 mt-1">Manage your personal information and public profile.</p>
    </div>

    @include('admin.profile._form', ['user' => auth()->user()])

@endsection
