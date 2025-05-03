<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Tariff;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Tariff $tariff)
    {
        return view('subscriptions.create', compact('tariff'));
    }
    
    public function store(Request $request, Tariff $tariff)
    {
        $user = Auth::user();
        
        // Create transaction
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'tariff_id' => $tariff->id,
            'amount' => $tariff->price,
            'status' => 'success',
        ]);
        
        // Create subscription
        $startDate = Carbon::now();
        $endDate = $startDate->copy()->addDays($tariff->duration_days);
        
        $subscription = Subscription::create([
            'user_id' => $user->id,
            'tariff_id' => $tariff->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => 'active',
        ]);
        
        // Update user's tariff
        $user->update(['tariff_id' => $tariff->id]);
        
        return redirect()->route('profile.index')->with('success', 'Subscription purchased successfully.');
    }
}
