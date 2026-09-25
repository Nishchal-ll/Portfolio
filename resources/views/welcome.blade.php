<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $formattedName }} - Golang Developer | Software Developer</title>
    <meta name="description" content="Personal portfolio of {{ $formattedName }}, a Golang Developer and Software Developer specializing in crafting high-performance backend systems, Go microservices, Laravel, and modern web applications.">
    <meta name="keywords" content="{{ $formattedName }}, Nishchal, Acharya, Golang Developer, Go Developer, Software Developer, Software Engineer, Backend Developer, Web Developer, Laravel, Go, React, Portfolio, Nepal, Nishchal-ll">
    <meta name="author" content="{{ $formattedName }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $formattedName }} - Golang Developer | Software Developer">
    <meta property="og:description" content="Personal portfolio of {{ $formattedName }}, a Golang Developer and Software Developer specializing in crafting high-performance backend systems, Go microservices, Laravel, and modern web applications.">
    <meta property="og:image" content="{{ $appUrl }}/me1.webp">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{{ $formattedName }} - Golang Developer | Software Developer">
    <meta name="twitter:description" content="Personal portfolio of {{ $formattedName }}, a Golang Developer and Software Developer specializing in crafting high-performance backend systems, Go microservices, Laravel, and modern web applications.">
    <meta name="twitter:image" content="{{ $appUrl }}/me1.webp">

    <!-- JSON-LD Structured Data Schema Markup -->
    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="icon" type="image/png" href="/me1.png">

    <!-- Preload Critical LCP Hero Image -->
    <link rel="preload" href="/images/me.webp" as="image" type="image/webp" fetchpriority="high">

    <!-- Preconnect for fonts & icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Google Fonts (Optimized Weights) -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Space+Grotesk:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
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
                            warning: '#fbbf24',
                            purple: '#8b5cf6',
                        },
                        fontFamily: {
                            mono: ['JetBrains Mono', 'monospace'],
                            sans: ['Space Grotesk', 'sans-serif'],
                            body: ['Plus Jakarta Sans', 'sans-serif'],
                        }
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <style>
        /* Responsive visibility & dock alignment */
        @media (max-width: 1023px) {
            .tech-sidebar-dock {
                display: none !important;
            }
        }
        @media (min-width: 1024px) {
            .tech-sidebar-dock {
                display: flex !important;
                position: fixed !important;
                left: 1.25rem !important;
                top: 85px !important;
                bottom: 25px !important;
                margin-top: auto !important;
                margin-bottom: auto !important;
                height: fit-content !important;
                transform: none !important;
                translate: none !important;
                z-index: 30 !important;
            }
        }
        @media (max-width: 767px) {
            .cv-download-btn {
                display: none !important;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-[#fafafa] text-slate-800 antialiased selection:bg-accent/20 selection:text-emerald-900 font-sans min-h-screen relative flex flex-col justify-between">

    <!-- Background Grid Pattern with Ambient Glow -->
    <div class="grid-bg"></div>
    <div class="fixed top-20 left-1/2 -translate-x-1/2 w-[800px] h-[350px] bg-gradient-to-tr from-emerald-200/20 via-sky-200/20 to-transparent blur-3xl pointer-events-none -z-10"></div>

    <!-- Top System Bar (Arch Linux Header) -->
    <header class="fixed top-0 left-0 right-0 z-50 select-none border-b border-slate-200/80 bg-slate-50/95 font-mono text-xs backdrop-blur-md">
        <div class="flex min-w-0 items-center justify-between gap-2 px-3 py-1.5 sm:px-6">
            <div class="flex min-w-0 items-center gap-2 text-slate-500 sm:gap-3">
                <span class="text-accent font-bold text-sm">⬡</span>
                <span class="truncate text-accent font-semibold tracking-wide">nishchal@arch</span>
                <span class="text-slate-300">|</span>
                <span class="hidden sm:inline text-slate-600">bash 5.2.0</span>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <span class="hidden sm:inline-flex items-center gap-1.5 text-accent font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                    online
                </span>
            </div>

            <div class="flex shrink-0 items-center gap-2 text-slate-500 sm:gap-4">
                <div class="hidden md:flex items-center gap-1.5 font-medium">
                    <i class="fas fa-microchip text-accent"></i>
                    <span>CPU 12%</span>
                </div>
                <div class="hidden md:flex items-center gap-1.5 font-medium">
                    <span class="text-purple">▪</span>
                    <span>MEM 4.2G</span>
                </div>
                <div class="hidden sm:flex items-center gap-1.5 font-medium">
                    <i class="fas fa-wifi text-accent"></i>
                    <span>connected</span>
                </div>
                <div class="flex items-center gap-1.5 text-slate-600 font-semibold font-mono">
                    <i class="far fa-clock text-slate-400"></i>
                    <span id="clock-date" class="hidden sm:inline">--</span>
                    <span id="clock-time" class="text-accent">--:--:--</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Floating Navigation Bar -->
    <nav class="fixed top-8 left-0 right-0 z-40 py-2">
        <div class="mx-auto w-max max-w-[calc(100vw-1rem)] sm:max-w-full px-2 sm:px-4">
            <div class="flex items-center gap-0.5 sm:gap-1.5 overflow-hidden rounded-2xl border border-slate-200/80 bg-white/95 p-1 sm:p-1.5 font-mono shadow-md backdrop-blur-md">
                <div class="hidden md:flex items-center gap-2 px-3 py-1 text-slate-400 border-r border-slate-100 mr-0.5">
                    <i class="fas fa-terminal text-accent text-xs"></i>
                    <span class="text-xs text-accent font-semibold tracking-tight">~/portfolio $</span>
                </div>
                <button onclick="switchTab('home')" id="nav-btn-home" class="nav-btn rounded-xl px-2.5 sm:px-3.5 py-1.5 text-center text-xs font-semibold transition-all duration-200 text-slate-600 hover:bg-slate-100 hover:text-slate-900 nav-active outline-none focus:outline-none">
                    Home
                </button>
                <button onclick="switchTab('projects')" id="nav-btn-projects" class="nav-btn rounded-xl px-2.5 sm:px-3.5 py-1.5 text-center text-xs font-semibold transition-all duration-200 text-slate-600 hover:bg-slate-100 hover:text-slate-900 outline-none focus:outline-none">
                    Projects
                </button>
                <button onclick="switchTab('experience')" id="nav-btn-experience" class="nav-btn rounded-xl px-2.5 sm:px-3.5 py-1.5 text-center text-xs font-semibold transition-all duration-200 text-slate-600 hover:bg-slate-100 hover:text-slate-900 outline-none focus:outline-none">
                    Experience
                </button>
                <button onclick="switchTab('contact')" id="nav-btn-contact" class="nav-btn rounded-xl px-2.5 sm:px-3.5 py-1.5 text-center text-xs font-semibold transition-all duration-200 text-slate-600 hover:bg-slate-100 hover:text-slate-900 outline-none focus:outline-none">
                    Contact
                </button>

                <!-- CV Download Button (Hidden on mobile <768px, visible on md and up) -->
                <a href="{{ $cvUrl }}" target="_blank" download class="cv-download-btn hidden md:inline-flex ml-1 items-center gap-1.5 rounded-xl border border-[#a3e635] bg-[#bef264] px-3.5 py-1.5 text-xs font-bold text-slate-900 shadow-sm transition-all duration-200 hover:bg-[#a3e635] hover:shadow">
                    <i class="fas fa-download text-[10px] text-slate-800"></i>
                    <span>CV</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="relative z-10 w-full flex-1">

        <!-- 1. HOME TAB SECTION -->
        <div id="tab-home" class="tab-section relative mx-auto flex min-h-screen w-full max-w-[90rem] items-center px-4 pb-20 pt-20 sm:pt-24 sm:px-8 md:pb-16 md:pt-20 lg:px-12 lg:pl-20">
            
            <!-- Main Content Row (Increased Gap between Photo & Terminal) -->
            <div class="relative z-10 grid w-full grid-cols-1 items-center gap-8 md:grid-cols-2 lg:gap-20 xl:gap-24">
                
                <!-- Left: Free-standing Developer Photo -->
                <div class="flex items-center justify-center md:justify-end w-full">
                    <div class="relative group w-full max-w-[18rem] sm:max-w-[22rem] md:max-w-[28rem] lg:max-w-[32rem] xl:max-w-[35rem]">
                        
                        <!-- Neon Spray Aura & Glow Effect -->
                        <div class="absolute -inset-8 sm:-inset-12 bg-radial from-[#bef264]/50 via-[#a3e635]/25 to-transparent rounded-full blur-3xl -z-10 pointer-events-none opacity-85 transition-opacity duration-500 group-hover:opacity-100"></div>
                        <div class="absolute -left-8 -top-8 w-44 h-44 bg-[#a3e635]/35 rounded-full blur-2xl -z-10 pointer-events-none"></div>
                        <div class="absolute -right-8 -bottom-8 w-48 h-48 bg-[#bef264]/40 rounded-full blur-2xl -z-10 pointer-events-none"></div>

                        <picture class="w-full flex items-center justify-center md:justify-end">
                            <source srcset="/images/me.webp" type="image/webp">
                            <source srcset="/me1.webp" type="image/webp">
                            <img src="{{ $aboutMe->image_url ?? '/images/me.jpg' }}" 
                                 alt="{{ $contactInfo->name ?? 'Nishchal Acharya' }}" 
                                 fetchpriority="high"
                                 decoding="async"
                                 width="560"
                                 height="560"
                                 class="relative z-10 h-auto w-full object-contain filter drop-shadow-xl transition-transform duration-500 group-hover:scale-[1.01]" />
                        </picture>
                    </div>
                </div>

                <!-- Right: Developer Terminal Window (Pulled down slightly) -->
                <div class="flex items-center justify-center md:justify-start w-full translate-y-2 sm:translate-y-3 md:translate-y-4">
                    <div class="w-full max-w-xl lg:max-w-2xl overflow-hidden rounded-2xl border border-slate-200/90 bg-white/95 shadow-xl backdrop-blur-md">
                        <!-- Chrome bar -->
                        <div class="flex items-center justify-between border-b border-slate-200/80 bg-slate-100/90 px-4 py-2.5 select-none font-mono">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56] border border-[#e0443e] cursor-pointer"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e] border border-[#dea123] cursor-pointer"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f] border border-[#1aab29] cursor-pointer"></div>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                <i class="fas fa-terminal text-[10px] text-accent"></i>
                                <span>_&gt; bash - 80x24</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <span class="inline-block w-2 h-2 rounded-full bg-accent animate-ping"></span>
                                <span class="hidden sm:inline">pts/0</span>
                            </div>
                        </div>
                        
                        <!-- Body -->
                        <div class="space-y-5 px-5 py-5 sm:px-7 sm:py-6 font-mono">
                            <div class="flex flex-wrap items-center gap-x-0 text-xs sm:text-sm">
                                <span class="text-accent font-semibold">root@nishchal</span>
                                <span class="text-slate-400">:</span>
                                <span class="text-slate-700">~</span>
                                <span class="text-slate-700">$ ./init_portfolio.sh&nbsp;</span>
                                <span class="inline-block w-2 h-[14px] bg-accent align-middle animate-pulse"></span>
                            </div>

                            <h1 class="text-2xl font-bold leading-tight text-slate-900 sm:text-3xl md:text-4xl">
                                <span class="text-accent">export</span> ROLE=<br />
                                <span>"{{ $aboutMe->role ?? 'Golang Developer & Software Engineer' }}"</span>
                            </h1>

                            <div class="space-y-2 border-l-2 border-slate-300 pl-3.5 text-xs leading-relaxed text-slate-600 sm:text-sm">
                                <p><span class="text-slate-400">&gt;</span> {!! $highlightedLine1 !!}</p>
                                <p><span class="text-slate-400">&gt;</span> {{ $aboutMe->line_2 ?? 'Focusing on performance, security, and scalable architecture.' }}</p>
                                <p><span class="text-slate-400">&gt;</span> <span class="text-warning font-semibold">{{ $aboutMe->line_3 ?? '// Ready to deploy solutions.' }}</span></p>
                            </div>

                            <div class="border-t border-dashed border-slate-200 pt-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[11px] font-bold tracking-wider text-slate-400 uppercase">
                                        -- Connect [OPTIONS] --
                                    </p>
                                    <span class="text-[11px] text-emerald-600 font-semibold hidden sm:flex items-center gap-1">
                                        <i class="fas fa-check-circle text-[10px]"></i> Open for collaborations
                                    </span>
                                </div>
                                <div class="flex flex-wrap gap-2 sm:gap-2.5">
                                    @foreach($socialLinks as $index => $link)
                                    <a href="{{ $link->url }}" target="_blank" class="group flex min-w-0 items-center gap-2 rounded-xl border border-slate-300 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent shadow-2xs">
                                        @if(str_contains(strtolower($link->platform), 'github'))
                                             <i class="fab fa-github text-sm"></i>
                                             <span>git clone</span>
                                        @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                             <i class="fab fa-instagram text-sm"></i>
                                             <span>dm_me</span>
                                        @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                             <i class="fab fa-linkedin text-sm"></i>
                                             <span>connect</span>
                                        @else
                                             <i class="fas fa-link text-sm"></i>
                                             <span>{{ strtolower($link->platform) }}</span>
                                        @endif
                                        <i class="fas fa-arrow-up-right-from-square text-[9px] opacity-40 group-hover:opacity-100 group-hover:text-accent transition-opacity"></i>
                                    </a>
                                    @endforeach
                                    
                                    <button onclick="switchTab('projects')" class="flex items-center gap-1.5 rounded-xl bg-accent/15 border border-accent/30 px-3.5 py-2 text-xs font-bold text-accent-dim transition-all duration-200 hover:bg-accent hover:text-slate-950">
                                        <i class="fas fa-folder-open text-xs"></i>
                                        <span>view_projects()</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sleek Single Vertical Line Tech Stack Dock on the Middle-Left (Hidden on mobile, centered on desktop lg+) -->
            <div class="tech-sidebar-dock hidden lg:flex fixed left-4 xl:left-6 z-30 flex-col pointer-events-none">
                <div class="pointer-events-auto flex flex-col items-center gap-1.5 rounded-2xl border border-white/80 bg-white/95 p-1.5 shadow-xl backdrop-blur-xl ring-1 ring-slate-900/5">
                    
                    <!-- Golang -->
                    <button onclick="gotoProjectsWithTech('golang')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:translate-x-1 hover:shadow-md hover:border-[#00ADD8] focus:outline-none" title="Golang">
                        <i class="devicon-go-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Go (Golang)
                        </span>
                    </button>

                    <!-- Laravel -->
                    <button onclick="gotoProjectsWithTech('laravel')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:translate-x-1 hover:shadow-md hover:border-[#FF2D20] focus:outline-none" title="Laravel">
                        <i class="devicon-laravel-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Laravel
                        </span>
                    </button>

                    <!-- React -->
                    <button onclick="gotoProjectsWithTech('react')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:translate-x-1 hover:shadow-md hover:border-[#61DAFB] focus:outline-none" title="React">
                        <i class="devicon-react-original colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            React
                        </span>
                    </button>

                    <!-- Docker -->
                    <button onclick="gotoProjectsWithTech('docker')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:translate-x-1 hover:shadow-md hover:border-[#2496ED] focus:outline-none" title="Docker">
                        <i class="devicon-docker-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Docker
                        </span>
                    </button>

                    <!-- CI/CD (GitHub Actions) -->
                    <button onclick="gotoProjectsWithTech('ci/cd')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:translate-x-1 hover:shadow-md hover:border-[#2088FF] focus:outline-none" title="CI/CD">
                        <i class="devicon-githubactions-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            CI/CD
                        </span>
                    </button>

                    <!-- Microsoft Azure -->
                    <button onclick="gotoProjectsWithTech('azure')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#0089D6] focus:outline-none" title="Azure">
                        <i class="devicon-azure-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Azure
                        </span>
                    </button>

                    <!-- PostgreSQL -->
                    <button onclick="gotoProjectsWithTech('postgresql')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#4169E1] focus:outline-none" title="PostgreSQL">
                        <i class="devicon-postgresql-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            PostgreSQL
                        </span>
                    </button>

                    <!-- Redis -->
                    <button onclick="gotoProjectsWithTech('redis')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#DC382D] focus:outline-none" title="Redis">
                        <i class="devicon-redis-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Redis
                        </span>
                    </button>

                    <!-- Python -->
                    <button onclick="gotoProjectsWithTech('python')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#3776AB] focus:outline-none" title="Python">
                        <i class="devicon-python-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Python
                        </span>
                    </button>

                    <!-- Tailwind CSS -->
                    <button onclick="gotoProjectsWithTech('tailwind')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#06B6D4] focus:outline-none" title="Tailwind CSS">
                        <i class="devicon-tailwindcss-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Tailwind CSS
                        </span>
                    </button>

                    <!-- Arch Linux -->
                    <button onclick="gotoProjectsWithTech('linux')" class="group relative flex h-[38px] w-[38px] xl:h-[40px] xl:w-[40px] items-center justify-center rounded-xl bg-white/95 border border-slate-200/80 shadow-2xs transition-all duration-200 hover:scale-115 hover:shadow-md hover:border-[#1793D1] focus:outline-none" title="Arch Linux">
                        <i class="devicon-archlinux-plain colored text-xl xl:text-[22px]"></i>
                        <span class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3 rounded-md bg-slate-900/90 px-2.5 py-1 text-[11px] font-mono font-semibold text-white opacity-0 shadow-lg backdrop-blur transition-opacity group-hover:opacity-100 whitespace-nowrap z-50">
                            Arch Linux
                        </span>
                    </button>

                </div>
            </div>

        </div>

        <!-- 2. PROJECTS TAB SECTION -->
        <div id="tab-projects" class="tab-section mx-auto max-w-7xl px-4 pb-24 pt-32 sm:px-6 lg:px-8 hidden font-mono">
            
            <!-- Section Header -->
            <div class="max-w-7xl mx-auto mb-10">
                <div class="flex items-center gap-3 text-xs font-bold text-accent mb-3">
                    <span class="text-accent">01</span>
                    <span class="w-12 h-[1px] bg-accent/40"></span>
                    <span class="uppercase tracking-widest text-slate-400">FEATURED REPOSITORIES</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-3 font-sans">
                    projects
                </h2>
                <p class="text-sm sm:text-base text-slate-500 max-w-3xl leading-relaxed font-body">
                    Production systems, Go microservices, and modern web applications engineered for speed, concurrency, and reliability.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="mx-auto max-w-7xl mb-10 flex flex-wrap items-center gap-2.5">
                <button onclick="filterProjects('all')" id="btn-filter-all" class="filter-btn active-filter px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 bg-white text-slate-700 shadow-2xs transition-all hover:border-accent hover:text-accent cursor-pointer">
                    All ({{ $projects->count() }})
                </button>
                <button onclick="filterProjects('freelance')" id="btn-filter-freelance" class="filter-btn px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 bg-white text-slate-700 shadow-2xs transition-all hover:border-accent hover:text-accent cursor-pointer">
                    Freelance &amp; Client
                </button>
                <button onclick="filterProjects('self-made')" id="btn-filter-self-made" class="filter-btn px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 bg-white text-slate-700 shadow-2xs transition-all hover:border-accent hover:text-accent cursor-pointer">
                    Systems &amp; Architecture
                </button>
                <button onclick="filterProjects('college')" id="btn-filter-college" class="filter-btn px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 bg-white text-slate-700 shadow-2xs transition-all hover:border-accent hover:text-accent cursor-pointer">
                    Research &amp; Academic
                </button>
            </div>

            <!-- Project Cards Grid -->
            <div class="mx-auto grid max-w-7xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $index => $project)
                <div onclick="window.location.href='{{ route('projects.show', $project->slug) }}'" class="project-card group cursor-pointer overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm backdrop-blur transition-all duration-300 hover:-translate-y-1.5 hover:border-accent hover:shadow-xl flex flex-col justify-between" data-category="{{ $project->category }}" data-technologies="{{ json_encode(array_map('strtolower', (array)($project->technologies ?? []))) }}">
                    <div>
                        <!-- Cover Image with Category Badge -->
                        <div class="relative w-full h-52 overflow-hidden bg-slate-100 border-b border-slate-100">
                            @if($project->cover_image_url)
                            <img src="{{ $project->cover_image_url }}" 
                                 alt="{{ $project->title }} preview" 
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" 
                                 loading="lazy" 
                                 decoding="async" />
                            @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100 text-slate-400">
                                <i class="fas fa-code text-4xl text-slate-300 group-hover:text-accent transition-colors"></i>
                            </div>
                            @endif

                            <!-- Floating Category Tag -->
                            <div class="absolute top-3 left-3">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/90 px-3 py-1 text-[11px] font-bold text-slate-800 shadow-xs backdrop-blur border border-slate-200/60 font-mono">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                                    {{ ucfirst($project->category ?? 'project') }}
                                </span>
                            </div>

                            <!-- Open Icon on Hover -->
                            <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white text-slate-700 shadow-sm">
                                    <i class="fas fa-arrow-up-right-from-square text-xs text-accent"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 space-y-4">
                            <div>
                                <h3 class="text-lg font-bold leading-snug text-slate-900 group-hover:text-accent transition-colors font-sans">
                                    {{ $project->title }}
                                </h3>
                                @if($project->project_role)
                                <p class="text-xs text-slate-400 font-medium font-mono mt-0.5">
                                    {{ $project->project_role }}
                                </p>
                                @endif
                            </div>

                            <p class="line-clamp-3 text-xs leading-relaxed text-slate-600 font-body">
                                {!! strip_tags($project->formatted_description) !!}
                            </p>

                            <!-- Technologies Stack -->
                            @if(!empty($project->tech_badges))
                            <div class="pt-1">
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach($project->tech_badges as $tech)
                                    <span class="inline-flex items-center gap-1 rounded-md border border-slate-200/70 bg-slate-50 px-2 py-0.5 text-[11px] font-medium text-slate-700 font-mono" title="{{ $tech['name'] }}">
                                        <i class="{{ $tech['icon'] }} text-xs"></i>
                                        <span>{{ $tech['name'] }}</span>
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Direct Action Links -->
                    <div class="p-6 pt-0">
                        <div class="flex gap-2.5 border-t border-slate-100 pt-4">
                            @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" onclick="event.stopPropagation();" class="flex-1 flex items-center justify-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700 transition-all duration-200 hover:border-accent hover:bg-slate-50 hover:text-accent">
                                <i class="fab fa-github text-sm"></i>
                                <span>git clone</span>
                            </a>
                            @endif
                            @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" onclick="event.stopPropagation();" class="flex-1 flex items-center justify-center gap-1.5 rounded-xl bg-accent px-3 py-2 text-xs font-bold text-slate-950 shadow-2xs transition-all duration-200 hover:bg-accent-bright">
                                <i class="fas fa-external-link-alt text-[10px]"></i>
                                <span>live demo</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- 3. EXPERIENCE TAB SECTION -->
        <div id="tab-experience" class="tab-section mx-auto max-w-7xl px-4 pb-24 pt-32 sm:px-6 lg:px-8 hidden font-mono">
            
            <!-- Section Header -->
            <div class="max-w-5xl mx-auto mb-12">
                <div class="flex items-center gap-3 font-mono text-xs font-bold text-accent mb-3">
                    <span class="text-accent">02</span>
                    <span class="w-12 h-[1px] bg-accent/40"></span>
                    <span class="uppercase tracking-widest text-slate-400">EXPERIENCE</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-3 font-sans">
                    experience --oneline
                </h2>
                <p class="text-sm sm:text-base text-slate-500 max-w-3xl leading-relaxed font-body">
                    Career trajectory &mdash; from foundational software engineering and full-stack development to building production Go microservices at scale.
                </p>
            </div>

            <!-- Git Pipeline Timeline -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Vertical Git Line -->
                <div class="absolute left-3.5 sm:left-5 top-6 bottom-6 w-0.5 bg-gradient-to-b from-accent via-emerald-400/60 to-slate-200"></div>

                <div class="space-y-8 relative">
                    @foreach($experiences as $index => $exp)
                    <div class="relative flex items-start gap-5 sm:gap-8 group">
                        
                        <!-- Timeline Left Node & Horizontal Connector Branch -->
                        <div class="relative flex items-center shrink-0 pt-6">
                            @if($exp->is_current)
                            <div class="relative z-10 flex h-7 w-7 sm:h-8 sm:w-8 items-center justify-center rounded-full border-2 border-accent bg-white shadow-md">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent/40 opacity-75"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-accent"></span>
                            </div>
                            <div class="w-4 sm:w-6 h-0.5 bg-accent"></div>
                            @else
                            <div class="relative z-10 flex h-7 w-7 sm:h-8 sm:w-8 items-center justify-center rounded-full border-2 border-slate-300 bg-slate-100 shadow-xs">
                                <span class="w-2 h-2 rounded-full bg-slate-400"></span>
                            </div>
                            <div class="w-4 sm:w-6 h-0.5 bg-slate-300"></div>
                            @endif
                        </div>

                        <!-- Milestone Experience Card -->
                        <div class="flex-1 overflow-hidden rounded-2xl border border-slate-200 bg-white/95 p-6 sm:p-7 shadow-lg backdrop-blur transition-all duration-300 hover:shadow-2xl hover:border-slate-300">
                            
                            <!-- Top Row: Current Badge + Date -->
                            <div class="flex flex-wrap items-center justify-between gap-3 mb-2">
                                <div>
                                    @if($exp->is_current)
                                    <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-500/20 bg-emerald-500/10 px-3 py-1 text-xs font-bold text-emerald-600">
                                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                                        current
                                    </span>
                                    @else
                                    <span class="inline-flex items-center rounded-full border border-slate-200 bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                        {{ $exp->employment_type ?? 'Completed' }}
                                    </span>
                                    @endif
                                </div>

                                <div class="text-right">
                                    <div class="text-xs sm:text-sm font-bold text-accent">
                                        {{ $exp->start_date }} &mdash; {{ $exp->is_current ? 'Present' : $exp->end_date }}
                                    </div>
                                    <div class="text-[11px] text-slate-400">
                                        @if($exp->is_current)
                                        ~Present
                                        @else
                                        ~{{ $exp->employment_type ?? 'Full-time' }}
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Role & Company -->
                            <div class="space-y-1 mb-4">
                                <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight font-sans">
                                    {{ $exp->role }}
                                </h3>
                                <p class="text-sm sm:text-base font-semibold text-slate-500 flex items-center gap-2">
                                    <span>{{ $exp->company }}</span>
                                    @if($exp->location)
                                    <span class="text-slate-300">&bull;</span>
                                    <span class="text-xs text-slate-400 font-normal">{{ $exp->location }}</span>
                                    @endif
                                </p>
                            </div>

                            <!-- Description if available -->
                            @if($exp->description)
                            <div class="text-xs sm:text-sm text-slate-600 leading-relaxed font-body mb-4 space-y-1.5">
                                {!! $exp->formatted_description ?? nl2br(e($exp->description)) !!}
                            </div>
                            @endif

                            <!-- Technologies Stack Pills -->
                            @if(!empty($exp->tech_badges))
                            <div class="flex flex-wrap items-center gap-2">
                                @foreach($exp->tech_badges as $tech)
                                <span class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 bg-slate-50 px-2.5 py-1 text-xs font-medium text-slate-700 shadow-2xs">
                                    <i class="{{ $tech['icon'] }} text-sm"></i>
                                    <span>{{ $tech['name'] }}</span>
                                </span>
                                @endforeach
                            </div>
                            @endif

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 4. CONTACT TAB SECTION -->
        <div id="tab-contact" class="tab-section mx-auto w-full max-w-4xl px-4 py-20 pt-32 hidden font-mono">
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white/95 p-8 sm:p-12 shadow-xl backdrop-blur space-y-10">
                
                <!-- Section Header -->
                <div class="space-y-3 border-b border-slate-100 pb-8">
                    <div class="flex items-center gap-3 text-xs font-bold text-accent">
                        <span class="text-accent">03</span>
                        <span class="w-12 h-[1px] bg-accent/40"></span>
                        <span class="uppercase tracking-widest text-slate-400">GET IN TOUCH</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight font-sans">
                        Let's Build Something Great
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl font-body">
                        Whether you have an inquiry, project collaboration, architecture discussion, or just want to connect.
                    </p>
                </div>

                <!-- Connect Methods Grid -->
                <div class="space-y-6">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">
                            Connect on Social &amp; Code Platforms
                        </p>
                        <div class="grid gap-3 sm:grid-cols-2">
                            @foreach($socialLinks as $index => $link)
                            <a href="{{ $link->url }}" target="_blank" class="group flex items-center justify-between rounded-2xl border border-slate-200 bg-slate-50/70 p-4 transition-all duration-200 hover:border-accent hover:bg-white hover:shadow-md">
                                <div class="flex items-center gap-3">
                                    @if(str_contains(strtolower($link->platform), 'github'))
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-white shadow-2xs">
                                            <i class="fab fa-github text-lg"></i>
                                        </div>
                                        <div>
                                            <span class="block text-sm font-bold text-slate-900 group-hover:text-accent transition-colors font-sans">GitHub</span>
                                            <span class="text-xs text-slate-400">@Nishchal-ll</span>
                                        </div>
                                    @elseif(str_contains(strtolower($link->platform), 'linkedin'))
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#0A66C2] text-white shadow-2xs">
                                            <i class="fab fa-linkedin-in text-lg"></i>
                                        </div>
                                        <div>
                                            <span class="block text-sm font-bold text-slate-900 group-hover:text-accent transition-colors font-sans">LinkedIn</span>
                                            <span class="text-xs text-slate-400">Connect with me</span>
                                        </div>
                                    @elseif(str_contains(strtolower($link->platform), 'instagram'))
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 text-white shadow-2xs">
                                            <i class="fab fa-instagram text-lg"></i>
                                        </div>
                                        <div>
                                            <span class="block text-sm font-bold text-slate-900 group-hover:text-accent transition-colors font-sans">Instagram</span>
                                            <span class="text-xs text-slate-400">@nishchal._.l</span>
                                        </div>
                                    @else
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-white shadow-2xs">
                                            <i class="fas fa-link text-lg"></i>
                                        </div>
                                        <div>
                                            <span class="block text-sm font-bold text-slate-900 group-hover:text-accent transition-colors font-sans">{{ ucfirst($link->platform) }}</span>
                                            <span class="text-xs text-slate-400">View profile</span>
                                        </div>
                                    @endif
                                </div>
                                <i class="fas fa-arrow-up-right-from-square text-xs text-slate-400 group-hover:text-accent group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Direct Email Action Banner -->
                    @if($contactInfo && $contactInfo->email)
                    <div class="rounded-2xl border border-emerald-500/20 bg-emerald-50/50 p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="space-y-1">
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 font-mono">
                                Direct Email
                            </span>
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 break-all font-mono">
                                {{ $contactInfo->email }}
                            </h3>
                        </div>
                        <a href="mailto:{{ $contactInfo->email }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-accent px-5 py-3 text-xs sm:text-sm font-bold text-slate-950 shadow-2xs transition-all duration-200 hover:bg-accent-bright hover:shadow-xs shrink-0 font-mono">
                            <i class="fas fa-paper-plane text-xs"></i>
                            <span>Send Message</span>
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
                window.location.hash = tabId;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('nav-active');
            });
            const activeBtn = document.getElementById('nav-btn-' + tabId);
            if (activeBtn) {
                activeBtn.classList.add('nav-active');
            }
        }

        // Check hash on load
        window.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash.replace('#', '');
            if (['home', 'projects', 'experience', 'contact'].includes(hash)) {
                switchTab(hash);
            }
        });

        // ===== Tech Stack Dock Projects Launcher =====
        function gotoProjectsWithTech(tech) {
            switchTab('projects');
            filterByTech(tech);
        }

        function filterByTech(tech) {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active-filter');
            });

            const term = tech.toLowerCase().trim();
            document.querySelectorAll('.project-card').forEach(card => {
                const rawTechs = card.getAttribute('data-technologies') || '[]';
                let techs = [];
                try {
                    techs = JSON.parse(rawTechs);
                } catch(e) {
                    techs = [];
                }
                
                const matches = techs.some(t => {
                    const tl = String(t).toLowerCase();
                    return tl.includes(term) || term.includes(tl);
                });

                if (matches) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });

            // Update or display filter status notice
            let activeTechNotice = document.getElementById('active-tech-filter-notice');
            if (!activeTechNotice) {
                const filterContainer = document.querySelector('#tab-projects .filter-btn')?.parentElement;
                if (filterContainer) {
                    activeTechNotice = document.createElement('div');
                    activeTechNotice.id = 'active-tech-filter-notice';
                    activeTechNotice.className = 'w-full flex items-center gap-2 pt-2 text-xs font-mono text-slate-500';
                    filterContainer.appendChild(activeTechNotice);
                }
            }
            if (activeTechNotice) {
                activeTechNotice.innerHTML = `<span>Filtered by: <strong class="text-accent uppercase">${tech}</strong></span> <button onclick="filterProjects('all')" class="text-xs text-rose-500 hover:underline ml-2">✕ Clear filter</button>`;
            }
        }

        // ===== Projects Filter =====
        function filterProjects(category) {
            const activeTechNotice = document.getElementById('active-tech-filter-notice');
            if (activeTechNotice) {
                activeTechNotice.innerHTML = '';
            }

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

