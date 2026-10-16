@extends('layouts.admin')
@section('title', 'Edit Post')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Post: {{ $post->title }}</h1>
    </div>

    <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\PostRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <x-form.input name="title" label="Title" required :value="$post->title" placeholder="e.g. Building REST APIs with Laravel" />

                <x-form.input name="slug" label="Slug" required :value="$post->slug" placeholder="e.g. building-rest-apis-with-laravel" />

                <x-form.textarea name="excerpt" label="Excerpt" :rows="2" :value="$post->excerpt" placeholder="A short summary shown in blog listings." />

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Content <span class="text-red-500">*</span></label>
                    <x-admin.rich-editor name="content" value="{{ old('content', $post->content) }}" id="post-content" :rows="14" />
                    @error('content') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-3 gap-5 items-end">
                    <div>
                        <x-form.field label="Featured Image" for="image" name="image">
                            @if ($postImageUrl = $post->imageUrl())
                                <div class="mb-2">
                                    <img src="{{ $postImageUrl }}" alt="{{ $post->title }}" class="w-20 h-14 rounded-lg object-cover border border-slate-200">
                                </div>
                            @endif
                            <input type="file" name="image" id="image" accept="image/*" class="form-file">
                        </x-form.field>
                    </div>
                    <div>
                        <x-form.input name="published_at" label="Publish Date" type="datetime-local" :value="$post->published_at ? $post->published_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i')" />
                    </div>
                    <div class="flex items-end pb-2.5">
                        <x-form.checkbox name="is_published" label="Published" :checked="old('is_published', $post->is_published)" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Update Post</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.posts.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection