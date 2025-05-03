@extends('layouts.main')

@section('title', 'Change Password')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Change Password</h1>
                <p class="lead">Update your account password</p>
            </div>
        </div>
    </div>
</section>

<!-- Change Password Section -->
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
                            <a href="{{ route('password.change') }}" class="list-group-item list-group-item-action active">
                                <i class="fas fa-lock me-2"></i> Change Password
                            </a>
                            <a href="{{ route('memberships.index') }}" class="list-group-item list-group-item-action">
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
                        <h5 class="mb-0">Change Password</h5>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
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