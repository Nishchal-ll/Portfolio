<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'acharyanischal2004@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('Nishch@l2061'),
            ]
        );

        // About Me
        \App\Models\AboutMe::updateOrCreate(
            ['id' => 1],
            [
                'role' => 'Golang Developer & Software Engineer',
                'line_1' => 'Crafting high-performance backend systems and web applications using Golang, Laravel and React.',
                'line_2' => 'Focusing on performance, security, and scalable microservices architecture.',
                'line_3' => '// Ready to deploy solutions.',
                'image_url' => '/images/me.jpg',
            ]
        );

        // Contact Info
        \App\Models\ContactInfo::updateOrCreate(
            ['email' => 'acharyanischal2004@gmail.com'],
            [
                'github_url' => 'https://github.com/Nishchal-ll',
                'linkedin_url' => 'https://www.linkedin.com/in/nishchalacharyaaa/',
                'instagram_url' => 'https://instagram.com/nishchal._.l',
            ]
        );

        // Experiences (Biticonic)
        Experience::truncate();
        $experiences = [
            [
                'role' => 'Software Development Engineer',
                'company' => 'Biticonic',
                'company_url' => 'https://biticonic.com',
                'location' => 'Kathmandu, Nepal',
                'employment_type' => 'Full-time',
                'start_date' => 'March 2026',
                'end_date' => 'Present',
                'is_current' => true,
                'order' => 1,
                'description' => 'Architecting and developing high-performance backend systems, Go microservices, and modern web applications. Focusing on scalable database models, low-latency API design, and containerized cloud deployments.',
                'highlights' => [
                    'Architecting scalable microservices and RESTful APIs in Go and Laravel.',
                    'Optimizing relational database queries and caching layers for sub-50ms response times.',
                    'Streamlining Dockerized development environments and CI/CD automated deployment workflows.'
                ],
                'technologies' => ['Golang', 'Go', 'Laravel', 'PHP', 'PostgreSQL', 'Docker', 'Redis', 'React', 'Git'],
            ],
            [
                'role' => 'Software Developer Intern',
                'company' => 'Biticonic',
                'company_url' => 'https://biticonic.com',
                'location' => 'Kathmandu, Nepal',
                'employment_type' => 'Internship (3 Months)',
                'start_date' => 'January 2026',
                'end_date' => 'March 2026',
                'is_current' => false,
                'order' => 2,
                'description' => 'Contributed to full-stack feature development and backend API services using Go, Laravel, and modern JavaScript. Collaborated with senior engineers on production codebases.',
                'highlights' => [
                    'Developed reusable REST API endpoints, request validation rules, and middleware components.',
                    'Assisted in schema migrations, relational database optimizations, and unit test suites.',
                    'Collaborated in agile sprint planning, daily standups, and Git version control workflows.'
                ],
                'technologies' => ['Golang', 'Go', 'Laravel', 'PHP', 'MySQL', 'JavaScript', 'Docker', 'Git'],
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }

        // Projects
        $projects = [
            [
                'title' => 'Shift Management System',
                'slug' => 'shift-management-system',
                'project_role' => 'Lead Backend & Golang Engineer',
                'category' => 'self-made',
                'order' => 1,
                'description' => 'A high-performance shift management and worker scheduling system built in Go (Golang), enabling administrators to assign shifts, track workforce allocation, and provide real-time schedule calendars.',
                'overview' => 'Shift Management System solves the complex coordination of employee shift assignments and scheduling conflicts. Built from the ground up in Go, the application provides concurrent schedule processing, instant conflict resolution, and lightning-fast calendar views.',
                'features' => [
                    'Real-time shift conflict detection using Go concurrency and interval overlapping checks.',
                    'Admin dashboard for dynamic shift creation, worker assignment, and department management.',
                    'Worker portal with interactive calendar view and instant schedule notifications.',
                    'Role-based access control (RBAC) with secure JWT session handling and cryptographic hashing.',
                    'Audit logging for all shift swaps, cancellations, and administrative modifications.'
                ],
                'architecture' => 'Engineered following Domain-Driven Design (DDD) with clean separation of HTTP handlers, business logic services, and repository layers. Go standard library net/http paired with fast routing, SQLite/PostgreSQL persistent storage, and stateless token verification.',
                'challenges' => 'Preventing double-booking during concurrent assignment requests was solved using transaction locks and in-memory synchronization primitives.',
                'technologies' => ['Golang', 'Go', 'Docker', 'PostgreSQL', 'Linux', 'Git'],
                'github_link' => 'https://github.com/Nishchal-ll/Shift-Management-System',
                'live_link' => null,
                'created_at' => '2026-07-31 16:00:00',
            ],
            [
                'title' => 'Celtic Trekking Pvt. Ltd.',
                'slug' => 'celtic-trekking',
                'project_role' => 'Full Stack Web Developer',
                'category' => 'freelance',
                'order' => 2,
                'description' => 'A commercial travel and trekking destination management platform built in Laravel PHP, empowering tour operators to publish custom dynamic itineraries, manage booking inquiries, and curate multimedia galleries.',
                'overview' => 'Celtic Trekking is a complete digital presence and operations management platform for a trekking agency. It enables dynamic itinerary publication with detailed elevation profiles, day-by-day activities, seasonal pricing, and automated lead capture.',
                'features' => [
                    'Dynamic itinerary builder with interactive daily plan breakdown, elevation maps, and gear checklists.',
                    'Automated booking and inquiry pipeline with email confirmations and WhatsApp integration.',
                    'SEO-optimized architecture with structured schema markup, fast image delivery, and canonical links.',
                    'Comprehensive administrative CMS with drag-and-drop tour reordering and season pricing controls.'
                ],
                'architecture' => 'Built with Laravel MVC architecture, Blade templating with optimized asset bundles, MySQL normalized database schema, and responsive Tailwind UI.',
                'challenges' => 'Handling rich media asset uploads while maintaining 90+ Google Lighthouse performance scores was achieved through WebP transcoding and CDN delivery.',
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Tailwind CSS', 'Linux'],
                'github_link' => 'https://github.com/Nishchal-ll/Celtic-Trekking',
                'live_link' => 'https://trek.celtictrekking.com',
                'created_at' => '2026-07-31 11:00:00',
            ],
            [
                'title' => 'Robust Trade Pvt. Ltd.',
                'slug' => 'robust-trade',
                'project_role' => 'Backend & Laravel Developer',
                'category' => 'freelance',
                'order' => 3,
                'description' => 'A semi-ecommerce product catalog and enterprise ordering system built in Laravel PHP for fire safety and industrial equipment distribution.',
                'overview' => 'Robust Trade provides a specialized B2B and B2C product catalog for fire extinguisher equipment and safety gear. Clients can browse certified inventory, request formal quotation estimates, and track order fulfillment.',
                'features' => [
                    'Categorized safety gear inventory with technical spec sheets and safety certifications.',
                    'Instant quotation generator and quote-to-order conversion workflow.',
                    'Admin inventory management with low-stock alerts and order status timeline tracking.',
                    'Mobile-friendly responsive UI designed for field technicians and enterprise procurement managers.'
                ],
                'architecture' => 'Laravel backend with custom Eloquent relationships, MySQL database, session-based cart/quotation engine, and Blade templating.',
                'challenges' => 'Designing a flexible quotation pricing model that allows custom enterprise discounting while supporting standard catalog pricing.',
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Tailwind CSS'],
                'github_link' => 'https://github.com/Nishchal-ll/Robust-Trade-Pvt.-Ltd.',
                'live_link' => 'https://www.robusttrade.com.np',
                'created_at' => '2026-07-31 10:00:00',
            ],
            [
                'title' => 'AutoTweet',
                'slug' => 'autotweet',
                'project_role' => 'Full Stack & Automation Developer',
                'category' => 'self-made',
                'order' => 4,
                'description' => 'An automated social publishing and content curation platform built in Next.js using Twitter API v2, Cron jobs, and AI generation pipelines.',
                'overview' => 'AutoTweet automates tech social media engagement. Users configure content topics, scheduling rules, and AI prompt templates to automatically generate, refine, and broadcast technical tweets on predetermined schedules.',
                'features' => [
                    'Automated tweet generation using OpenAI & AI completion APIs with customizable personas.',
                    'Cron-driven scheduler with configurable cadence and retry mechanisms.',
                    'OAuth 2.0 Twitter authentication with scoped permission tokens.',
                    'Live post preview, performance analytics, and engagement logging.'
                ],
                'architecture' => 'Next.js App Router, Serverless API routes, Twitter API v2 client integration, and Vercel Cron triggers.',
                'challenges' => 'Mitigating Twitter API rate limits with exponential backoff queues and token auto-refresh.',
                'technologies' => ['Next.js', 'React', 'JavaScript', 'TypeScript', 'Node.js', 'CI/CD'],
                'github_link' => 'https://github.com/Nishchal-ll/AutoTweet',
                'live_link' => null,
                'created_at' => '2026-07-31 12:00:00',
            ],
            [
                'title' => 'ChatBot CrewAI Customer Bot',
                'slug' => 'chatbot-crewai',
                'project_role' => 'AI Engineer & Python Developer',
                'category' => 'self-made',
                'order' => 5,
                'description' => 'A multi-agent customer support automation bot built with CrewAI, local LLM integration via llama.cpp, and Python, supporting WhatsApp, Instagram, and Email channels.',
                'overview' => 'An intelligent multi-agent customer service assistant. Uses specialized CrewAI agents (Triage Agent, Product Expert, Ticket Escalator) to process inquiries, formulate verified answers from local documentation, and resolve support requests without human intervention.',
                'features' => [
                    'Multi-agent role-playing orchestration using CrewAI and custom toolchains.',
                    'Local LLM execution using llama.cpp and quantized models for 100% privacy and zero API costs.',
                    'Multi-channel webhook routing for WhatsApp, Instagram DMs, and Email inboxes.',
                    'Fallback escalation system with automated email alerts to human support agents.'
                ],
                'architecture' => 'Python backend, CrewAI multi-agent framework, FastAPI webhook endpoints, and vector document retrieval.',
                'challenges' => 'Optimizing inference speed on consumer hardware using quantized 4-bit GGUF models and response caching.',
                'technologies' => ['Python', 'FastAPI', 'Docker', 'Linux', 'Git'],
                'github_link' => 'https://github.com/Nishchal-ll/Machine-Translation',
                'live_link' => null,
                'created_at' => '2026-07-31 14:00:00',
            ],
            [
                'title' => 'MiniMotors E-Commerce',
                'slug' => 'minimotors-ecommerce',
                'project_role' => 'Full Stack Developer',
                'category' => 'college',
                'order' => 6,
                'description' => 'A full-stack e-commerce web application built with React (Frontend) and Laravel (REST API Backend) designed for die-cast collectibles with real-time stock management.',
                'overview' => 'A collectible car enthusiast marketplace featuring high-resolution galleries, category filters, shopping cart, customer checkout, and a full administrative management dashboard for orders and shipments.',
                'features' => [
                    'Decoupled architecture: SPA React frontend communicating with Laravel JSON REST API.',
                    'Interactive product catalog with faceted search, scale filters, and collector series tagging.',
                    'Customer authentication with order history and shipment tracking.',
                    'Admin portal for managing stock counts, uploading multi-angle product photography, and updating shipping stages.'
                ],
                'architecture' => 'React frontend built with Vite & Tailwind CSS; Laravel REST API with Sanctum authentication and MySQL database.',
                'challenges' => 'Managing asynchronous cart synchronization and real-time inventory locking during checkout.',
                'technologies' => ['React', 'Laravel', 'PHP', 'JavaScript', 'MySQL', 'Tailwind CSS'],
                'github_link' => 'https://github.com/Nishchal-ll/Minimotors-FullStack-Project',
                'live_link' => null,
                'created_at' => '2026-07-31 15:00:00',
            ],
            [
                'title' => 'Machine Translation: NLLB-200 Nepali Honorifics',
                'slug' => 'machine-translation-nllb200',
                'project_role' => 'NLP Researcher & Python Developer',
                'category' => 'college',
                'order' => 7,
                'description' => 'Domain-specialized English-to-Nepali neural machine translation fine-tuned from Meta\'s NLLB-200 foundation model, addressing honorific register and formal linguistic constructs.',
                'overview' => 'Standard machine translation models often struggle with the complex multi-tiered honorific system of the Nepali language (informal, neutral, high-respect). This project curated a specialized bilingual parallel corpus and fine-tuned Meta\'s NLLB-200 to generate grammatically correct, respectful translations.',
                'features' => [
                    'Fine-tuned Meta NLLB-200 600M parameter model on curated domain parallel datasets.',
                    'Custom BLEU, chrF++, and human evaluation pipelines measuring honorific preservation accuracy.',
                    'Interactive web translation interface for testing sentence pairs and register levels.',
                    'Comprehensive ablation study and comparative analysis against baseline translation APIs.'
                ],
                'architecture' => 'PyTorch, Hugging Face Transformers, Tokenizers, CUDA acceleration, and Streamlit/FastAPI evaluation web UI.',
                'challenges' => 'Mitigating low-resource hallucination while preserving nuanced formal morphology in low-resource Nepali tokens.',
                'technologies' => ['Python', 'Linux', 'Git', 'FastAPI'],
                'github_link' => 'https://github.com/Nishchal-ll/Machine-Translation',
                'live_link' => null,
                'created_at' => '2026-07-31 13:00:00',
            ],
        ];

        foreach ($projects as $project) {
            $slug = $project['slug'] ?? Str::slug($project['title']);
            $project['slug'] = $slug;
            $model = Project::updateOrCreate(['title' => $project['title']], $project);
            if (isset($project['created_at'])) {
                $model->created_at = $project['created_at'];
                $model->save();
            }
        }
    }
}
