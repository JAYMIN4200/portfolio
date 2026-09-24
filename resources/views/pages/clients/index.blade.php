@extends('layouts.frontend')

@section('title', 'Clients')

@section('meta_description', 'A selection of clients I have had the pleasure of building for.')

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-20">
        <x-frontend.section-header
            badge="Clients"
            title="People I've built for"
            subtitle="A few of the clients and partners I've had the pleasure of working with."
        />

        @if ($clients->isEmpty())
            <div class="text-center py-20">
                <p class="text-slate-500">No clients to show just yet. Check back soon!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-stagger>
                @foreach ($clients as $client)
                    <div class="tilt-card glass-card rounded-2xl p-6 flex flex-col">
                        <div class="flex items-start justify-between gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-indigo-500/25 shrink-0">
                                {{ strtoupper(substr($client->company ?: $client->name, 0, 1)) }}
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                Active
                            </span>
                        </div>

                        <h3 class="text-white font-semibold text-lg mb-1">{{ $client->company ?: $client->name }}</h3>
                        @if ($client->company && $client->name !== $client->company)
                            <p class="text-slate-500 text-sm mb-4">
                                <span class="text-slate-400">{{ $client->name }}</span>
                            </p>
                        @endif

                        @if ($client->project_type)
                            <p class="text-sm text-slate-400 leading-relaxed mb-4 flex-1">
                                <span class="text-slate-500">Project:</span> {{ $client->project_type }}
                            </p>
                        @else
                            <p class="text-sm text-slate-500 mb-4 flex-1">Project details on request.</p>
                        @endif

                        <div class="pt-4 border-t border-white/5">
                            @if ($client->email)
                                <a href="mailto:{{ $client->email }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Say hello
                                </a>
                            @else
                                <span class="text-xs text-slate-500">Client since {{ $client->created_at?->format('M Y') ?? '—' }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                <x-pagination :paginator="$clients" />
            </div>
        @endif
    </section>

@endsection