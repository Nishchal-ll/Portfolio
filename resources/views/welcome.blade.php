<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishchal Acharya | Full Stack Developer & Software Engineer Portfolio</title>
    <meta name="description" content="Explore the personal portfolio of Nishchal Acharya, a Full Stack Developer specializing in crafting modern, high-performance web applications using Laravel, Go, and React.">
    <meta name="keywords" content="Nishchal Acharya, Nishchal, Acharya, Full Stack Developer, Software Engineer, Web Developer, Laravel, Go, React, Portfolio, Nepal, Nishchal-ll, Robust Trade, Celtic Trekking, AutoTweet">
    <meta name="author" content="Nishchal Acharya">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://acharyanishchal.com.np">

    <!-- JSON-LD Structured Data Schema Markup (Wrapped to prevent Blade parsing issues) -->
    {!! '<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Person",
          "@id": "https://acharyanishchal.com.np/#person",
          "name": "Nishchal Acharya",
          "url": "https://acharyanishchal.com.np",
          "image": "https://acharyanishchal.com.np/me1.png",
          "jobTitle": "Full Stack Developer",
          "knowsAbout": ["Laravel", "PHP", "Go", "Golang", "React", "Next.js", "Python", "Web Development", "Software Engineering"],
          "sameAs": [
            "https://github.com/Nishchal-ll",
            "https://www.linkedin.com/in/nishchalacharyaaa/",
            "https://instagram.com/nishchal._.l"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://acharyanishchal.com.np/#website",
          "url": "https://acharyanishchal.com.np",
          "name": "Nishchal Acharya Portfolio",
          "description": "Personal Portfolio of Nishchal Acharya, Full Stack Developer & Software Engineer.",
          "publisher": {
            "@id": "https://acharyanishchal.com.np/#person"
          }
        }
      ]
    }
    </script>' !!}

    <link rel="icon" type="image/png" href="/me1.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --bg: #f8fafc;
            --bg-alt: #ffffff;
            --surface: #ffffff;
            --surface-2: #f1f5f9;
            --surface-3: #e2e8f0;
            --border: #e2e8f0;
            --border-bright: #cbd5e1;
            --fg: #0f172a;
            --fg-dim: #334155;
            --muted: #64748b;
            --accent: #22c55e;
            --accent-bright: #4ade80;
            --accent-dim: #16a34a;
            --accent-glow: rgba(34, 197, 94, 0.08);
            --warning: #fbbf24;
            --error: #ef4444;
            --info: #3b82f6;
            --purple: #8b5cf6;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            --grid-color: rgba(148, 163, 184, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--fg);
            font-family: 'Space Grotesk', system-ui, sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Accent classes explicitly declared */
        .text-accent {
            color: var(--accent) !important;
        }
        .bg-accent {
            background-color: var(--accent) !important;
        }
        .bg-accent-glow {
            background-color: var(--accent-glow) !important;
        }
        .border-accent {
            border-color: var(--accent) !important;
        }
        .border-accent-dim {
            border-color: var(--accent-dim) !important;
        }

        .mono {
            font-family: 'JetBrains Mono', monospace;
        }

        .active-filter {
            border-color: var(--accent) !important;
            background-color: var(--accent-glow) !important;
            color: var(--accent) !important;
            box-shadow: 0 0 10px rgba(34, 197, 94, 0.15);
        }

        /* Selection */
        ::selection {
            background: var(--accent);
            color: white;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-alt);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border-bright);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }

        /* Grid background */
        .grid-bg {
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(var(--grid-color) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-color) 1px, transparent 1px);
            background-size: 28px 28px;
            pointer-events: none;
            z-index: 1;
        }

        /* Matrix canvas */
        #matrix-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            opacity: 0.03;
        }

        /* Nav active class */
        .nav-active {
            color: var(--accent) !important;
            background-color: var(--accent-glow) !important;
            font-weight: 600;
        }

        /* Line clamping */
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Floating motion icons */
        .floating-container {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 1;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

    <!-- Background grid -->
    <div class="grid-bg"></div>

    <!-- Matrix rain background -->
    <canvas id="matrix-bg"></canvas>

    <!-- Floating backdrop decoration elements (Pointer Parallax) -->
    <div class="floating-container hidden sm:block">
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur left-[8%] top-[19%]" data-depth="24">
            <i class="fas fa-terminal text-accent"></i> <span>bash</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur right-[10%] top-[24%]" data-depth="-18">
            <i class="fas fa-microchip text-accent"></i> <span>htop</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur left-[12%] bottom-[18%]" data-depth="-14">
            <i class="fas fa-hdd text-accent"></i> <span>/dev/sda</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur right-[16%] bottom-[22%]" data-depth="20">
            <i class="fas fa-terminal text-accent"></i> <span>zsh</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur left-[48%] top-[12%]" data-depth="12">
            <i class="fas fa-code text-accent"></i> <span>0101</span>
        </div>
        <div class="floating-item absolute flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur right-[34%] bottom-[11%]" data-depth="-10">
            <i class="fas fa-sliders-h text-accent"></i> <span>config</span>
        </div>
    </div>

    <!-- Top system bar -->
    <div class="fixed top-0 left-0 right-0 z-50 select-none border-b border-border bg-slate-50/95 font-mono text-xs backdrop-blur">
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
            <div class="mx-auto overflow-hidden rounded-xl border border-slate-200 bg-white/90 font-mono shadow-lg backdrop-blur">
                <div class="flex min-w-0 items-stretch">
                    <div class="flex min-w-0 flex-1 items-center gap-2 border-r border-slate-200 px-3 py-2.5 text-slate-400 sm:flex-none sm:px-4">
                        <i class="fas fa-terminal text-accent"></i>
                        <span class="truncate text-xs text-accent">~/portfolio $</span>
                    </div>
                    <button onclick="switchTab('home')" id="nav-btn-home" class="nav-btn flex-1 border-r border-slate-200 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-500 hover:bg-slate-50 nav-active">
                        Home
                    </button>
                    <button onclick="switchTab('projects')" id="nav-btn-projects" class="nav-btn flex-1 border-r border-slate-200 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-500 hover:bg-slate-50">
                        Projects
                    </button>
                    <button onclick="switchTab('contact')" id="nav-btn-contact" class="nav-btn flex-1 px-2 py-2.5 text-center text-xs transition-colors duration-200 sm:flex-none sm:px-6 sm:text-sm text-slate-500 hover:bg-slate-50">
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
                <!-- Grayscale Photo (No Grayscale, Made Bigger, Placed a bit more up) -->
                <div class="flex justify-center transition-all duration-1000 transform translate-x-0 opacity-100 -translate-y-8 md:-translate-y-12">
                    <div class="relative group w-full max-w-[24rem] sm:max-w-md md:max-w-lg lg:max-w-xl">
                        <!-- Pure neon blur glow background behind developer picture -->
                        <div class="pointer-events-none absolute inset-x-[-15%] bottom-[3%] top-[5%] -z-10 rounded-full bg-lime-300/40 blur-3xl"></div>
                        <img src="{{ $aboutMe->image_url ?? '/images/me.jpg' }}" alt="{{ $contactInfo->name ?? 'Nishchal Acharya' }}" loading="lazy" class="relative z-10 mx-auto h-auto w-full object-contain" />
                    </div>
                </div>

                <!-- Terminal -->
                <div class="transition-all duration-1000 delay-300 transform translate-x-0 opacity-100">
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
                                <span class="inline-block w-2 h-[14px] bg-accent align-middle animate-pulse"></span>
                            </div>

                            <h1 class="text-2xl font-bold leading-tight text-slate-900 sm:text-3xl md:text-4xl">
                                <span class="text-accent">export</span> ROLE=<br />
                                <span>"{{ $aboutMe->role ?? 'Full Stack Developer' }}"</span>
                            </h1>

                            <div class="space-y-1.5 border-l-2 border-slate-300 pl-3 text-xs leading-relaxed text-slate-600 sm:text-sm">
                                <p><span class="text-slate-400">&gt;</span> {{ $aboutMe->line_1 ?? 'Crafting modern web applications using Golang, Laravel and React.' }}</p>
                                <p><span class="text-slate-400">&gt;</span> {{ $aboutMe->line_2 ?? 'Focusing on performance, security, and scalable architecture.' }}</p>
                                <p><span class="text-slate-400">&gt;</span> <span class="text-warning">{{ $aboutMe->line_3 ?? '// Ready to deploy solutions.' }}</span></p>
                            </div>

                            <div class="border-t border-dashed border-slate-200 pt-4">
                                <p class="mb-3 text-xs tracking-widest text-slate-400 uppercase">
                                  -- Connect [OPTIONS] --
                                </p>
                                <div class="flex flex-wrap gap-2 sm:gap-3">
                                    @foreach($socialLinks as $index => $link)
                                    <a href="{{ $link->url }}" target="_blank" class="group flex min-w-0 items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent" style="animation: float 3s ease-in-out infinite {{ $index * 0.2 }}s">
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
                <div class="project-card overflow-hidden rounded-xl border border-slate-200 bg-white/95 shadow-md backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:shadow-xl font-mono" data-category="{{ $project->category }}" style="animation: fadeInUp 0.6s ease-out {{ $index * 0.08 }}s both">
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
                            {{ $project->description }}
                        </p>
                        <div>
                            <p class="mb-1.5 text-xs text-slate-400">
                                <span class="text-accent">$</span> cat package.json | grep tech
                            </p>
                            <div class="flex flex-wrap gap-1.5">
                                @if(is_array($project->technologies))
                                    @foreach($project->technologies as $tech)
                                    <span class="rounded border border-accent/20 bg-accent-glow px-2 py-0.5 text-xs font-medium text-accent">
                                        {{ $tech }}
                                    </span>
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
                            <a href="{{ $link->url }}" target="_blank" class="group flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent" style="animation: float 3s ease-in-out infinite {{ $index * 0.2 }}s">
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
        function updateClock() {
            const now = new Date();
            const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const day = days[now.getDay()];
            const month = months[now.getMonth()];
            const date = now.getDate();
            const h = now.getHours().toString().padStart(2, '0');
            const m = now.getMinutes().toString().padStart(2, '0');
            const s = now.getSeconds().toString().padStart(2, '0');
            
            document.getElementById('clock-date').textContent = `${day}, ${month} ${date}`;
            document.getElementById('clock-time').textContent = `${h}:${m}:${s}`;
        }
        updateClock();
        setInterval(updateClock, 1000);

        // ===== Tab Switcher =====
        function switchTab(tabId) {
            document.querySelectorAll('.tab-section').forEach(sec => sec.classList.add('hidden'));
            document.getElementById('tab-' + tabId).classList.remove('hidden');

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('nav-active');
            });
            document.getElementById('nav-btn-' + tabId).classList.add('nav-active');
        }

        // ===== Projects Filter =====
        function filterProjects(category) {
            // Update active state of filter buttons
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active-filter');
            });
            document.getElementById('btn-filter-' + category).classList.add('active-filter');

            // Hide/Show cards
            document.querySelectorAll('.project-card').forEach(card => {
                const cardCat = card.getAttribute('data-category');
                if (category === 'all' || cardCat === category) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // ===== Pointer Move Parallax =====
        window.addEventListener('pointermove', (event) => {
            const x = (event.clientX / window.innerWidth - 0.5) * 2;
            const y = (event.clientY / window.innerHeight - 0.5) * 2;

            // Floating icons Parallax
            document.querySelectorAll('.floating-item').forEach(item => {
                const depth = parseFloat(item.getAttribute('data-depth'));
                item.style.transform = `translate3d(${x * depth}px, ${y * depth}px, 0)`;
                item.style.transition = 'transform 140ms ease-out';
            });
        });

        // ===== Matrix Rain Animation =====
        const canvas = document.getElementById('matrix-bg');
        const ctx = canvas.getContext('2d');
        let cols, drops;
        const chars = '01アイウエオカキクケコサシスセソタチツテトナニヌネノ{}[]<>/$;:./\\|*+-=&%#@!?'.split('');

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            cols = Math.floor(canvas.width / 14);
            drops = Array(cols).fill(0).map(() => Math.random() * canvas.height / 14);
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        function drawMatrix() {
            ctx.fillStyle = 'rgba(248, 250, 252, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = 'rgba(22, 163, 74, 0.06)';
            ctx.font = '13px JetBrains Mono';

            for (let i = 0; i < drops.length; i++) {
                const char = chars[Math.floor(Math.random() * chars.length)];
                ctx.fillText(char, i * 14, drops[i] * 14);
                if (drops[i] * 14 > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        setInterval(drawMatrix, 50);
    </script>
</body>

</html>
