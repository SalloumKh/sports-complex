@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-dark text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Transform Your Body, Transform Your Life</h1>
                <p class="lead mb-4">Join our sports complex and get access to state-of-the-art equipment, professional trainers, and a supportive community.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('tariffs.index') }}" class="btn btn-primary btn-lg">Join Now</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/complex/sports-complex.png') }}" 
                     alt="Sports Complex Facility" 
                     class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Our Sports Complex?</h2>
            <p class="lead text-muted">We offer everything you need for your fitness journey</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <h4>Modern Equipment</h4>
                        <p class="text-muted">Access to the latest fitness equipment to help you achieve your goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4>Expert Trainers</h4>
                        <p class="text-muted">Our certified trainers will guide you through your fitness journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                            <i class="fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h4>Flexible Schedule</h4>
                        <p class="text-muted">Various classes throughout the day to fit your busy schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
@if($latestNews->count() > 0)
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Latest News</h2>
            <p class="lead text-muted">Stay updated with our latest events and announcements</p>
        </div>
        <div class="row g-4">
            @foreach($latestNews as $news)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="{{ $news->title }}">
                    @else
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $news->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                        <a href="{{ route('news.show', $news) }}" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                    <div class="card-footer bg-white text-muted">
                        <small>{{ $news->created_at->format('M d, Y') }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('news.index') }}" class="btn btn-primary">View All News</a>
        </div>
    </div>
</section>
@endif

<!-- Featured Trainers Section -->
@if($featuredTrainers->count() > 0)
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Trainers</h2>
            <p class="lead text-muted">Professional trainers to help you achieve your fitness goals</p>
        </div>
        <div class="row g-4">
            @foreach($featuredTrainers as $trainer)
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    @if($trainer->photo)
                    <img src="{{ asset('storage/' . $trainer->photo) }}" class="card-img-top" alt="{{ $trainer->name }}">
                    @else
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="{{ $trainer->name }}">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $trainer->name }}</h5>
                        <p class="card-text text-muted">{{ $trainer->specialization }}</p>
                        <a href="{{ route('trainers.show', $trainer) }}" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('trainers.index') }}" class="btn btn-primary">View All Trainers</a>
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if($testimonials->count() > 0)
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Members Say</h2>
            <p class="lead text-muted">Testimonials from our satisfied members</p>
        </div>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials as $key => $testimonial)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="card border-0 shadow-sm mx-auto" style="max-width: 700px;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-4">
                                @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-warning' : 'text-muted' }}"></i>
                                @endfor
                            </div>
                            <p class="lead mb-4">"{{ $testimonial->content }}"</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="rounded-circle overflow-hidden me-3" style="width: 50px; height: 50px;">
                                    <img src="https://via.placeholder.com/50x50" alt="Member" class="img-fluid">
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0">{{ $testimonial->user->first_name }} {{ $testimonial->user->last_name }}</h6>
                                    <small class="text-muted">Member since {{ $testimonial->user->created_at->format('M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Leave Your Review</a>
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-lg-start text-center">
                <h2 class="fw-bold mb-3">Ready to Start Your Fitness Journey?</h2>
                <p class="lead mb-lg-0 mb-4">Join our sports complex today and transform your life!</p>
            </div>
            <div class="col-lg-4 text-lg-end text-center">
                <a href="{{ route('register') }}" class="btn btn-light btn-lg me-2">Sign Up Now</a>
                <a href="{{ route('consultations.create') }}" class="btn btn-outline-light btn-lg">Get Consultation</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<style>
.feature-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
}
.hero-section {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://via.placeholder.com/1920x1080');
    background-size: cover;
    background-position: center;
}
</style>
@endsection