<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $featuredNews = Article::orderBy('id', 'desc')->first();
        $recentNews = Article::orderBy('id', 'desc')->where('id', '!=', $featuredNews->id)->limit(5)->get();

        // Get past news by excluding featured and recent news
        $excludedIds = $recentNews->pluck('id')->toArray();
        $excludedIds[] = $featuredNews->id;

        $pastNews = Article::orderBy('id', 'desc')->whereNotIn('id', $excludedIds)->limit(4)->get();

        return view('pages.Rec-Home', compact('featuredNews', 'recentNews', 'pastNews'));
    }
}
