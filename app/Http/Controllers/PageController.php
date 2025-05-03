<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Trainer;
use App\Models\Tariff;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $latestNews = News::where('is_published', true)
            ->latest()
            ->take(3)
            ->get();
            
        $featuredTrainers = Trainer::where('is_active', true)
            ->inRandomOrder()
            ->take(4)
            ->get();
            
        $testimonials = Testimonial::where('is_approved', true)
            ->latest()
            ->take(5)
            ->get();
            
        return view('pages.index', compact('latestNews', 'featuredTrainers', 'testimonials'));
    }
    
    public function about()
    {
        $trainers = Trainer::where('is_active', true)->get();
        return view('pages.about', compact('trainers'));
    }
    
    public function schedule()
    {
        return view('pages.schedule');
    }
}
