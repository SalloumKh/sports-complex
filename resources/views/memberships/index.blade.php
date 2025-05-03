@extends('layouts.main')

@section('title', 'My Memberships')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">My Memberships</h1>
                <p class="lead">Manage your membership plans</p>
            </div>
        </div>
    </div>
</section>

<!-- Memberships Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <div class="avatar-placeholder mb-3">
                                <span class="display-4">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                            <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                            <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('profile') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-user me-2"></i> Profile Information
                            </a>
                            <a href="{{ route('password.change') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-lock me-2"></i> Change Password
                            </a>
                            <a href="{{ route('memberships.index') }}" class="list-group-item list-group-item-action active">
                                <i class="fas fa-id-card me-2"></i> My Membership
                            </a>
                            <a href="{{ route('bookings.index') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-calendar-alt me-2"></i> My Bookings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Your Membership Plans</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <p>You don't have any active memberships yet. Check out our membership plans to get started!</p>
                            <a href="{{ route('tariffs.index') }}" class="btn btn-primary mt-2">View Membership Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.avatar-placeholder {
    width: 80px;
    height: 80px;
    background-color: #6c757d;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}
</style>