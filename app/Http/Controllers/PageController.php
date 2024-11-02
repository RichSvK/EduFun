<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function viewHome(){
        $articles = Article::paginate(2);
        return view('home', ['articles' => $articles]);
    }

    public function viewAbout(){
        return view('about');
    }

    public function viewPopular(){
        $articles = Article::orderby('views', 'desc')->paginate(3);
        return view('popular', ['articles' => $articles]);
    }
}
