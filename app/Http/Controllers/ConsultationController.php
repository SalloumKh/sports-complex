<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function create()
    {
        return view('consultations.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);
        
        $consultation = Consultation::create($request->all());
        
        return redirect()->route('home')->with('success', 'Your consultation request has been sent. We will contact you soon.');
    }
}
