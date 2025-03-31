<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class NewsUpdateController extends Controller
{
    // public function index()
    // {
    //     $featuredNews = Article::latest()->first();
    //     $recentNews = Article::recent()->get();
    //     $pastNews = Article::past()->get();

    //     return view('pages.News', compact('featuredNews', 'recentNews', 'pastNews'));
    // }   
    
    public function index()
    {
        // Ensure the latest article is used as the featured one
        $featuredNews = Article::orderBy('id', 'desc')->first();

        // Get recent news by excluding the first one
        $recentNews = Article::orderBy('id', 'desc')->where('id', '!=', $featuredNews->id)->limit(5)->get();

        // Get past news by excluding featured and recent news
        $excludedIds = $recentNews->pluck('id')->toArray();
        $excludedIds[] = $featuredNews->id;

        $pastNews = Article::orderBy('id', 'desc')->whereNotIn('id', $excludedIds)->get();

        return view('pages.News', compact('featuredNews', 'recentNews', 'pastNews'));
    }
}
