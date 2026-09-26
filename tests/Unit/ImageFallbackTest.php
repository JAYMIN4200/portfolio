<?php

namespace Tests\Unit;

use App\Models\Experience;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Support\Media;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ImageFallbackTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
        Media::flush();
    }

    /**
     * Write a file to the faked public disk and clear the memoized
     * existence checks, simulating a fresh request after an upload.
     */
    private function storePublicFile(string $path, string $contents = 'binary'): void
    {
        Storage::disk('public')->put($path, $contents);
        Media::flush();
    }

    public function test_avatar_falls_back_to_the_default_image_when_no_path_is_set(): void
    {
        $profile = new Profile;

        $this->assertSame(asset('images/default-avatar.svg'), $profile->avatarUrl());
    }

    public function test_avatar_falls_back_when_the_stored_file_is_missing_from_disk(): void
    {
        $profile = new Profile(['avatar' => 'avatars/deleted-by-hand.png']);

        $this->assertFalse(Storage::disk('public')->exists('avatars/deleted-by-hand.png'));
        $this->assertSame(asset('images/default-avatar.svg'), $profile->avatarUrl());
    }

    public function test_avatar_resolves_to_the_stored_file_when_it_exists(): void
    {
        $this->storePublicFile('avatars/me.png');

        $profile = new Profile(['avatar' => 'avatars/me.png']);

        $this->assertSame(asset('storage/avatars/me.png'), $profile->avatarUrl());
    }

    public function test_about_image_falls_back_to_the_avatar_before_the_default(): void
    {
        $this->storePublicFile('avatars/me.png');

        $profile = new Profile([
            'avatar' => 'avatars/me.png',
            'about_image' => 'avatars/missing.png',
        ]);

        $this->assertSame(asset('storage/avatars/me.png'), $profile->aboutImageUrl());
    }

    public function test_about_image_falls_back_to_the_placeholder_when_nothing_exists(): void
    {
        $profile = new Profile;

        $this->assertSame(asset('images/default-profile.svg'), $profile->aboutImageUrl());
    }

    public function test_home_about_image_prefers_its_own_file_then_the_avatar(): void
    {
        $this->storePublicFile('avatars/me.png');

        $profile = new Profile(['avatar' => 'avatars/me.png']);
        $this->assertSame(asset('storage/avatars/me.png'), $profile->homeAboutImageUrl());

        $this->storePublicFile('avatars/home.png');
        $profile = new Profile([
            'avatar' => 'avatars/me.png',
            'home_about_image' => 'avatars/home.png',
        ]);
        $this->assertSame(asset('storage/avatars/home.png'), $profile->homeAboutImageUrl());
    }

    public function test_testimonial_avatar_falls_back_to_the_default_image(): void
    {
        $this->assertSame(asset('images/default-avatar.svg'), (new Testimonial)->avatarUrl());

        $this->storePublicFile('testimonials/jane.png');
        $testimonial = new Testimonial(['avatar' => 'testimonials/jane.png']);

        $this->assertSame(asset('storage/testimonials/jane.png'), $testimonial->avatarUrl());
    }

    public function test_resume_is_only_reported_when_the_file_exists(): void
    {
        $profile = new Profile(['resume_path' => 'resumes/cv.pdf']);
        $this->assertFalse($profile->hasResume());
        $this->assertNull($profile->resumeUrl());

        $this->storePublicFile('resumes/cv.pdf', '%PDF');

        $profile = new Profile(['resume_path' => 'resumes/cv.pdf']);
        $this->assertTrue($profile->hasResume());
        $this->assertSame(asset('storage/resumes/cv.pdf'), $profile->resumeUrl());
    }

    public function test_setting_image_url_is_null_when_the_file_is_missing(): void
    {
        Cache::spy();

        $this->assertNull(Setting::imageUrl('signature_image'));
    }

    public function test_first_url_falls_back_to_the_placeholder_and_can_opt_out(): void
    {
        $this->assertSame(
            asset('images/default-avatar.svg'),
            Media::firstUrl([null, '', 'avatars/gone.png']),
        );

        $this->assertNull(Media::firstUrl([null, 'avatars/gone.png'], null));

        $this->storePublicFile('avatars/real.png');
        $this->assertSame(
            asset('storage/avatars/real.png'),
            Media::firstUrl([null, 'avatars/gone.png', 'avatars/real.png']),
        );
    }

    public function test_project_image_url_falls_back_to_the_placeholder(): void
    {
        $this->assertSame(asset('images/default-profile.svg'), (new Project)->imageUrl());
        $this->assertSame(
            asset('images/default-profile.svg'),
            (new Project(['image' => 'projects/gone.svg']))->imageUrl(),
        );

        $this->storePublicFile('projects/portfolio.svg', '<svg/>');

        $this->assertSame(
            asset('storage/projects/portfolio.svg'),
            (new Project(['image' => 'projects/portfolio.svg']))->imageUrl(),
        );
    }

    public function test_experience_logo_url_is_null_when_the_file_is_missing(): void
    {
        $this->assertNull((new Experience(['logo' => 'logos/gone.png']))->logoUrl());

        $this->storePublicFile('logos/acme.png', 'binary');

        $this->assertSame(
            asset('storage/logos/acme.png'),
            (new Experience(['logo' => 'logos/acme.png']))->logoUrl(),
        );
    }

    public function test_post_image_url_is_null_when_the_file_is_missing(): void
    {
        $this->assertNull((new Post(['image' => 'posts/gone.png']))->imageUrl());

        $this->storePublicFile('posts/hello.png', 'binary');

        $this->assertSame(
            asset('storage/posts/hello.png'),
            (new Post(['image' => 'posts/hello.png']))->imageUrl(),
        );
    }
}
