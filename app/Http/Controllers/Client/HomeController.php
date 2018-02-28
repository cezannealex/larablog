<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;

class HomeController extends Controller
{
    //
    public function index() {
        $top_articles = Article::orderBy('created_at', 'desc')->take(1)->get();
        $featured_articles = Article::orderBy('created_at', 'desc')->skip(1)->take(2)->get();

        $top_categories = Category::take(3)->get();
        // dd($top_articles);

        return view('client.home', compact('top_articles', 'featured_articles', 'top_categories'));
    }
}

