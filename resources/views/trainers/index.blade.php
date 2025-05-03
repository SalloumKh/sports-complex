@extends('layouts.main')

@section('title', 'Our Trainers')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Our Professional Trainers</h1>
                <p class="lead">Meet our team of expert fitness professionals</p>
            </div>
        </div>
    </div>
</section>

<!-- Trainers Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @forelse($trainers as $trainer)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        @if($trainer->photo)
                            <img src="{{ asset('storage/' . $trainer->photo) }}" class="card-img-top" alt="{{ $trainer->name }}">
                        @else
                            <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="{{ $trainer->name }}">
                        @endif
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $trainer->name }}</h5>
                            <p class="text-muted">{{ $trainer->specialization }}</p>
                            <p class="card-text">{{ Str::limit($trainer->bio, 100) }}</p>
                            <a href="{{ route('trainers.show', $trainer) }}" class="btn btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3>No trainers available at the moment.</h3>
                    <p>Please check back later for updates.</p>
                </div>
            @endforelse
        </div>
        
        <div class="mt-4 d-flex justify-content-center">
            {{ $trainers->links() }}
        </div>
    </div>
</section>
@endsection