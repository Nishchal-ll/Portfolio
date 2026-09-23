<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $formattedName }} - Golang Developer &amp; Software Engineer</title>
    <meta name="description" content="Explore the portfolio of {{ $formattedName }}, a Golang Developer and Software Engineer specializing in building scalable backend systems, high-performance microservices, Go, Laravel, and React.">
    <meta name="keywords" content="{{ $formattedName }}, Nishchal, Acharya, Golang Developer, Go Developer, Software Engineer, Backend Developer, Web Developer, Laravel, Go, React, Portfolio, Nepal, Nishchal-ll">
    <meta name="author" content="{{ $formattedName }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Open Graph / Facebook / LinkedIn / Discord -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $formattedName }} - Golang Developer &amp; Software Engineer">
    <meta property="og:description" content="Explore the portfolio of {{ $formattedName }}, a Golang Developer and Software Engineer specializing in building scalable backend systems, high-performance microservices, Go, Laravel, and React.">
    <meta property="og:image" content="{{ $appUrl }}/me1.webp">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{{ $formattedName }} - Golang Developer &amp; Software Engineer">
    <meta name="twitter:description" content="Explore the portfolio of {{ $formattedName }}, a Golang Developer and Software Engineer specializing in building scalable backend systems, high-performance microservices, Go, Laravel, and React.">
    <meta name="twitter:image" content="{{ $appUrl }}/me1.webp">

    <!-- JSON-LD Structured Data Schema Markup -->
    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="icon" type="image/png" href="/me1.png">

    <!-- Preload Critical LCP Hero Image -->
    <link rel="preload" href="/images/me.webp" as="image" type="image/webp" fetchpriority="high">

    <!-- Preconnect for external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Google Fonts with display=swap -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Asynchronous Non-blocking FontAwesome & Devicon for Tech Stack Icons -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    </noscript>

    <!-- Vite compiled optimized CSS/JS with Tailwind CDN fallback for 100% bulletproof rendering -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#22c55e',
                        'accent-bright': '#4ade80',
                        'accent-dim': '#16a34a',
                        'accent-glow': 'rgba(34, 197, 94, 0.08)',
                        golang: '#00ADD8',
                        warning: '#fbbf24',
                        purple: '#8b5cf6',
                    },
                    fontFamily: {
                        mono: ['JetBrains Mono', 'monospace'],
                        sans: ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <!-- Background grid -->
    <div class="grid-bg"></div>

    <!-- Static backdrop decoration elements (Linux + Go + Laravel + React commands in green theme, no animation) -->
    <div class="floating-container fixed inset-0 pointer-events-none hidden sm:block z-[2]">
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-white/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur left-[8%] top-[19%]">
            <i class="fas fa-terminal text-accent"></i> <span>bash 5.2</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/25 bg-emerald-50/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur left-[16%] bottom-[18%]">
            <i class="fas fa-bolt text-accent"></i> <span class="font-bold text-accent-dim">go run main.go</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-white/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur right-[10%] top-[24%]">
            <i class="fas fa-microchip text-accent"></i> <span>htop --tree</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-emerald-50/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur left-[10%] bottom-[32%]">
            <i class="fab fa-laravel text-accent"></i> <span>php artisan serve</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-white/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur right-[16%] bottom-[22%]">
            <i class="fab fa-react text-accent"></i> <span>npm run dev</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-white/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur left-[48%] top-[12%]">
            <i class="fas fa-code text-accent"></i> <span>01010011</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-emerald-50/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur right-[32%] bottom-[12%]">
            <i class="fab fa-docker text-accent"></i> <span>docker compose up</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-emerald-500/20 bg-white/70 px-3 py-1.5 font-mono text-xs text-emerald-800 shadow-xs backdrop-blur right-[24%] top-[14%]">
            <i class="fas fa-code-branch text-accent"></i> <span>git commit -m "feat"</span>
        </div>
    </div>

    <!-- Top system bar -->
    <div class="fixed top-0 left-0 right-0 z-50 select-none border-b border-slate-200/80 bg-slate-50/95 font-mono text-xs backdrop-blur">
        <div class="flex min-w-0 items-center justify-between gap-2 px-3 py-1.5 sm:px-4">
            <div class="flex min-w-0 items-center gap-2 text-slate-500 sm:gap-3">
                <span class="text-accent font-bold text-sm">⬡</span>
                <span class="truncate text-accent font-semibold">nishchal@arch</span>
                <span class="text-slate-300">|</span>
                <span class="hidden sm:inline">bash 5.2.0</span>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <span class="hidden sm:inline text-accent">● online</span>
            </div>

            <div class="flex shrink-0 items-center gap-2 text-slate-500 sm:gap-4">
                <div class="hidden md:flex items-center gap-1.5">
                    <i class="fas fa-microchip text-accent"></i>
                    <span>CPU 12%</span>
                </div>
                <div class="hidden md:flex items-center gap-1.5">
                    <span class="text-purple">▪</span>
                    <span>MEM 4.2G</span>
                </div>
                <div class="hidden sm:flex items-center gap-1.5">
                    <i class="fas fa-wifi text-accent"></i>
                    <span>connected</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <i class="fas fa-battery-three-quarters text-warning"></i>
                    <span>87%</span>
                </div>
                <div class="flex items-center gap-1.5 text-slate-600 font-semibold">
                    <i class="far fa-clock text-slate-500"></i>
                    <span id="clock-date" class="hidden sm:inline">--</span>
                    <span id="clock-time" class="text-accent">--:--:--</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle floating Navbar -->
    <nav class="fixed top-8 left-0 right-0 z-40 py-2">
        <div class="mx-auto w-full max-w-2xl px-3 sm:px-4">
            <div class="mx-auto overflow-hidden rounded-xl border border-slate-200/70 bg-white/90 font-mono shadow-sm backdrop-blur">
                <div class="flex min-w-0 items-stretch">
                    <div class="flex min-w-0 flex-1 items-center gap-2 border-r border-slate-100 px-3 py-2.5 text-slate-400 sm:flex-none sm:px-4">
                        <i class="fas fa-terminal text-accent"></i>
                        <span class="truncate text-xs text-accent">~/portfolio $</span>
                    </div>
                    <button onclick="switchTab('home')" id="nav-btn-home" class="nav-btn flex-1 border-r border-slate-100 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-600 hover:bg-slate-50 nav-active outline-none focus:outline-none ring-0 focus:ring-0">
                        Home
                    </button>
                    <button onclick="switchTab('projects')" id="nav-btn-projects" class="nav-btn flex-1 border-r border-slate-100 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-600 hover:bg-slate-50 outline-none focus:outline-none ring-0 focus:ring-0">
                        Projects
                    </button>
                    <button onclick="switchTab('contact')" id="nav-btn-contact" class="nav-btn flex-1 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-600 hover:bg-slate-50 outline-none focus:outline-none ring-0 focus:ring-0">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tabbed SPA Content Sections -->
    <main class="relative z-10 w-full min-h-screen">

        <!-- HOME TAB SECTION -->
        <div id="tab-home" class="tab-section mx-auto flex min-h-screen w-full max-w-7xl items-center px-4 pb-12 pt-32 sm:px-6 md:pt-28 lg:px-8">
            <div class="grid w-full grid-cols-1 items-center gap-8 md:grid-cols-2 lg:gap-16">
                <!-- Developer Photo (Optimized with high-priority webp) -->
                <div class="flex justify-center -translate-y-6 md:-translate-y-8">
                    <div class="relative group w-full max-w-[24rem] sm:max-w-[27rem] md:max-w-[31rem] lg:max-w-[35rem]">
                        <!-- Neon blur glow background behind developer picture -->
                        <div class="pointer-events-none absolute inset-x-[-15%] bottom-[3%] top-[5%] -z-10 rounded-full bg-lime-300/40 blur-3xl"></div>
                        <picture>
                            <source srcset="/images/me.webp" type="image/webp">
                            <source srcset="/me1.webp" type="image/webp">
                            <img src="{{ $aboutMe->image_url ?? '/images/me.jpg' }}" 
                                 alt="{{ $contactInfo->name ?? 'Nishchal Acharya' }}" 
                                 fetchpriority="high"
                                 decoding="async"
                                 width="480"
                                 height="480"
                                 class="relative z-10 mx-auto h-auto w-full object-contain" />
                        </picture>
                    </div>
                </div>

                <!-- Terminal -->
                <div>
                    <div class="w-full overflow-hidden rounded-xl border border-slate-200 bg-white/95 shadow-xl backdrop-blur">
                        <!-- Chrome bar -->
                        <div class="flex items-center justify-between border-b border-slate-200 bg-slate-100 px-4 py-2.5 select-none font-mono">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500 cursor-pointer"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400 cursor-pointer"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500 cursor-pointer"></div>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-slate-500">
                                <i class="fas fa-terminal" style="font-size: 0.65rem;"></i>
                                <span>_&gt; bash - 80x24</span>
                            </div>
                            <div class="text-xs text-slate-400 hidden sm:block">
                                pts/0
                            </div>
                        </div>
                        <!-- Body -->
                        <div class="space-y-5 px-4 py-5 sm:px-6 font-mono">
                            <div class="flex flex-wrap items-center gap-x-0 text-xs sm:text-sm">
                                <span class="text-accent font-semibold">root@nishchal</span>
                                <span class="text-slate-400">:</span>
                                <span class="text-slate-700">~</span>
                                <span class="text-slate-700">$ ./init_portfolio.sh&nbsp;</span>
                                <span class="inline-block w-2 h-[14px] bg-accent align-middle"></span>
                            </div>

                            <h1 class="text-2xl font-bold leading-tight text-slate-900 sm:text-3xl md:text-4xl">
                                <span class="text-accent">export</span> ROLE=<br />
                                <span>"{{ $aboutMe->role ?? 'Full Stack Developer' }}"</span>
                            </h1>

                            <div class="space-y-2 border-l-2 border-slate-300 pl-3 text-xs leading-relaxed text-slate-600 sm:text-sm">
                                <p><span class="text-slate-400">&gt;</span> {!! $highlightedLine1 !!}</p>
                                <p><span class="text-slate-400">&gt;</span> {{ $aboutMe->line_2 ?? 'Focusing on performance, security, and scalable architecture.' }}</p>
                                <p><span class="text-slate-400">&gt;</span> <span class="text-warning">{{ $aboutMe->line_3 ?? '// Ready to deploy solutions.' }}</span></p>
                            </div>

                            <div class="border-t border-dashed border-slate-200 pt-4">
                                <p class="mb-3 text-xs tracking-widest text-slate-400 uppercase">
                                  -- Connect [OPTIONS] --
                                </p>
                                <div class="flex flex-wrap gap-2 sm:gap-3">
                                    @foreach($socialLinks as $index => $link)
                                    <a href="{{ $link->url }}" target="_blank" class="group flex min-w-0 items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                                        @if(str_contains(strtolower($link->platform), 'github'))
                                             <i class="fab fa-github"></i>
                                            <span>git clone</span>
                                        @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                            <i class="fab fa-instagram"></i>
                                            <span>dm_me</span>
                                        @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                            <i class="fab fa-linkedin"></i>
                                            <span>connect</span>
                                        @else
                                            <i class="fas fa-link"></i>
                                            <span>{{ strtolower($link->platform) }}</span>
                                        @endif
                                        <i class="fas fa-chevron-right opacity-0 -ml-3 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" style="font-size: 0.65rem;"></i>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECTS TAB SECTION -->
        <div id="tab-projects" class="tab-section mx-auto max-w-7xl px-4 pb-20 pt-36 sm:px-6 lg:px-8 hidden">
            <!-- Terminal Header -->
            <div class="max-w-6xl mx-auto mb-10">
                <div class="overflow-hidden rounded-xl border border-slate-200 bg-white/95 shadow-lg backdrop-blur">
                    <div class="flex items-center justify-between border-b border-slate-200 bg-slate-100 px-4 py-2.5 select-none font-mono">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-slate-500">
                            <i class="fas fa-terminal" style="font-size: 0.65rem;"></i>
                            <span>_&gt; bash - 80x24</span>
                        </div>
                        <div class="text-xs text-slate-400 hidden sm:block">pts/1</div>
                    </div>
                    <div class="px-4 py-5 sm:px-6 font-mono">
                        <div class="mb-3 break-words text-xs sm:text-sm">
                            <span class="text-accent font-semibold">root@nishchal</span>
                            <span class="text-slate-400">:</span>
                            <span class="text-slate-700">~/projects</span>
                            <span class="text-slate-700">$ ls -la ./repos</span>
                            <span class="inline-block w-2 h-[14px] bg-accent align-middle animate-pulse ml-1"></span>
                        </div>
                        <div class="space-y-0.5 text-xs text-slate-500">
                            <p><span class="text-accent">drwxr-xr-x</span> &nbsp;nishchal &nbsp;projects/ &nbsp;<span class="text-warning">// {{ $projects->count() }} repositories found</span></p>
                            <p><span class="text-accent">&gt;</span> Listing all public repositories...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Filter Controls -->
            <div class="mx-auto max-w-6xl mb-8 flex flex-wrap items-center justify-center gap-3 font-mono">
                <button onclick="filterProjects('all')" id="btn-filter-all" class="filter-btn active-filter px-3 py-1.5 text-xs font-semibold rounded-lg border border-slate-300 bg-white text-slate-700 transition-all hover:border-accent hover:text-accent cursor-pointer">
                    ls ./all
                </button>
                <button onclick="filterProjects('freelance')" id="btn-filter-freelance" class="filter-btn px-3 py-1.5 text-xs font-semibold rounded-lg border border-slate-300 bg-white text-slate-700 transition-all hover:border-accent hover:text-accent cursor-pointer">
                    ls ./freelance
                </button>
                <button onclick="filterProjects('college')" id="btn-filter-college" class="filter-btn px-3 py-1.5 text-xs font-semibold rounded-lg border border-slate-300 bg-white text-slate-700 transition-all hover:border-accent hover:text-accent cursor-pointer">
                    ls ./college
                </button>
                <button onclick="filterProjects('self-made')" id="btn-filter-self-made" class="filter-btn px-3 py-1.5 text-xs font-semibold rounded-lg border border-slate-300 bg-white text-slate-700 transition-all hover:border-accent hover:text-accent cursor-pointer">
                    ls ./self-made
                </button>
            </div>

            <!-- Project Cards -->
            <div class="mx-auto grid max-w-6xl gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $index => $project)
                <div class="project-card overflow-hidden rounded-xl border border-slate-200 bg-white/95 shadow-md backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:shadow-xl font-mono" data-category="{{ $project->category }}">
                    <!-- Card chrome bar -->
                    <div class="flex items-center justify-between border-b border-slate-200 bg-slate-50 px-3 py-2 select-none">
                        <div class="flex items-center gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-300"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                        </div>
                        <div class="flex items-center gap-1 text-xs text-slate-400">
                            <i class="fas fa-folder" style="font-size: 0.65rem;"></i>
                            <span>repo_{{ $project->id }}.sh</span>
                        </div>
                    </div>

                    @if($project->cover_image_url)
                    <div class="relative w-full h-44 overflow-hidden border-b border-slate-200 bg-slate-100">
                        <img src="{{ $project->cover_image_url }}" 
                             alt="{{ $project->title }} cover" 
                             class="w-full h-full object-cover object-center" 
                             loading="lazy" />
                    </div>
                    @endif

                    <!-- Body -->
                    <div class="p-4 space-y-3">
                        <div>
                            <p class="mb-1 text-xs text-slate-400">
                                <span class="text-accent">$</span> cat README.md
                            </p>
                            <h3 class="text-sm font-bold leading-snug text-slate-900">
                                {{ $project->title }}
                            </h3>
                        </div>
                        <p class="line-clamp-3 border-l-2 border-slate-200 pl-2 text-xs leading-relaxed text-slate-500">
                            {!! $project->formatted_description !!}
                        </p>
                        <div>
                            <p class="mb-2 text-xs text-slate-400">
                                <span class="text-accent">$</span> cat package.json | grep tech
                            </p>
                            <div class="flex flex-wrap items-center gap-3 py-1">
                                @if(!empty($project->tech_badges))
                                    @foreach($project->tech_badges as $tech)
                                        <div class="cursor-pointer transition-transform duration-200 hover:scale-125 inline-flex items-center" title="{{ $tech['name'] }}">
                                            <i class="{{ $tech['icon'] }} text-xl sm:text-2xl leading-none"></i>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-2 mt-2">
                            @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="group flex-1 flex items-center justify-center gap-1.5 rounded-lg border border-slate-300 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                                <i class="fab fa-github"></i>
                                <span>git clone</span>
                            </a>
                            @endif
                            @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" class="group flex-1 flex items-center justify-center gap-1.5 rounded-lg border border-slate-300 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                                <i class="fas fa-external-link-alt text-accent"></i>
                                <span>live demo</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- CONTACT TAB SECTION -->
        <div id="tab-contact" class="tab-section mx-auto w-full max-w-2xl px-4 py-16 pt-36 hidden">
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white/95 shadow-xl backdrop-blur font-mono">
                <!-- Chrome bar -->
                <div class="flex items-center justify-between border-b border-slate-200 bg-slate-100 px-4 py-2.5 select-none">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs text-slate-500">
                        <i class="fas fa-terminal" style="font-size: 0.65rem;"></i>
                        <span>_&gt; bash - 80x24</span>
                    </div>
                    <div class="text-xs text-slate-400 hidden sm:block">pts/2</div>
                </div>
                <!-- Body -->
                <div class="space-y-6 px-4 py-6 sm:px-6">
                    <div class="break-words text-xs sm:text-sm">
                        <span class="text-accent font-semibold">root@nishchal</span>
                        <span class="text-slate-400">:</span>
                        <span class="text-slate-700">~/contact</span>
                        <span class="text-slate-700">$ ./reach_out.sh</span>
                        <span class="inline-block w-2 h-[14px] bg-accent align-middle animate-pulse ml-1"></span>
                    </div>

                    <div class="space-y-1 text-sm">
                        <p class="text-xs text-slate-400">
                            <span class="text-accent">$</span> whoami --contact
                        </p>
                        <h1 class="text-2xl font-bold leading-tight text-slate-900 sm:text-3xl">
                            <span class="text-accent">export</span> MSG=<br />
                            "Let's Build Something Great"
                        </h1>
                    </div>

                    <div class="space-y-1.5 border-l-2 border-slate-200 pl-3 text-xs leading-relaxed text-slate-500 sm:text-sm">
                        <p><span class="text-slate-400">&gt;</span> Whether you have a project, idea, or just want to say hello.</p>
                        <p><span class="text-slate-400">&gt;</span> I enjoy connecting, collaborating, and exploring new possibilities.</p>
                        <p><span class="text-slate-400">&gt;</span> <span class="text-warning">// Response time: usually fast, unless deep in a build.</span></p>
                    </div>

                    <div class="border-t border-dashed border-slate-200 pt-5">
                        <p class="mb-3 text-xs tracking-widest text-slate-400 uppercase">
                            -- Connect [OPTIONS] --
                        </p>
                        <div class="flex flex-wrap gap-2 sm:gap-3">
                            @foreach($socialLinks as $index => $link)
                            <a href="{{ $link->url }}" target="_blank" class="group flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                                @if(str_contains(strtolower($link->platform), 'github'))
                                    <i class="fab fa-github"></i>
                                    <span>git clone</span>
                                @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                    <i class="fab fa-instagram"></i>
                                    <span>dm_me</span>
                                @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                    <i class="fab fa-linkedin"></i>
                                    <span>connect</span>
                                @else
                                    <i class="fas fa-link"></i>
                                    <span>{{ strtolower($link->platform) }}</span>
                                @endif
                                <i class="fas fa-chevron-right opacity-0 -ml-3 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" style="font-size: 0.65rem;"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    @if($contactInfo && $contactInfo->email)
                    <div class="space-y-2 border-t border-dashed border-slate-200 pt-5">
                        <p class="text-xs tracking-widest text-slate-400 uppercase">
                            -- Mail [DIRECT] --
                        </p>
                        <a href="mailto:{{ $contactInfo->email }}" class="inline-flex max-w-full items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                            <i class="fas fa-envelope text-accent"></i>
                            <span class="break-all text-slate-700">{{ $contactInfo->email }}</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </main>

    <script>
        // ===== Clock =====
        const clockDateEl = document.getElementById('clock-date');
        const clockTimeEl = document.getElementById('clock-time');
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        
        function updateClock() {
            const now = new Date();
            if (clockDateEl) {
                clockDateEl.textContent = `${days[now.getDay()]}, ${months[now.getMonth()]} ${now.getDate()}`;
            }
            if (clockTimeEl) {
                const h = now.getHours().toString().padStart(2, '0');
                const m = now.getMinutes().toString().padStart(2, '0');
                const s = now.getSeconds().toString().padStart(2, '0');
                clockTimeEl.textContent = `${h}:${m}:${s}`;
            }
        }
        updateClock();
        setInterval(updateClock, 1000);

        // ===== Tab Switcher =====
        function switchTab(tabId) {
            document.querySelectorAll('.tab-section').forEach(sec => sec.classList.add('hidden'));
            const targetSection = document.getElementById('tab-' + tabId);
            if (targetSection) {
                targetSection.classList.remove('hidden');
            }

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('nav-active');
            });
            const activeBtn = document.getElementById('nav-btn-' + tabId);
            if (activeBtn) {
                activeBtn.classList.add('nav-active');
            }
        }

        // ===== Projects Filter =====
        function filterProjects(category) {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active-filter');
            });
            const activeFilterBtn = document.getElementById('btn-filter-' + category);
            if (activeFilterBtn) {
                activeFilterBtn.classList.add('active-filter');
            }

            document.querySelectorAll('.project-card').forEach(card => {
                const cardCat = card.getAttribute('data-category');
                card.style.display = (category === 'all' || cardCat === category) ? '' : 'none';
            });
        }
    </script>
</body>

</html>
