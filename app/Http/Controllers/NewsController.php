<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // In the index or any public-facing method
    public function index()
    {
        $news = News::where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        
        return view('news.index', compact('news'));
    }
    
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
