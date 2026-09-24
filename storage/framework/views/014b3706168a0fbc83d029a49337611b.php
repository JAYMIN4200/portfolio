<!DOCTYPE html>
<html lang="en" data-admin>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?><?php echo $__env->yieldContent('title'); ?> | <?php endif; ?> Admin Panel</title>
    <?php $adminFavicon = App\Models\Setting::get('favicon'); ?>
    <?php if($adminFavicon): ?>
        <link rel="icon" type="image/png" href="<?php echo e(asset('storage/' . $adminFavicon)); ?>">
    <?php else: ?>
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128272;</text></svg>">
    <?php endif; ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen">

    <?php $adminAvatar = auth()->user()->profile?->avatar; ?>
    <?php $adminSignature = App\Models\Setting::get('signature_image'); ?>

    <div class="min-h-screen flex">
        <aside data-admin-sidebar class="admin-sidebar hidden lg:flex lg:sticky lg:top-0 lg:h-screen w-64 bg-slate-900 flex-col z-30 shrink-0">
            <div class="admin-sidebar-head flex items-center gap-3 px-6 py-5 border-b border-slate-800">
                <?php if($adminSignature): ?>
                    <img src="<?php echo e(asset('storage/' . $adminSignature)); ?>" alt="Admin Panel" class="h-9 w-auto object-contain shrink-0 drop-shadow">
                <?php else: ?>
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h6v16H5a1 1 0 01-1-1V5zM15 4h5v5h-5V4zM15 15h5v5h-5v-5z"/></svg>
                    </div>
                <?php endif; ?>
                <div>
                    <p class="admin-brand-text text-white font-semibold text-sm leading-tight">Admin Panel</p>
                    <p class="admin-brand-text text-slate-400 text-xs">Portfolio Admin</p>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7V5a1 1 0 011 1v13a1 1 0 01-1 1H4a1 1 0 01-1-1v-7z"/></svg>
                    <span class="admin-link-label">Dashboard</span>
                </a>
                <a href="<?php echo e(route('admin.profile.edit')); ?>" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.profile.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span class="admin-link-label">Profile</span>
                </a>
                <?php $unread = App\Models\Message::unread()->count(); ?>
                <a href="<?php echo e(route('admin.messages.index')); ?>" class="aside-link flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.messages.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                    <span class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        <span class="admin-link-label">Messages</span>
                    </span>
                    <?php if($unread > 0): ?>
                        <span class="admin-badge inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-red-500 text-white"><?php echo e($unread); ?></span>
                    <?php endif; ?>
                </a>
                <a href="<?php echo e(route('admin.newsletter.index')); ?>" class="aside-link flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.newsletter.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="admin-link-label">Newsletter</span>
                </a>

                <?php $contentGroupActive = request()->routeIs('admin.skills.*') || request()->routeIs('admin.experiences.*') || request()->routeIs('admin.projects.*') || request()->routeIs('admin.services.*') || request()->routeIs('admin.testimonials.*'); ?>
                <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="content" data-open="<?php echo e($contentGroupActive ? 1 : 0); ?>">
                    <button type="button" class="admin-nav-toggle aside-link w-full flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($contentGroupActive ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                            <span class="admin-link-label">Content</span>
                        </span>
                        <svg class="admin-nav-chevron w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="admin-nav-submenu space-y-1 mt-1">
                        <a href="<?php echo e(route('admin.skills.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.skills.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>Skills</a>
                        <a href="<?php echo e(route('admin.experiences.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.experiences.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>Experience</a>
                        <a href="<?php echo e(route('admin.projects.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.projects.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/></svg>Projects</a>
                        <a href="<?php echo e(route('admin.services.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.services.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/></svg>Services</a>
                        <a href="<?php echo e(route('admin.testimonials.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.testimonials.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>Testimonials</a>
                    </div>
                </div>

                <?php $pagesGroupActive = request()->routeIs('admin.posts.*') || request()->routeIs('admin.faqs.*') || request()->routeIs('admin.pages.*'); ?>
                <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="pages" data-open="<?php echo e($pagesGroupActive ? 1 : 0); ?>">
                    <button type="button" class="admin-nav-toggle aside-link w-full flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($pagesGroupActive ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                            <span class="admin-link-label">Pages</span>
                        </span>
                        <svg class="admin-nav-chevron w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="admin-nav-submenu space-y-1 mt-1">
                        <a href="<?php echo e(route('admin.posts.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.posts.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2zm4-14v6m0 0l-2-2m2 2l2-2"/></svg>Blog Posts</a>
                        <a href="<?php echo e(route('admin.faqs.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.faqs.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>FAQ</a>
                        <a href="<?php echo e(route('admin.pages.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.pages.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>Pages</a>
                    </div>
                </div>

                <?php $pendingMeetings = App\Models\Meeting::pending()->count(); ?>
                <?php $businessGroupActive = request()->routeIs('admin.clients.*') || request()->routeIs('admin.meetings.*') || request()->routeIs('admin.expenses.*'); ?>
                <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="business" data-open="<?php echo e($businessGroupActive ? 1 : 0); ?>">
                    <button type="button" class="admin-nav-toggle aside-link w-full flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($businessGroupActive ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <span class="admin-link-label">Business</span>
                        </span>
                        <svg class="admin-nav-chevron w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="admin-nav-submenu space-y-1 mt-1">
                        <a href="<?php echo e(route('admin.clients.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.clients.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>Clients</a>
                        <a href="<?php echo e(route('admin.meetings.index')); ?>" class="admin-sub-link aside-link flex items-center justify-between gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.meetings.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                            <span class="flex items-center gap-3"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><span>Meetings</span></span>
                            <?php if($pendingMeetings > 0): ?>
                                <span class="admin-badge inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-amber-500 text-slate-900"><?php echo e($pendingMeetings); ?></span>
                            <?php endif; ?>
                        </a>
                        <a href="<?php echo e(route('admin.expenses.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.expenses.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>Expenses</a>
                    </div>
                </div>

                <?php $configGroupActive = request()->routeIs('admin.settings.*'); ?>
                <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="configuration" data-open="<?php echo e($configGroupActive ? 1 : 0); ?>">
                    <button type="button" class="admin-nav-toggle aside-link w-full flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($configGroupActive ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800 transition-colors'); ?>">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="admin-link-label">Configuration</span>
                        </span>
                        <svg class="admin-nav-chevron w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="admin-nav-submenu space-y-1 mt-1">
                        <a href="<?php echo e(route('admin.settings.index')); ?>" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.settings.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800 transition-colors'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Settings</a>
                        <a href="<?php echo e(route('home')); ?>" target="_blank" class="admin-sub-link aside-link flex items-center gap-3 pl-11 pr-4 py-2 rounded-lg text-sm text-slate-500 hover:text-white hover:bg-slate-800 transition-colors"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>View Website</a>
                    </div>
                </div>
            </nav>

            <div class="border-t border-slate-800 p-3">
                <form method="POST" action="<?php echo e(route('logout')); ?>" data-confirm="Are you sure you want to logout?" data-confirm-button="Yes, Logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="aside-link w-full flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span class="admin-link-label">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            <header class="sticky top-0 z-20 bg-white border-b border-slate-200 h-16 flex items-center justify-between px-4 sm:px-6">
                <div class="flex items-center gap-3">
                    <button type="button" data-mobile-admin-toggle class="lg:hidden p-2 rounded-lg hover:bg-slate-100" aria-label="Toggle sidebar">
                        <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>

                    <button type="button" data-sidebar-collapse class="admin-collapse-btn hidden lg:inline-flex p-2 rounded-lg hover:bg-slate-100" aria-label="Collapse sidebar" title="Collapse sidebar">
                        <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
                    </button>

                    <div class="hidden sm:block">
                        <p class="text-sm font-semibold text-slate-800">Welcome, <?php echo e(auth()->user()->name); ?></p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                <div class="flex items-center gap-1">
                    <a href="<?php echo e(route('admin.meetings.index')); ?>" class="relative p-2 rounded-lg hover:bg-slate-100 transition-colors" title="Pending meetings" aria-label="Pending meetings">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <?php if($pendingMeetings > 0): ?>
                            <span class="admin-badge absolute -top-1 -right-1 inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-amber-500 text-slate-900"><?php echo e($pendingMeetings); ?></span>
                        <?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('admin.messages.index')); ?>" class="relative p-2 rounded-lg hover:bg-slate-100 transition-colors" title="Unread messages" aria-label="Unread messages">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        <?php if($unread > 0): ?>
                            <span class="admin-badge absolute -top-1 -right-1 inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-red-500 text-white"><?php echo e($unread); ?></span>
                        <?php endif; ?>
                    </a>
                </div>

                <div class="relative" data-user-menu>
                    <button type="button" data-user-menu-toggle class="flex items-center gap-2.5 pl-2 pr-1 py-1.5 rounded-lg hover:bg-slate-100 transition-colors">
                        <?php if($adminAvatar): ?>
                            <img src="<?php echo e(asset('storage/' . $adminAvatar)); ?>" alt="<?php echo e(auth()->user()->name); ?>" class="w-9 h-9 rounded-full object-cover">
                        <?php else: ?>
                            <div class="w-9 h-9 rounded-full bg-indigo-600 flex items-center justify-center text-white font-semibold text-sm uppercase">
                                <?php echo e(substr(auth()->user()->name, 0, 1)); ?>

                            </div>
                        <?php endif; ?>
                        <div class="hidden sm:block text-left">
                            <p class="text-sm font-medium text-slate-800 leading-tight"><?php echo e(auth()->user()->name); ?></p>
                            <p class="text-xs text-slate-500 leading-tight"><?php echo e(auth()->user()->email); ?></p>
                        </div>
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <div data-user-menu-dropdown class="hidden absolute right-0 mt-2 w-60 bg-white rounded-xl border border-slate-200 shadow-lg py-1.5">
                        <p class="px-4 py-2 text-sm text-slate-600 sm:hidden"><?php echo e(auth()->user()->name); ?> · <?php echo e(auth()->user()->email); ?></p>
                        <a href="<?php echo e(route('admin.profile.edit')); ?>" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            My Profile
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Logout
                            </button>
                        </form>
                        <?php if(auth()->user()->last_login_at): ?>
                            <div class="px-4 py-2.5 border-t border-slate-100">
                                <p class="text-xs text-slate-400 font-medium">Last Login</p>
                                <p class="text-sm font-semibold text-slate-700"><?php echo e(auth()->user()->last_login_at->format('M d, Y h:i A')); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                </div>
            </header>

            <div data-mobile-admin-sidebar class="hidden fixed inset-0 z-40 lg:hidden">
                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" data-mobile-admin-close></div>
                <div class="absolute inset-y-0 left-0 w-64 bg-slate-900 flex flex-col overflow-y-auto">
                    <div class="flex items-center justify-between px-6 py-5 border-b border-slate-800">
                        <div class="flex items-center gap-3">
                            <?php if($adminSignature): ?>
                                <img src="<?php echo e(asset('storage/' . $adminSignature)); ?>" alt="Admin Panel" class="h-8 w-auto object-contain shrink-0 drop-shadow">
                            <?php else: ?>
                                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h6v16H5a1 1 0 01-1-1V5zM15 4h5v5h-5V4zM15 15h5v5h-5v-5z"/></svg>
                                </div>
                            <?php endif; ?>
                            <p class="text-white font-semibold text-sm">Admin Panel</p>
                        </div>
                        <button type="button" class="p-2 text-slate-400 hover:text-white" data-mobile-admin-close aria-label="Close menu">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                    <nav class="py-4 px-3 space-y-1 flex-1">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">Dashboard</a>
                        <a href="<?php echo e(route('admin.profile.edit')); ?>" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.profile.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">Profile</a>
                        <a href="<?php echo e(route('admin.messages.index')); ?>" class="flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.messages.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">Messages</a>
                        <a href="<?php echo e(route('admin.newsletter.index')); ?>" class="flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e(request()->routeIs('admin.newsletter.*') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">Newsletter</a>

                        <?php $contentGroupActiveM = request()->routeIs('admin.skills.*') || request()->routeIs('admin.experiences.*') || request()->routeIs('admin.projects.*') || request()->routeIs('admin.services.*') || request()->routeIs('admin.testimonials.*'); ?>
                        <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="m-content" data-open="<?php echo e($contentGroupActiveM ? 1 : 0); ?>">
                            <button type="button" class="admin-nav-toggle w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($contentGroupActiveM ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">
                                <span>Content</span>
                                <svg class="admin-nav-chevron w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="admin-nav-submenu space-y-1 mt-1">
                                <a href="<?php echo e(route('admin.skills.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.skills.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>Skills</a>
                                <a href="<?php echo e(route('admin.experiences.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.experiences.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>Experience</a>
                                <a href="<?php echo e(route('admin.projects.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.projects.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/></svg>Projects</a>
                                <a href="<?php echo e(route('admin.services.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.services.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/></svg>Services</a>
                                <a href="<?php echo e(route('admin.testimonials.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.testimonials.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>Testimonials</a>
                            </div>
                        </div>

                        <?php $pagesGroupActiveM = request()->routeIs('admin.posts.*') || request()->routeIs('admin.faqs.*') || request()->routeIs('admin.pages.*'); ?>
                        <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="m-pages" data-open="<?php echo e($pagesGroupActiveM ? 1 : 0); ?>">
                            <button type="button" class="admin-nav-toggle w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($pagesGroupActiveM ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">
                                <span>Pages</span>
                                <svg class="admin-nav-chevron w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="admin-nav-submenu space-y-1 mt-1">
                                <a href="<?php echo e(route('admin.posts.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.posts.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2zm4-14v6m0 0l-2-2m2 2l2-2"/></svg>Blog Posts</a>
                                <a href="<?php echo e(route('admin.faqs.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.faqs.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>FAQ</a>
                                <a href="<?php echo e(route('admin.pages.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.pages.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>Pages</a>
                            </div>
                        </div>

                        <?php $businessGroupActiveM = request()->routeIs('admin.clients.*') || request()->routeIs('admin.meetings.*') || request()->routeIs('admin.expenses.*'); ?>
                        <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="m-business" data-open="<?php echo e($businessGroupActiveM ? 1 : 0); ?>">
                            <button type="button" class="admin-nav-toggle w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($businessGroupActiveM ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">
                                <span>Business</span>
                                <svg class="admin-nav-chevron w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="admin-nav-submenu space-y-1 mt-1">
                                <a href="<?php echo e(route('admin.clients.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.clients.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>Clients</a>
                                <a href="<?php echo e(route('admin.meetings.index')); ?>" class="admin-sub-link flex items-center justify-between pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.meetings.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>">
                                    <span class="flex items-center gap-3"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><span>Meetings</span></span>
                                    <?php if($pendingMeetings > 0): ?>
                                        <span class="admin-badge inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full text-xs font-bold bg-amber-500 text-slate-900"><?php echo e($pendingMeetings); ?></span>
                                    <?php endif; ?>
                                </a>
                                <a href="<?php echo e(route('admin.expenses.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.expenses.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>Expenses</a>
                            </div>
                        </div>

                        <?php $settingsGroupActiveM = request()->routeIs('admin.settings.*'); ?>
                        <div class="admin-nav-group" data-admin-nav-group data-admin-nav-id="m-configuration" data-open="<?php echo e($settingsGroupActiveM ? 1 : 0); ?>">
                            <button type="button" class="admin-nav-toggle w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium <?php echo e($settingsGroupActiveM ? 'text-white' : 'text-slate-400 hover:text-white hover:bg-slate-800'); ?>">
                                <span>Configuration</span>
                                <svg class="admin-nav-chevron w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="admin-nav-submenu space-y-1 mt-1">
                                <a href="<?php echo e(route('admin.settings.index')); ?>" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm <?php echo e(request()->routeIs('admin.settings.*') ? 'bg-indigo-600 text-white' : 'text-slate-500 hover:text-white hover:bg-slate-800'); ?>"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Settings</a>
                                <a href="<?php echo e(route('home')); ?>" target="_blank" class="admin-sub-link flex items-center gap-3 pl-6 pr-4 py-2 rounded-lg text-sm text-slate-500 hover:text-white hover:bg-slate-800"><svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>View Website</a>
                            </div>
                        </div>
                    </nav>
                    <div class="border-t border-slate-800 p-3">
                        <form method="POST" action="<?php echo e(route('logout')); ?>" data-confirm="Are you sure you want to logout?" data-confirm-button="Yes, Logout">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <main class="flex-1 p-6 sm:p-8">
                <?php if($errors->any()): ?>
                    <div class="mb-6 flex items-center justify-between gap-4 p-4 rounded-lg bg-red-50 border border-red-200 text-red-700" data-alert>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-sm font-medium">Please fix the errors below and try again.</span>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700" data-alert-close aria-label="Close">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginal7635eeba332b28e6a528a2b1930b6e7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7635eeba332b28e6a528a2b1930b6e7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bootstrap.toasts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bootstrap.toasts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7635eeba332b28e6a528a2b1930b6e7c)): ?>
