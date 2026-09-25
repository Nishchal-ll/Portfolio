<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $project->title }} - Project Details | {{ $formattedName }}</title>
    <meta name="description" content="{{ Str::limit(strip_tags($project->description), 160) }}">
    <meta name="keywords" content="{{ $project->title }}, {{ implode(', ', $project->technologies ?? []) }}, {{ $formattedName }}, Golang Developer, Software Developer">
    <meta name="author" content="{{ $formattedName }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $project->title }} | {{ $formattedName }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($project->description), 160) }}">
    @if($project->cover_image_url)
    <meta property="og:image" content="{{ $project->cover_image_url }}">
    @else
    <meta property="og:image" content="{{ $appUrl }}/me1.webp">
    @endif

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{{ $project->title }} | {{ $formattedName }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($project->description), 160) }}">
    @if($project->cover_image_url)
    <meta name="twitter:image" content="{{ $project->cover_image_url }}">
    @else
    <meta name="twitter:image" content="{{ $appUrl }}/me1.webp">
    @endif

    <!-- JSON-LD Structured Data Schema -->
    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="icon" type="image/png" href="/me1.png">

    <!-- Preconnect for fonts & icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Google Fonts (Optimized) -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Devicon & FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <!-- Tailwind Config & Deferred JIT Script -->
    <script>
        window.tailwind = {
            config: {
                theme: {
                    extend: {
                        colors: {
                            accent: '#22c55e',
                            'accent-bright': '#4ade80',
                            'accent-dim': '#16a34a',
                            'accent-glow': 'rgba(34, 197, 94, 0.08)',
                            golang: '#00ADD8',
                        },
                        fontFamily: {
                            mono: ['JetBrains Mono', 'monospace'],
                            sans: ['Space Grotesk', 'sans-serif'],
                        }
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-[#fafafa] text-slate-800 antialiased selection:bg-accent/20 selection:text-emerald-900 font-sans min-h-screen relative">

    <!-- Subtle Background Grid -->
    <div class="grid-bg"></div>

    <!-- Top micro status bar -->
    <div class="fixed top-0 left-0 right-0 z-50 select-none border-b border-slate-200/80 bg-slate-50/95 font-mono text-xs backdrop-blur-md">
        <div class="flex min-w-0 items-center justify-between gap-2 px-3 py-1.5 sm:px-6">
            <div class="flex min-w-0 items-center gap-2 text-slate-500 sm:gap-3">
                <span class="text-accent font-bold text-sm">⬡</span>
                <a href="{{ route('home') }}" class="truncate text-accent font-semibold hover:underline">nishchal@arch</a>
                <span class="text-slate-300">|</span>
                <span class="hidden sm:inline text-slate-600">project_details.sh</span>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <span class="hidden sm:inline text-accent">● online</span>
            </div>

            <div class="flex shrink-0 items-center gap-2 text-slate-500 sm:gap-4">
                <div class="hidden md:flex items-center gap-1.5">
                    <i class="fas fa-microchip text-accent"></i>
                    <span>SYS 100%</span>
                </div>
                <div class="flex items-center gap-1.5 text-slate-600 font-semibold font-mono">
                    <i class="far fa-clock text-slate-400"></i>
                    <span id="clock-time" class="text-accent">--:--:--</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Navigation Bar -->
    <nav class="fixed top-8 left-0 right-0 z-40 py-2">
        <div class="mx-auto w-full max-w-6xl px-3 sm:px-4">
            <div class="mx-auto overflow-hidden rounded-xl border border-slate-200/80 bg-white/95 font-mono shadow-sm backdrop-blur-md">
                <div class="flex min-w-0 items-center justify-between px-3 py-2 sm:px-4">
                    <a href="{{ route('home') }}#projects" class="flex items-center gap-2 text-xs text-slate-500 hover:text-accent transition-colors">
                        <i class="fas fa-arrow-left text-accent"></i>
                        <span class="font-bold text-accent">cd ..</span>
                        <span class="hidden sm:inline text-slate-400">/ projects</span>
                    </a>
                    <div class="flex items-center gap-2 sm:gap-3">
                        <a href="{{ route('home') }}" class="px-2.5 py-1 text-xs rounded-lg border border-slate-200 bg-slate-50 text-slate-700 hover:border-accent hover:text-accent transition-all">
                            ~/home
                        </a>
                        <a href="{{ route('home') }}#projects" class="px-2.5 py-1 text-xs rounded-lg border border-slate-200 bg-slate-50 text-slate-700 hover:border-accent hover:text-accent transition-all">
                            ~/projects
                        </a>
                        <a href="{{ route('home') }}#experience" class="px-2.5 py-1 text-xs rounded-lg border border-slate-200 bg-slate-50 text-slate-700 hover:border-accent hover:text-accent transition-all">
                            ~/experience
                        </a>

                        <!-- Lighter Styled CV Button -->
                        <a href="{{ $cvUrl }}" target="_blank" download class="inline-flex items-center gap-1.5 rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-3 py-1 text-xs font-bold text-emerald-700 shadow-2xs transition-all duration-200 hover:bg-emerald-500/20 hover:border-emerald-500/50 hover:text-emerald-900">
                            <i class="fas fa-download text-[10px]"></i>
                            <span>CV</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="relative z-10 mx-auto max-w-6xl px-4 pb-24 pt-28 sm:px-6 lg:px-8">

        <!-- Top Breadcrumb & Prev/Next Pagination Controls -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4 font-mono text-xs">
            <div class="flex items-center gap-2 text-slate-400 uppercase tracking-wider">
                <a href="{{ route('home') }}#projects" class="hover:text-accent transition-colors">PORTFOLIO</a>
                <span class="text-slate-300">&rarr;</span>
                <span class="text-accent font-bold">{{ strtoupper($project->slug) }}</span>
            </div>

            <div class="flex items-center gap-2">
                @if($previousProject)
                <a href="{{ route('projects.show', $previousProject->slug) }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 shadow-2xs hover:border-accent hover:text-accent transition-all">
                    <i class="fas fa-arrow-left text-[10px]"></i>
                    <span>PREVIOUS</span>
                </a>
                @else
                <span class="inline-flex items-center gap-1.5 rounded-lg border border-slate-100 bg-slate-50 px-3 py-1.5 text-xs text-slate-300 cursor-not-allowed">
                    <i class="fas fa-arrow-left text-[10px]"></i>
                    <span>PREVIOUS</span>
                </span>
                @endif

                @if($nextProject)
                <a href="{{ route('projects.show', $nextProject->slug) }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 shadow-2xs hover:border-accent hover:text-accent transition-all">
                    <span>NEXT</span>
                    <i class="fas fa-arrow-right text-[10px]"></i>
                </a>
                @else
                <span class="inline-flex items-center gap-1.5 rounded-lg border border-slate-100 bg-slate-50 px-3 py-1.5 text-xs text-slate-300 cursor-not-allowed">
                    <span>NEXT</span>
                    <i class="fas fa-arrow-right text-[10px]"></i>
                </span>
                @endif
            </div>
        </div>

        <!-- 1. MAIN COVER / FEATURED IMAGE AT TOP -->
        <div class="overflow-hidden rounded-2xl border border-slate-200/90 bg-white shadow-md mb-8">
            <!-- Terminal title bar -->
            <div class="flex items-center justify-between border-b border-slate-200/80 bg-slate-100/90 px-4 py-2.5 select-none font-mono text-xs">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500/90"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400/90"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500/90"></div>
                </div>
                <div class="flex items-center gap-2 text-slate-600 font-semibold truncate px-2">
                    <i class="fas fa-desktop text-accent"></i>
                    <span>{{ $project->slug }}_preview.png</span>
                </div>
                <div class="text-slate-400 hidden sm:block">
                    1920 &times; 1080
                </div>
            </div>

            <!-- Image View -->
            <div class="bg-slate-50 flex items-center justify-center min-h-[260px] max-h-[520px] overflow-hidden">
                @if($project->cover_image_url)
                <img src="{{ $project->cover_image_url }}" 
                     alt="{{ $project->title }} cover preview" 
                     class="w-full h-auto max-h-[520px] object-cover object-top" 
                     loading="eager" />
                @else
                <div class="p-16 text-center text-slate-400 font-mono">
                    <i class="fas fa-image text-5xl text-slate-300 mb-3 block"></i>
                    <p class="text-xs">No cover image preview uploaded</p>
                </div>
                @endif
            </div>
        </div>

        <!-- 2. TWO-COLUMN LAYOUT BELOW THE IMAGE -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT COLUMN (Project Name, Category Badge, Rich Description) -->
            <div class="lg:col-span-7 xl:col-span-8 space-y-6">

                <!-- Title & Meta Tag -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2 font-mono text-xs font-bold text-accent tracking-widest uppercase">
                        <span class="w-5 h-[2px] bg-accent"></span>
                        <span>{{ strtoupper($project->industry ?? $project->category ?? 'PROJECT OVERVIEW') }}</span>
                        @if($project->project_role)
                        <span class="text-slate-300">&bull;</span>
                        <span class="text-slate-500 font-normal">{{ $project->project_role }}</span>
                        @endif
                    </div>

                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        {{ $project->title }}
                    </h1>
                </div>

                <!-- Rich Description Content Card -->
                <div class="overflow-hidden rounded-2xl border border-slate-200/90 bg-white p-6 sm:p-8 shadow-sm">
                    <div class="prose prose-slate max-w-none text-sm sm:text-base leading-relaxed text-slate-700 space-y-4">
                        {!! $project->formatted_description !!}

                        @if($project->overview)
                        <div class="pt-2 text-slate-600 leading-relaxed text-sm sm:text-base">
                            {!! $project->overview !!}
                        </div>
                        @endif
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN (Sidebar: Technical Details Card, Tech Stack, Live/Git Links) -->
            <div class="lg:col-span-5 xl:col-span-4 space-y-6">

                <!-- 1. Technical Project Details Card -->
                <div class="rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm space-y-4">
                    <h2 class="text-sm font-bold text-slate-900 uppercase tracking-wider font-mono border-b border-slate-100 pb-3">
                        Technical Details
                    </h2>

                    <div class="space-y-3.5 text-xs sm:text-sm font-mono">
                        <!-- DOMAIN / INDUSTRY -->
                        <div class="flex items-start justify-between gap-4 border-b border-slate-100 pb-3">
                            <span class="text-slate-400 uppercase tracking-wider font-semibold">DOMAIN</span>
                            <span class="text-slate-800 font-semibold text-right">{{ $project->industry ?? ucfirst($project->category ?? 'Web Application') }}</span>
                        </div>

                        <!-- START - END DATE / TIMELINE -->
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-slate-400 uppercase tracking-wider font-semibold">DATE</span>
                            <span class="text-slate-800 font-semibold text-right">{{ $project->date_range ?? '2026' }}</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Technologies & Tools Card -->
                @if(!empty($project->tech_badges))
                <div class="rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm space-y-4 font-mono">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider">
                            Tech Stack
                        </h3>
                        <span class="text-xs text-accent font-semibold">{{ count($project->tech_badges) }} Tools</span>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-1">
                        @foreach($project->tech_badges as $tech)
                        <span class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-slate-50/80 px-3 py-2 text-xs font-semibold text-slate-800 shadow-2xs hover:border-accent hover:scale-105 transition-all">
                            <i class="{{ $tech['icon'] }} text-base"></i>
                            <span>{{ $tech['name'] }}</span>
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- 3. Action Links: Live Demo & Git Clone -->
                <div class="rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm space-y-3 font-mono">
                    <h3 class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-2">Live &amp; Code Links</h3>

                    <div class="flex flex-col gap-2.5">
                        @if($project->live_link)
                        <a href="{{ $project->live_link }}" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 rounded-xl bg-accent px-5 py-3 text-xs sm:text-sm font-bold text-slate-950 shadow-xs transition-all duration-200 hover:bg-accent-bright hover:shadow-md">
                            <i class="fas fa-external-link-alt text-xs"></i>
                            <span>Live Demo</span>
                        </a>
                        @endif

                        @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-slate-50 px-5 py-3 text-xs sm:text-sm font-bold text-slate-700 shadow-2xs transition-all duration-200 hover:border-accent hover:text-accent hover:bg-white">
                            <i class="fab fa-github text-base"></i>
                            <span>git clone</span>
                        </a>
                        @endif
                    </div>
                </div>

            </div>

        </div>

        <!-- 3. PROJECT GALLERY (At Bottom) -->
        <div class="mt-16 pt-10 border-t border-slate-200/80 space-y-6">
            
            <div class="flex flex-wrap items-end justify-between gap-4 font-mono">
                <div class="space-y-1">
                    <div class="flex items-center gap-2 text-xs font-bold text-accent uppercase tracking-widest">
                        <i class="fas fa-images text-accent"></i>
                        <span>PROJECT GALLERY</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        Screenshots &amp; Visuals
                    </h2>
                </div>
                <div class="text-xs text-slate-400">
                    Click screenshot to enlarge
                </div>
            </div>

            <!-- Gallery Grid -->
            @php
                $galleryUrls = $project->gallery_image_urls;
                if (empty($galleryUrls) && $project->cover_image_url) {
                    $galleryUrls = [$project->cover_image_url];
                }
            @endphp

            @if(!empty($galleryUrls))
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($galleryUrls as $index => $imgUrl)
                <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:border-accent hover:shadow-md"
                     onclick="openLightbox('{{ $imgUrl }}', '{{ $project->title }} - Preview {{ $index + 1 }}')">
                    
                    <!-- Chrome tab bar style header -->
                    <div class="flex items-center justify-between border-b border-slate-100 bg-slate-50 px-3.5 py-2 select-none font-mono text-[11px] text-slate-500">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-400"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-green-400"></span>
                        </div>
                        <span class="truncate px-2 font-semibold text-slate-600">screenshot_{{ $index + 1 }}.png</span>
                        <i class="fas fa-search-plus text-slate-400 group-hover:text-accent transition-colors"></i>
                    </div>

                    <!-- Image with subtle hover zoom -->
                    <div class="relative aspect-video w-full overflow-hidden bg-slate-100 flex items-center justify-center">
                        <img src="{{ $imgUrl }}" 
                             alt="{{ $project->title }} screenshot {{ $index + 1 }}" 
                             class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-105" 
                             loading="lazy" />
                        
                        <!-- Overlay on hover -->
                        <div class="absolute inset-0 bg-slate-900/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="rounded-full bg-white/95 p-3 text-slate-900 shadow-md font-bold text-xs transform translate-y-2 group-hover:translate-y-0 transition-all">
                                <i class="fas fa-expand text-accent"></i>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- Placeholder when no images are uploaded yet -->
            <div class="rounded-2xl border border-dashed border-slate-200 bg-slate-50/50 p-12 text-center text-slate-400 font-mono space-y-2">
                <i class="fas fa-image text-4xl text-slate-300"></i>
                <p class="text-xs">No gallery screenshots uploaded yet for this repository in Filament panel.</p>
            </div>
            @endif

        </div>

        <!-- Explore More Repositories Footer -->
        @if($otherProjects->count() > 0)
        <div class="mt-16 pt-10 border-t border-slate-200/80 space-y-6 font-mono">
            <div class="flex items-center justify-between">
                <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                    <i class="fas fa-code-branch text-accent"></i>
                    <span>Explore More Repositories</span>
                </h3>
                <a href="{{ route('home') }}#projects" class="text-xs text-accent hover:underline">
                    View all repos &rarr;
                </a>
            </div>

            <div class="grid gap-4 sm:grid-cols-3">
                @foreach($otherProjects as $other)
                <a href="{{ route('projects.show', $other->slug) }}" class="group block overflow-hidden rounded-xl border border-slate-200 bg-white p-4 shadow-2xs backdrop-blur transition-all duration-200 hover:-translate-y-1 hover:border-accent hover:shadow-md">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                        <span class="text-accent font-semibold">~/{{ $other->slug }}</span>
                        <i class="fas fa-chevron-right text-slate-300 group-hover:text-accent group-hover:translate-x-0.5 transition-all"></i>
                    </div>
                    <h4 class="text-sm font-bold text-slate-900 group-hover:text-accent line-clamp-1 mb-1 font-sans">
                        {{ $other->title }}
                    </h4>
                    <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed">
                        {{ strip_tags($other->description) }}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </main>

    <!-- Lightbox Modal for Gallery Images -->
    <div id="lightbox-modal" class="fixed inset-0 z-50 hidden bg-slate-950/80 backdrop-blur-sm p-4 sm:p-8 flex flex-col items-center justify-center transition-opacity duration-300" onclick="closeLightbox()">
        <div class="relative max-w-5xl w-full max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
            <!-- Close button -->
            <button onclick="closeLightbox()" class="absolute -top-10 right-0 text-slate-300 hover:text-white font-mono text-xs flex items-center gap-1.5 bg-slate-800/80 px-3 py-1 rounded-lg border border-slate-700">
                <i class="fas fa-times"></i>
                <span>ESC to Close</span>
            </button>
            <!-- Enlarged Image -->
            <div class="w-full overflow-hidden rounded-xl border border-slate-700 bg-slate-900 shadow-2xl">
                <img id="lightbox-img" src="" alt="Enlarged screenshot" class="w-full max-h-[80vh] object-contain mx-auto" />
            </div>
            <!-- Caption -->
            <div id="lightbox-caption" class="mt-3 text-xs font-mono text-slate-300 text-center"></div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // System Clock
        const clockTimeEl = document.getElementById('clock-time');
        function updateClock() {
            const now = new Date();
            if (clockTimeEl) {
                const h = now.getHours().toString().padStart(2, '0');
                const m = now.getMinutes().toString().padStart(2, '0');
                const s = now.getSeconds().toString().padStart(2, '0');
                clockTimeEl.textContent = `${h}:${m}:${s}`;
            }
        }
        updateClock();
        setInterval(updateClock, 1000);

        // Lightbox Functions
        function openLightbox(imgSrc, caption) {
            const modal = document.getElementById('lightbox-modal');
            const img = document.getElementById('lightbox-img');
            const cap = document.getElementById('lightbox-caption');
            img.src = imgSrc;
            cap.textContent = caption || '';
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>
</body>

</html>
