<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){

        $newsData = News::latest();

        if (request('search')) {
            $newsData->where('title', '1');
        }

        return view('frontend/news', [
            'title' => 'News',
            'news'  => News::latest()->where('status', '1')->get()
            // 'news'  => News::where('status', '1')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function show(News $news)
    {
        return view('frontend/news-detail', [
            "title" => "News Detail",
            "news" => $news
        ]);
    }
}
