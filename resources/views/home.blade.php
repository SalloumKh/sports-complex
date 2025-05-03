@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Dashboard') }}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                    </form>
                </div>

                <div class="card-body">
                    @auth
                        <h4>Welcome, {{ $user->first_name }} {{ $user->last_name }}!</h4>
                    @else
                        <h4>Welcome, Guest!</h4>
                    @endauth
                    <p>You are logged in successfully.</p>
                    
                    <div class="mt-4">
                        <h5>What would you like to do?</h5>
                        <div class="list-group mt-3">
                            <a href="{{ route('home') }}#schedule" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                View Class Schedule
                                <span class="badge bg-primary rounded-pill">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <a href="{{ route('home') }}#plans" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Browse Membership Plans
                                <span class="badge bg-primary rounded-pill">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <a href="{{ route('home') }}#trainers" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Meet Our Trainers
                                <span class="badge bg-primary rounded-pill">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <a href="{{ route('home') }}#feedback" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Leave Feedback
                                <span class="badge bg-primary rounded-pill">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                            <a href="{{ route('home') }}#consultation" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Request Consultation
                                <span class="badge bg-primary rounded-pill">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
