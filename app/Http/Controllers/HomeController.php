<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $featuredNews = Article::where('status', 1)->orderBy('id', 'desc')->first();
        $recentNews = Article::where('status', 1)->orderBy('id', 'desc')->where('id', '!=', $featuredNews->id)->limit(5)->get();

        // Get past news by excluding featured and recent news
        $excludedIds = $recentNews->pluck('id')->toArray();
        $excludedIds[] = $featuredNews->id;

        $pastNews = Article::where('status', 1)->orderBy('id', 'desc')->whereNotIn('id', $excludedIds)->limit(4)->get();

        $images = DB::table('communities')->where('status', 1)->orderBy('id', 'desc')->limit(12)->get();

        $carouselImages = DB::table('main_carousels')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return view('pages.Rec-Home', compact('featuredNews', 'recentNews', 'pastNews', 'images', 'carouselImages'));
    }
}