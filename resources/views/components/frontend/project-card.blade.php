@props(['project'])

<article class="glass-card rounded-xl overflow-hidden group flex flex-col h-full hover-run-border" data-reveal="up">
    <div class="relative overflow-hidden aspect-video">
        <img src="{{ $project->imageUrl() }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">

        @if ($project->is_featured)
            <span class="absolute top-3 left-3 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-400 text-slate-900 shadow-lg">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Featured
            </span>
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-5 gap-3">
            @if ($project->live_url)
                <a href="{{ $project->live_url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-white text-slate-900 text-sm font-semibold hover:bg-slate-200 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Live Demo
                </a>
            @endif
            @if ($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-slate-900/90 text-white text-sm font-semibold hover:bg-slate-800 transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    Code
                </a>
            @endif
        </div>
    </div>

    <div class="p-6 flex flex-col flex-1">
        <h3 class="text-white font-semibold text-lg mb-2">
            <a href="{{ route('projects.show', $project) }}" class="hover:text-primary-300 transition-colors">{{ $project->title }}</a>
        </h3>
        <p class="text-slate-400 text-sm leading-relaxed flex-1">{{ $project->description }}</p>

        @if ($project->technologies)
            <div class="flex flex-wrap gap-2 mt-4">
                @foreach (collect($project->technologies)->take(4) as $tech)
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-primary-500/10 text-primary-400 border border-primary-500/20">{{ $tech }}</span>
                @endforeach
                @if (count($project->technologies) > 4)
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-white/5 text-slate-400">+{{ count($project->technologies) - 4 }} more</span>
                @endif
            </div>
        @endif

        <a href="{{ route('projects.show', $project) }}" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">
            View Details
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M6 12h12"/></svg>
        </a>
    </div>
</article>