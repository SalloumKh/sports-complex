<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function create()
    {
        return view('testimonials.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        
        $testimonial = Testimonial::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
            'rating' => $request->rating,
            'is_approved' => false,
        ]);
        
        return redirect()->route('home')->with('success', 'Thank you for your feedback! It will be published after moderation.');
    }
    
    // In the index or any public-facing method
    public function index()
    {
        $testimonials = Testimonial::where('is_approved', 1)
                                  ->orderBy('created_at', 'desc')
                                  ->paginate(10);
        
        return view('testimonials.index', compact('testimonials'));
    }
}
