<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\ContactInfo;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PortfolioController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();
        $aboutMe = AboutMe::first();
        $appName = config('app.name');
            
            $rawUrl = config('app.url');
            if (!$rawUrl || str_contains($rawUrl, 'localhost') || str_contains($rawUrl, '127.0.0.1')) {
                $appUrl = 'https://acharyanishchal.com.np';
            } else {
                $appUrl = rtrim($rawUrl, '/');
            }
            $canonicalUrl = 'https://acharyanishchal.com.np/';

            $formattedName = preg_replace('/(?<!^)(?=[A-Z])/', ' ', $appName);
            if (!$formattedName || $formattedName === 'Laravel') {
                $formattedName = 'Nishchal Acharya';
            }

            $socialLinks = [];
            if ($contactInfo) {
                if ($contactInfo->github_url) {
                    $socialLinks[] = (object)[
                        'platform' => 'github',
                        'url' => $contactInfo->github_url
                    ];
                }
                if ($contactInfo->instagram_url) {
                    $socialLinks[] = (object)[
                        'platform' => 'instagram',
                        'url' => $contactInfo->instagram_url
                    ];
                }
                if ($contactInfo->linkedin_url) {
                    $socialLinks[] = (object)[
                        'platform' => 'linkedin',
                        'url' => $contactInfo->linkedin_url
                    ];
                }
                if ($contactInfo->twitter_url) {
                    $socialLinks[] = (object)[
                        'platform' => 'twitter',
                        'url' => $contactInfo->twitter_url
                    ];
                }
            }

            $schema = [
                '@context' => 'https://schema.org',
                '@graph' => [
                    [
                        '@type' => 'Person',
                        '@id' => $appUrl . '/#person',
                        'name' => $formattedName,
                        'url' => $appUrl,
                        'image' => $appUrl . '/me1.webp',
                        'jobTitle' => 'Golang Developer | Software Developer',
                        'knowsAbout' => ['Golang', 'Go', 'Software Development', 'Laravel', 'PHP', 'React', 'Next.js', 'Python', 'Docker', 'Kubernetes', 'Azure', 'CI/CD', 'Web Development', 'Software Engineering'],
                        'sameAs' => [
                            'https://github.com/Nishchal-ll',
                            'https://www.linkedin.com/in/nishchalacharyaaa/',
                            'https://instagram.com/nishchal._.l'
                        ]
                    ],
                    [
                        '@type' => 'WebSite',
                        '@id' => $appUrl . '/#website',
                        'url' => $appUrl,
                        'name' => $formattedName . ' Portfolio',
                        'description' => 'Personal Portfolio of ' . $formattedName . ', Golang Developer | Software Developer.',
                        'publisher' => [
                            '@id' => $appUrl . '/#person'
                        ]
                    ]
                ]
            ];

            $projects = Project::orderBy('order', 'asc')
                ->orderBy('created_at', 'desc')
                ->get()
                ->map(function ($project) {
                    $techBadges = [];
                    if (is_array($project->technologies)) {
                        foreach ($project->technologies as $tech) {
                            $techBadges[] = $this->getTechBadgeInfo($tech);
                        }
                    }
                    $project->tech_badges = $techBadges;

                    // Handle rich description or plain text
                    $desc = $project->description ?? '';
                    $project->formatted_description = preg_replace_callback(
                        '/\b(Go\s*\(Golang\)|Golang|Go)\b(?![^<]*>)/i',
                        fn($m) => '<span class="font-bold text-[#007D9C]">' . $m[0] . '</span>',
                        $desc
                    );

                    return $project;
                });

            $experiences = Experience::orderBy('order', 'asc')
                ->orderBy('start_date', 'desc')
                ->get()
                ->map(function ($experience) {
                    $techBadges = [];
                    if (is_array($experience->technologies)) {
                        foreach ($experience->technologies as $tech) {
                            $techBadges[] = $this->getTechBadgeInfo($tech);
                        }
                    }
                    $experience->tech_badges = $techBadges;

                    $desc = e($experience->description ?? '');
                    $experience->formatted_description = preg_replace_callback(
                        '/\b(Go\s*\(Golang\)|Golang|Go)\b/i',
                        fn($m) => '<span class="font-bold text-[#007D9C]">' . $m[0] . '</span>',
                        $desc
                    );

                    return $experience;
                });

            $rawLine1 = $aboutMe?->line_1 ?? 'Crafting modern web applications using Golang, Laravel and React.';
            $highlightedLine1 = preg_replace_callback(
                '/\b(Golang|Go)\b/i',
                fn($m) => '<span class="text-accent font-extrabold text-[1.2em] tracking-tight">' . e($m[0]) . '</span>',
                e($rawLine1)
            );

            $cvUrl = $aboutMe?->cv_file_url ?? '/cv.pdf';

        return view('welcome', [
            'aboutMe' => $aboutMe,
            'socialLinks' => $socialLinks,
            'contactInfo' => $contactInfo,
            'projects' => $projects,
            'experiences' => $experiences,
            'formattedName' => $formattedName,
            'appUrl' => $appUrl,
            'canonicalUrl' => $canonicalUrl,
            'schema' => $schema,
            'highlightedLine1' => $highlightedLine1,
            'cvUrl' => $cvUrl,
        ]);
    }

    public function showProject(string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $contactInfo = ContactInfo::first();
        $aboutMe = AboutMe::first();
        $appName = config('app.name');

        $rawUrl = config('app.url');
        if (!$rawUrl || str_contains($rawUrl, 'localhost') || str_contains($rawUrl, '127.0.0.1')) {
            $appUrl = 'https://acharyanishchal.com.np';
        } else {
            $appUrl = rtrim($rawUrl, '/');
        }
        $canonicalUrl = 'https://acharyanishchal.com.np/projects/' . $project->slug;

        $formattedName = preg_replace('/(?<!^)(?=[A-Z])/', ' ', $appName);
        if (!$formattedName || $formattedName === 'Laravel') {
            $formattedName = 'Nishchal Acharya';
        }

        $socialLinks = [];
        if ($contactInfo) {
            if ($contactInfo->github_url) {
                $socialLinks[] = (object)[
                    'platform' => 'github',
                    'url' => $contactInfo->github_url
                ];
            }
            if ($contactInfo->instagram_url) {
                $socialLinks[] = (object)[
                    'platform' => 'instagram',
                    'url' => $contactInfo->instagram_url
                ];
            }
            if ($contactInfo->linkedin_url) {
                $socialLinks[] = (object)[
                    'platform' => 'linkedin',
                    'url' => $contactInfo->linkedin_url
                ];
            }
            if ($contactInfo->twitter_url) {
                $socialLinks[] = (object)[
                    'platform' => 'twitter',
                    'url' => $contactInfo->twitter_url
                ];
            }
        }

        $techBadges = [];
        if (is_array($project->technologies)) {
            foreach ($project->technologies as $tech) {
                $techBadges[] = $this->getTechBadgeInfo($tech);
            }
        }
        $project->tech_badges = $techBadges;

        $desc = $project->description ?? '';
        $project->formatted_description = preg_replace_callback(
            '/\b(Go\s*\(Golang\)|Golang|Go)\b(?![^<]*>)/i',
            fn($m) => '<span class="font-bold text-[#007D9C]">' . $m[0] . '</span>',
            $desc
        );

        $allProjects = Project::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();
        $currentIndex = $allProjects->search(fn($p) => $p->id === $project->id);
        $previousProject = ($currentIndex > 0) ? $allProjects->get($currentIndex - 1) : null;
        $nextProject = ($currentIndex !== false && $currentIndex < $allProjects->count() - 1) ? $allProjects->get($currentIndex + 1) : null;

        $otherProjects = Project::where('id', '!=', $project->id)
            ->orderBy('order', 'asc')
            ->take(3)
            ->get()
            ->map(function ($p) {
                $techBadges = [];
                if (is_array($p->technologies)) {
                    foreach ($p->technologies as $tech) {
                        $techBadges[] = $this->getTechBadgeInfo($tech);
                    }
                }
                $p->tech_badges = $techBadges;
                return $p;
            });

        $cvUrl = $aboutMe?->cv_file_url ?? '/cv.pdf';

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareSourceCode',
            'name' => $project->title,
            'description' => $project->description,
            'author' => [
                '@type' => 'Person',
                'name' => $formattedName,
                'url' => $appUrl
            ],
            'programmingLanguage' => $project->technologies ?? [],
            'codeRepository' => $project->github_link ?? $appUrl,
            'url' => $canonicalUrl
        ];

        return view('projects.show', [
            'project' => $project,
            'otherProjects' => $otherProjects,
            'previousProject' => $previousProject,
            'nextProject' => $nextProject,
            'contactInfo' => $contactInfo,
            'socialLinks' => $socialLinks,
            'formattedName' => $formattedName,
            'appUrl' => $appUrl,
            'canonicalUrl' => $canonicalUrl,
            'cvUrl' => $cvUrl,
            'schema' => $schema,
        ]);
    }

    private function getTechBadgeInfo(string $tech): array
    {
        $key = strtolower(trim($tech));
        return match ($key) {
            'go', 'golang' => [
                'name' => $tech,
                'icon' => 'devicon-go-original-wordmark colored',
                'class' => 'border-[#00ADD8] bg-[#00ADD8]/20 text-[#006680] hover:border-[#00ADD8] hover:bg-[#00ADD8]/25',
                'icon_class' => 'text-base',
            ],
            'docker' => [
                'name' => $tech,
                'icon' => 'devicon-docker-plain colored',
                'class' => 'border-sky-400 bg-sky-100/90 text-sky-950 hover:border-sky-500',
                'icon_class' => 'text-sm',
            ],
            'kubernetes', 'k8s' => [
                'name' => $tech,
                'icon' => 'devicon-kubernetes-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            'azure' => [
                'name' => $tech,
                'icon' => 'devicon-azure-plain colored',
                'class' => 'border-cyan-400 bg-cyan-100/90 text-cyan-950 hover:border-cyan-500',
                'icon_class' => 'text-sm',
            ],
            'aws' => [
                'name' => $tech,
                'icon' => 'devicon-amazonwebservices-plain-wordmark colored',
                'class' => 'border-amber-400 bg-amber-100/90 text-amber-950 hover:border-amber-500',
                'icon_class' => 'text-sm',
            ],
            'gcp', 'google cloud' => [
                'name' => $tech,
                'icon' => 'devicon-googlecloud-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            'ci/cd', 'github actions' => [
                'name' => $tech,
                'icon' => 'devicon-githubactions-plain colored',
                'class' => 'border-slate-400 bg-slate-200/90 text-slate-950 hover:border-slate-500',
                'icon_class' => 'text-sm',
            ],
            'laravel' => [
                'name' => $tech,
                'icon' => 'devicon-laravel-original colored',
                'class' => 'border-red-400 bg-red-100/90 text-red-950 hover:border-red-500',
                'icon_class' => 'text-sm',
            ],
            'php' => [
                'name' => $tech,
                'icon' => 'devicon-php-plain colored',
                'class' => 'border-indigo-400 bg-indigo-100/90 text-indigo-950 hover:border-indigo-500',
                'icon_class' => 'text-sm',
            ],
            'react' => [
                'name' => $tech,
                'icon' => 'devicon-react-original colored',
                'class' => 'border-cyan-400 bg-cyan-100/90 text-cyan-950 hover:border-cyan-500',
                'icon_class' => 'text-sm',
            ],
            'next.js', 'nextjs' => [
                'name' => $tech,
                'icon' => 'devicon-nextjs-plain text-slate-950',
                'class' => 'border-slate-400 bg-slate-200/95 text-slate-950 hover:border-slate-500',
                'icon_class' => 'text-sm',
            ],
            'vue.js', 'vue', 'vuejs' => [
                'name' => $tech,
                'icon' => 'devicon-vuejs-plain colored',
                'class' => 'border-emerald-400 bg-emerald-100/90 text-emerald-950 hover:border-emerald-500',
                'icon_class' => 'text-sm',
            ],
            'typescript', 'ts' => [
                'name' => $tech,
                'icon' => 'devicon-typescript-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            'javascript', 'js' => [
                'name' => $tech,
                'icon' => 'devicon-javascript-plain colored',
                'class' => 'border-yellow-400 bg-yellow-100/90 text-yellow-950 hover:border-yellow-500',
                'icon_class' => 'text-sm',
            ],
            'python' => [
                'name' => $tech,
                'icon' => 'devicon-python-plain colored',
                'class' => 'border-amber-400 bg-amber-100/90 text-amber-950 hover:border-amber-500',
                'icon_class' => 'text-sm',
            ],
            'django' => [
                'name' => $tech,
                'icon' => 'devicon-django-plain colored',
                'class' => 'border-emerald-700 bg-emerald-100 text-emerald-950 hover:border-emerald-800',
                'icon_class' => 'text-sm',
            ],
            'fastapi' => [
                'name' => $tech,
                'icon' => 'devicon-fastapi-plain colored',
                'class' => 'border-teal-400 bg-teal-100/90 text-teal-950 hover:border-teal-500',
                'icon_class' => 'text-sm',
            ],
            'flask' => [
                'name' => $tech,
                'icon' => 'devicon-flask-original text-slate-950',
                'class' => 'border-slate-400 bg-slate-200 text-slate-950 hover:border-slate-500',
                'icon_class' => 'text-sm',
            ],
            'node.js', 'nodejs', 'node' => [
                'name' => $tech,
                'icon' => 'devicon-nodejs-plain colored',
                'class' => 'border-green-500 bg-green-100/90 text-green-950 hover:border-green-600',
                'icon_class' => 'text-sm',
            ],
            'express.js', 'express', 'expressjs' => [
                'name' => $tech,
                'icon' => 'devicon-express-original text-slate-950',
                'class' => 'border-slate-400 bg-slate-200 text-slate-950 hover:border-slate-500',
                'icon_class' => 'text-sm',
            ],
            'postgresql', 'postgres' => [
                'name' => $tech,
                'icon' => 'devicon-postgresql-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            'mysql' => [
                'name' => $tech,
                'icon' => 'devicon-mysql-original colored',
                'class' => 'border-sky-400 bg-sky-100/90 text-sky-950 hover:border-sky-500',
                'icon_class' => 'text-sm',
            ],
            'mongodb', 'mongo' => [
                'name' => $tech,
                'icon' => 'devicon-mongodb-plain colored',
                'class' => 'border-emerald-400 bg-emerald-100/90 text-emerald-950 hover:border-emerald-500',
                'icon_class' => 'text-sm',
            ],
            'redis' => [
                'name' => $tech,
                'icon' => 'devicon-redis-plain colored',
                'class' => 'border-red-400 bg-red-100/90 text-red-950 hover:border-red-500',
                'icon_class' => 'text-sm',
            ],
            'kafka', 'apache kafka' => [
                'name' => $tech,
                'icon' => 'devicon-apachekafka-original colored',
                'class' => 'border-slate-400 bg-slate-200 text-slate-950 hover:border-slate-500',
                'icon_class' => 'text-sm',
            ],
            'rabbitmq' => [
                'name' => $tech,
                'icon' => 'devicon-rabbitmq-original colored',
                'class' => 'border-orange-400 bg-orange-100/90 text-orange-950 hover:border-orange-500',
                'icon_class' => 'text-sm',
            ],
            'linux' => [
                'name' => $tech,
                'icon' => 'devicon-linux-plain text-slate-950',
                'class' => 'border-yellow-500 bg-yellow-100 text-slate-950 hover:border-yellow-600',
                'icon_class' => 'text-sm',
            ],
            'nginx' => [
                'name' => $tech,
                'icon' => 'devicon-nginx-original colored',
                'class' => 'border-emerald-500 bg-emerald-100 text-emerald-950 hover:border-emerald-600',
                'icon_class' => 'text-sm',
            ],
            'git' => [
                'name' => $tech,
                'icon' => 'devicon-git-plain colored',
                'class' => 'border-orange-400 bg-orange-100/90 text-orange-950 hover:border-orange-500',
                'icon_class' => 'text-sm',
            ],
            'tailwind css', 'tailwind' => [
                'name' => $tech,
                'icon' => 'devicon-tailwindcss-original colored',
                'class' => 'border-teal-400 bg-teal-100/90 text-teal-950 hover:border-teal-500',
                'icon_class' => 'text-sm',
            ],
            'graphql' => [
                'name' => $tech,
                'icon' => 'devicon-graphql-plain colored',
                'class' => 'border-pink-400 bg-pink-100/90 text-pink-950 hover:border-pink-500',
                'icon_class' => 'text-sm',
            ],
            'flutter' => [
                'name' => $tech,
                'icon' => 'devicon-flutter-plain colored',
                'class' => 'border-sky-400 bg-sky-100/90 text-sky-950 hover:border-sky-500',
                'icon_class' => 'text-sm',
            ],
            'dart' => [
                'name' => $tech,
                'icon' => 'devicon-dart-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            'c++', 'cpp' => [
                'name' => $tech,
                'icon' => 'devicon-cplusplus-plain colored',
                'class' => 'border-blue-500 bg-blue-100/90 text-blue-950 hover:border-blue-600',
                'icon_class' => 'text-sm',
            ],
            'html', 'html5' => [
                'name' => $tech,
                'icon' => 'devicon-html5-plain colored',
                'class' => 'border-orange-400 bg-orange-100/90 text-orange-950 hover:border-orange-500',
                'icon_class' => 'text-sm',
            ],
            'css', 'css3' => [
                'name' => $tech,
                'icon' => 'devicon-css3-plain colored',
                'class' => 'border-blue-400 bg-blue-100/90 text-blue-950 hover:border-blue-500',
                'icon_class' => 'text-sm',
            ],
            default => [
                'name' => $tech,
                'icon' => 'fas fa-code text-accent',
                'class' => 'border-accent/40 bg-accent-glow text-accent-dim hover:border-accent',
                'icon_class' => 'text-xs',
            ],
        };
    }
}
