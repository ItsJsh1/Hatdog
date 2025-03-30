<?php

namespace App\Http\Controllers;

use App\Models\NewsUpdate;
use Illuminate\Http\Request;

class NewsUpdateController extends Controller
{
    public function index()
    {
        // Get latest news for featured section
        $featuredNews = NewsUpdate::latest('created_at')->first();

        // Get 5 side news excluding featured story
        $recentNews = NewsUpdate::where('id', '!=', $featuredNews->id ?? null)
                            ->latest('created_at')
                            ->take(5)
                            ->get();

        // Get past news excluding featured and 5 side news
        $pastNews = NewsUpdate::where('id', '!=', $featuredNews->id ?? null)
                          ->orderBy('created_at', 'desc')
                          ->skip(5)
                          ->take(10)
                          ->get();

        return view('pages.News', compact('featuredNews', 'recentNews', 'pastNews'));
    }
}
