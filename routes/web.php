<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ClientController as FrontendClientController;
use App\Http\Controllers\Frontend\FaqController as FrontendFaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MeetingController as FrontendMeetingController;
use App\Http\Controllers\Frontend\NewsletterController as FrontendNewsletterController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Frontend\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/resume', [HomeController::class, 'downloadResume'])->name('resume.download');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/clients', [FrontendClientController::class, 'index'])->name('clients.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
Route::post('/newsletter/subscribe', [FrontendNewsletterController::class, 'store'])->name('newsletter.subscribe');
Route::get('/blog', [FrontendPostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [FrontendPostController::class, 'show'])->name('blog.show');
Route::get('/faq', [FrontendFaqController::class, 'index'])->name('faq');
Route::get('/book-meeting', [FrontendMeetingController::class, 'index'])->name('meetings.book');
Route::post('/book-meeting', [FrontendMeetingController::class, 'store'])->name('meetings.request');
Route::get('/pages/{page:slug}', [FrontendPageController::class, 'show'])->name('pages.show');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::resource('skills', SkillController::class);
        Route::resource('experiences', ExperienceController::class);
        Route::resource('expenses', ExpenseController::class)->except(['show']);
        Route::resource('meetings', MeetingController::class);
        Route::resource('clients', ClientController::class)->except(['show']);
        Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
        Route::patch('/projects/{project}/featured', [App\Http\Controllers\Admin\ProjectController::class, 'toggleFeatured'])->name('projects.toggle-featured');
        Route::resource('services', ServiceController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('posts', PostController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('pages', PageController::class);

        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
        Route::patch('/messages/{message}/toggle-read', [MessageController::class, 'markAsRead'])
            ->name('messages.toggle-read');

        Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
        Route::delete('/newsletter/{subscriber}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');

        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
