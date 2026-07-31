<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\ContactInfo;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();
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

        $projects = Project::get()->sort(function ($a, $b) {
            $aPriority = ($a->title === 'Shift Management System') ? 1 : 99;
            $bPriority = ($b->title === 'Shift Management System') ? 1 : 99;

            if ($aPriority !== $bPriority) {
                return $aPriority <=> $bPriority;
            }

            $aCatPriority = match ($a->category) {
                'freelance' => 2,
                'self-made' => 3,
                'college' => 4,
                default => 5,
            };
            $bCatPriority = match ($b->category) {
                'freelance' => 2,
                'self-made' => 3,
                'college' => 4,
                default => 5,
            };

            if ($aCatPriority !== $bCatPriority) {
                return $aCatPriority <=> $bCatPriority;
            }

            return $b->created_at <=> $a->created_at;
        })->values();

        return view('welcome', [
            'aboutMe' => AboutMe::first(),
            'socialLinks' => $socialLinks,
            'contactInfo' => $contactInfo,
            'projects' => $projects,
        ]);
    }
}
