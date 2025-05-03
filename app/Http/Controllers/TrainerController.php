<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    // In the index or any public-facing method
    public function index()
    {
        $trainers = Trainer::where('is_active', 1)
                      ->orderBy('name')
                      ->paginate(12);
        
        return view('trainers.index', compact('trainers'));
    }
    
    public function show(Trainer $trainer)
    {
        return view('trainers.show', compact('trainer'));
    }
}
