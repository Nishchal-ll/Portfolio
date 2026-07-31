<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'password' => \Illuminate\Support\Facades\Hash::make('Nishch@l2061'),
            ]
        );

        // About Me
        \App\Models\AboutMe::updateOrCreate(
            ['role' => 'Full Stack Developer'],
            [
                'line_1' => 'Crafting modern web applications using Golang, Laravel and React.',
                'line_2' => 'Focusing on performance, security, and scalable architecture.',
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

        // Projects
        $projects = [
            [
                'title' => 'Robust Trade Pvt. Ltd.',
                'description' => 'A semi-ecommerce system built in Laravel PHP for placing orders of fire extinguisher related products.',
                'category' => 'freelance',
                'technologies' => ['Laravel', 'PHP'],
                'github_link' => 'https://github.com/Nishchal-ll/Robust-Trade-Pvt.-Ltd.',
                'live_link' => 'https://www.robusttrade.com.np',
                'created_at' => '2026-07-31 10:00:00',
            ],
            [
                'title' => 'Celtic Trekking Pvt. Ltd.',
                'description' => 'A travel and tour destination manager built in Laravel PHP where travel destination itineraries can be added dynamically.',
                'category' => 'freelance',
                'technologies' => ['Laravel', 'PHP'],
                'github_link' => 'https://github.com/Nishchal-ll/Celtic-Trekking',
                'live_link' => 'https://trek.celtictrekking.com',
                'created_at' => '2026-07-31 11:00:00',
            ],
            [
                'title' => 'AutoTweet',
                'description' => 'An automated tweeting platform built in Next.js using the Twitter API and Cron jobs, where tweets are generated using AI APIs and auto-posted.',
                'category' => 'self-made',
                'technologies' => ['Next.js', 'JavaScript'],
                'github_link' => 'https://github.com/Nishchal-ll/AutoTweet',
                'live_link' => null,
                'created_at' => '2026-07-31 12:00:00',
            ],
            [
                'title' => 'Machine Translation: NLLB-200 Nepali Honorifics',
                'description' => 'Accurate English to Nepali machine translation specialized in the honorific domain (respectful forms and formal register), fine-tuned from Meta\'s NLLB-200 model. Developed as a 7th semester project.',
                'category' => 'college',
                'technologies' => ['Python'],
                'github_link' => 'https://github.com/Nishchal-ll/Machine-Translation',
                'live_link' => null,
                'created_at' => '2026-07-31 13:00:00',
            ],
            [
                'title' => 'ChatBot CrewAI Customer Bot',
                'description' => 'A lightweight WhatsApp, Instagram Messenger, and Email customer support chatbot built using CrewAI, a local llama.cpp-compatible LLM, and Python. Developed as a 6th semester project.',
                'category' => 'self-made',
                'technologies' => ['Python'],
                'github_link' => 'https://github.com/Nishchal-ll/Machine-Translation',
                'live_link' => null,
                'created_at' => '2026-07-31 14:00:00',
            ],
            [
                'title' => 'MiniMotors E-Commerce',
                'description' => 'A full-stack e-commerce web application built with React (Frontend) and Laravel (Backend API) designed for Hot Wheels car lovers to browse, order, and track collectibles. Features a clean admin dashboard for product and order management. Developed as a 6th semester project.',
                'category' => 'college',
                'technologies' => ['React', 'Laravel'],
                'github_link' => 'https://github.com/Nishchal-ll/Minimotors-FullStack-Project',
                'live_link' => null,
                'created_at' => '2026-07-31 15:00:00',
            ],
            [
                'title' => 'Shift Management System',
                'description' => 'A simple Shift Management System built using Go (Golang) where an admin can assign shifts to users, and users can log in to view their assigned shifts in a calendar-style view.',
                'category' => 'self-made',
                'technologies' => ['Go', 'Golang'],
                'github_link' => 'https://github.com/Nishchal-ll/Shift-Management-System',
                'live_link' => null,
                'created_at' => '2026-07-31 16:00:00',
            ],
        ];
        foreach ($projects as $project) {
            $model = \App\Models\Project::updateOrCreate(['title' => $project['title']], $project);
            if (isset($project['created_at'])) {
                $model->created_at = $project['created_at'];
                $model->save();
            }
        }
    }
}
