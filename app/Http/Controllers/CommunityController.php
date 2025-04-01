<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    public function showImages(){
        $images = DB::table('communities')->where('status', 1)->select('image')->orderBy('id', 'desc')->limit(12)->get();

        return view('pages.Community', compact('images'));
    }
}
