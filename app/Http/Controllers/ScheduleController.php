<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('trainer')->get()->groupBy('day_of_week');
        return view('schedule.index', compact('schedules'));
    }
}
