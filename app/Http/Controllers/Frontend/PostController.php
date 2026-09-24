<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Setting;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->ordered()->paginate(6);

        return view('pages.blog.index', [
            'posts' => $posts,
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']),
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        $related = Post::published()->whereKeyNot($post->getKey())->ordered()->take(3)->get();

        return view('pages.blog.show', [
            'post' => $post,
            'related' => $related,
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'meta_keywords', 'signature_image', 'favicon']),
        ]);
    }
}