<?php $attributes = $__attributesOriginal7635eeba332b28e6a528a2b1930b6e7c; ?>
<?php unset($__attributesOriginal7635eeba332b28e6a528a2b1930b6e7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7635eeba332b28e6a528a2b1930b6e7c)): ?>
<?php $component = $__componentOriginal7635eeba332b28e6a528a2b1930b6e7c; ?>
<?php unset($__componentOriginal7635eeba332b28e6a528a2b1930b6e7c); ?>
<?php endif; ?>

    <div data-confirm-modal class="hidden fixed inset-0 z-[60] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/60" data-confirm-modal-close></div>
        <div class="relative w-full max-w-sm bg-white rounded-2xl shadow-2xl overflow-hidden animate-zoom-in">
            <div class="flex flex-col items-center px-8 pt-9 pb-6 text-center">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Are you sure?</h3>
                <p class="text-sm text-slate-500" data-confirm-message>This action cannot be undone.</p>
            </div>
            <div class="flex border-t border-slate-100">
                <button type="button" data-confirm-modal-cancel class="flex-1 py-3.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors border-r border-slate-100">Cancel</button>
                <button type="button" data-confirm-modal-submit class="flex-1 py-3.5 text-sm font-semibold text-red-600 hover:bg-red-50 transition-colors">Yes, Delete</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

            const mobileToggle = document.querySelector('[data-mobile-admin-toggle]');
            const mobileSidebar = document.querySelector('[data-mobile-admin-sidebar]');
            const closeButtons = document.querySelectorAll('[data-mobile-admin-close]');

            const toggleSidebar = () => mobileSidebar?.classList.toggle('hidden');
            if (mobileToggle) mobileToggle.addEventListener('click', toggleSidebar);
            closeButtons.forEach(btn => btn.addEventListener('click', () => mobileSidebar?.classList.add('hidden')));

            const userMenuToggle = document.querySelector('[data-user-menu-toggle]');
            const userMenuDropdown = document.querySelector('[data-user-menu-dropdown]');
            if (userMenuToggle && userMenuDropdown) {
                userMenuToggle.addEventListener('click', (e) => {
                    e.stopPropagation();
                    userMenuDropdown.classList.toggle('hidden');
                });
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('[data-user-menu]')) userMenuDropdown.classList.add('hidden');
                });
            }

            document.querySelectorAll('form[data-submitting]').forEach(form => {
                form.addEventListener('submit', () => {
                    form.querySelectorAll('[type="submit"]').forEach(btn => {
                        const label = btn.querySelector('[data-submit-label]');
                        const spinner = btn.querySelector('[data-submit-spinner]');
                        btn.disabled = true;
                        if (label) label.textContent = 'Submitting...';
                        if (spinner) spinner.classList.remove('hidden');
                    });
                });
            });

            document.querySelectorAll('[data-alert-close]').forEach(btn => {
                btn.addEventListener('click', () => btn.closest('[data-alert]')?.remove());
            });

            document.querySelectorAll('[data-alert]').forEach(el => {
                setTimeout(() => {
                    el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(-4px)';
                    setTimeout(() => el.remove(), 400);
                }, 3000);
            });

            const applyCollapse = (collapsed) => {
                document.body.classList.toggle('sidebar-collapsed', collapsed);
                localStorage.setItem('admin-sidebar-collapsed', collapsed ? '1' : '0');
            };
            const sidebarToggle = document.querySelector('[data-sidebar-collapse]');
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', () => {
                    applyCollapse(!document.body.classList.contains('sidebar-collapsed'));
                });
                applyCollapse(localStorage.getItem('admin-sidebar-collapsed') === '1');
            }

            const openGroup = (group, id) => {
                group.classList.add('open');
                localStorage.setItem('admin-nav-open-' + id, '1');
            };
            const closeGroup = (group, id, clearStorage = true) => {
                group.classList.remove('open');
                if (clearStorage && id) localStorage.removeItem('admin-nav-open-' + id);
            };
            const closeGroups = (groups, except) => {
                groups.forEach(g => {
                    if (g !== except) closeGroup(g, g.dataset.adminNavId);
                });
            };

            document.querySelectorAll('nav').forEach(nav => {
                const groups = Array.from(nav.querySelectorAll('[data-admin-nav-group]'));
                groups.forEach(group => {
                    const toggle = group.querySelector('.admin-nav-toggle');
                    if (!toggle) return;
                    const id = group.dataset.adminNavId;
                    if (localStorage.getItem('admin-nav-open-' + id) === '1') {
                        group.classList.add('open');
                    }
                    toggle.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (document.body.classList.contains('sidebar-collapsed')) {
                            applyCollapse(false);
                            closeGroups(groups, group);
                            openGroup(group, id);
                            return;
                        }
                        if (group.classList.contains('open')) {
                            closeGroup(group, id);
                        } else {
                            closeGroups(groups, group);
                            openGroup(group, id);
                        }
                    });
                });
                const active = groups.find(g => g.dataset.open === '1');
                groups.forEach(g => {
                    if (g === active) {
                        openGroup(g, g.dataset.adminNavId);
                    } else {
                        g.classList.remove('open');
                        localStorage.removeItem('admin-nav-open-' + g.dataset.adminNavId);
                    }
                });
            });

            async function loadAdminList(url) {
                const content = document.querySelector('[data-ajax-content]');
                if (!content || content.dataset.loading === '1') return;
                content.dataset.loading = '1';
                content.classList.add('opacity-50', 'pointer-events-none');
                try {
                    const response = await fetch(url, {
                        headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                    });
                    if (!response.ok) { window.location.href = url; return; }
                    const html = await response.text();
                    const holder = document.createElement('div');
                    holder.innerHTML = html;
                    const fresh = holder.querySelector('[data-ajax-content]');
                    content.outerHTML = fresh ? fresh.outerHTML : html;
                } catch (e) {
                    window.location.href = url;
                } finally {
content.classList.remove('opacity-50', 'pointer-events-none');
                delete content.dataset.loading;
                }
            }

            const listForm = document.querySelector('[data-ajax-form]');
            if (listForm) {
                let timer;
                const applyFilters = () => {
                    const url = new URL(window.location.origin + window.location.pathname);
                    new FormData(listForm).forEach((value, key) => {
                        if (value !== '') url.searchParams.set(key, value);
                    });
                    url.searchParams.delete('page');
                    loadAdminList(url.toString());
                };
                const searchInput = listForm.querySelector('[data-ajax-search]');
                if (searchInput) {
                    searchInput.addEventListener('input', () => {
                        clearTimeout(timer);
                        timer = setTimeout(applyFilters, 350);
                    });
                }
                listForm.querySelectorAll('select').forEach(select => {
                    select.addEventListener('change', () => { clearTimeout(timer); applyFilters(); });
                });
                listForm.addEventListener('submit', (e) => { e.preventDefault(); clearTimeout(timer); applyFilters(); });
            }

            document.addEventListener('click', (e) => {
                const clear = e.target.closest('[data-ajax-clear]');
                if (clear) { e.preventDefault(); loadAdminList(clear.href); return; }
                const pageLink = e.target.closest('[data-ajax-pagination] a[href]');
                if (pageLink) { e.preventDefault(); loadAdminList(pageLink.href); }
            });

            let pendingForm = null;
            const confirmModal = document.querySelector('[data-confirm-modal]');
            const confirmMessage = confirmModal?.querySelector('[data-confirm-message]');
            const confirmSubmit = confirmModal?.querySelector('[data-confirm-modal-submit]');

            document.addEventListener('submit', (e) => {
                const form = e.target;
                if (!form.matches('[data-confirm]')) return;

                e.preventDefault();
                pendingForm = form;
                if (confirmMessage) confirmMessage.textContent = form.dataset.confirm;
                if (confirmSubmit) confirmSubmit.textContent = form.dataset.confirmButton || 'Yes, Delete';
                confirmModal?.classList.remove('hidden');
            });

            const closeConfirmModal = () => {
                confirmModal?.classList.add('hidden');
                pendingForm = null;
            };
            confirmModal?.querySelectorAll('[data-confirm-modal-close], [data-confirm-modal-cancel]')
                .forEach(el => el.addEventListener('click', closeConfirmModal));
            confirmModal?.querySelector('[data-confirm-modal-submit]')?.addEventListener('click', () => {
                if (!pendingForm) return;
                confirmModal?.classList.add('hidden');
                const form = pendingForm;
                pendingForm = null;

                if (form.matches('[data-delete-ajax]')) {
                    fetch(form.action, {
                        method: 'DELETE',
                        headers: { 'X-CSRF-TOKEN': csrfToken, 'Accept': 'application/json' }
                    }).then(response => {
                        if (response.ok) {
                            form.closest('.flex')?.remove();
                            if (!document.querySelector('[data-delete-ajax]')) window.location.reload();
                        }
                    });
                    return;
                }

                form.submit();
            });

            document.querySelectorAll('[data-quick-toggle]').forEach(form => {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    fetch(form.action, {
                        method: 'PATCH',
                        headers: { 'X-CSRF-TOKEN': csrfToken, 'Accept': 'application/json' }
                    }).then(response => response.json()).then((data) => {
                        if (data && data.success) window.location.reload();
                    }).catch(() => form.submit());
                });
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo $__env->make('components.inline-validation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/layouts/admin.blade.php ENDPATH**/ ?>