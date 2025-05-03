<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = Auth::user();
        $subscriptions = $user->subscriptions()->with('tariff')->get();
        $transactions = $user->transactions()->with('tariff')->latest()->take(5)->get();
        
        return view('profile.index', compact('user', 'subscriptions', 'transactions'));
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }
    
    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'birth_date' => 'nullable|date',
        ]);
        
        $user->update($request->only(['first_name', 'last_name', 'email', 'birth_date']));
        
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
    
    public function changePassword()
    {
        return view('profile.change-password');
    }
    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $user = Auth::user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('profile.index')->with('success', 'Password changed successfully.');
    }
}
