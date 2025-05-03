@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<style>
    .about-page-bg {
        background-image: url("{{ asset('images/about/about.png') }}");
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    .about-page-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.85);
    }
    .about-page-content {
        position: relative;
    }
    .bg-light {
        background-color: rgba(248, 249, 250, 0.9) !important;
    }
    .bg-primary {
        background-color: rgba(13, 110, 253, 0.9) !important;
    }
</style>

<!-- Hero Section -->
<section class="about-page-bg text-dark py-5">
    <div class="container about-page-content">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">About Our Sports Complex</h1>
                <p class="lead">Learn more about our mission, values, and the team behind our success</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-page-bg py-5">
    <div class="container about-page-content">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bg-white p-3 rounded shadow-lg">
                    <img src="{{ asset('images/about/about.png') }}" 
                         alt="Sports Complex Facility" 
                         class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Story</h2>
                <p>Founded in 2010, our sports complex has been dedicated to helping people achieve their fitness goals and lead healthier lives. What started as a small gym has grown into a comprehensive fitness center with state-of-the-art equipment and a wide range of services.</p>
                <p>Our mission is to create a welcoming and supportive environment where individuals of all fitness levels can work towards their personal goals. We believe that fitness is not just about physical strength but also about mental well-being and community.</p>
                <p>Over the years, we have helped thousands of members transform their bodies and lives through personalized training programs, group classes, and nutritional guidance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="about-page-bg py-5">
    <div class="container about-page-content">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Core Values</h2>
            <p class="lead text-muted">The principles that guide everything we do</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h4>Passion</h4>
                        <p class="text-muted">We are passionate about fitness and helping our members achieve their goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4>Community</h4>
                        <p class="text-muted">We foster a supportive community where everyone feels welcome and motivated.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-trophy fa-2x"></i>
                        </div>
                        <h4>Excellence</h4>
                        <p class="text-muted">We strive for excellence in everything we do, from our facilities to our services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section class="about-page-bg py-5">
    <div class="container about-page-content">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Facilities</h2>
            <p class="lead text-muted">State-of-the-art equipment and amenities for your fitness journey</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <h5>Modern Gym Area</h5>
                        <p class="text-muted">Our gym is equipped with the latest fitness machines and free weights to help you achieve your fitness goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h5>Group Class Studios</h5>
                        <p class="text-muted">Spacious studios for various group classes including yoga, pilates, zumba, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-swimming-pool fa-2x"></i>
                        </div>                    
                        <h5 class="card-title">Swimming Pool</h5>
                        <p class="card-text text-muted">A 25-meter swimming pool for lap swimming, aqua aerobics, and relaxation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="about-page-bg py-5">
    <div class="container about-page-content">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Team</h2>
            <p class="lead text-muted">Meet the dedicated professionals behind our sports complex</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 bg-light">
                    <img src="{{ asset('images/about/team/john-doe.jpg') }}" class="card-img-top" alt="John Doe" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="text-muted">General Manager</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 bg-light">
                    <img src="{{ asset('images/about/team/jane-smith.jpg') }}" class="card-img-top" alt="Jane Smith" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="text-muted">Fitness Director</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 bg-light">
                    <img src="{{ asset('images/about/team/mike-johnson.jpg') }}" class="card-img-top" alt="Mike Johnson" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mike Johnson</h5>
                        <p class="text-muted">Head Trainer</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 bg-light">
                    <img src="{{ asset('images/about/team/sarah-williams.jpg') }}" class="card-img-top" alt="Sarah Williams" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sarah Williams</h5>
                        <p class="text-muted">Nutritionist</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trainers Section -->
@if(count($trainers) > 0)
<section class="about-page-bg py-5">
    <div class="container about-page-content">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Professional Trainers</h2>
            <p class="lead text-muted">Expert guidance for your fitness journey</p>
        </div>
        <div class="row g-4">
            @foreach($trainers as $trainer)
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 bg-light">
                    @if($trainer->photo)
                    <img src="{{ asset('storage/' . $trainer->photo) }}" class="card-img-top" alt="{{ $trainer->name }}" style="height: 200px; object-fit: cover;">
                    @else
                    <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-user fa-5x text-white"></i>
                    </div>
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $trainer->name }}</h5>
                        <p class="text-muted">{{ $trainer->specialization }}</p>
                        <a href="{{ route('trainers.show', $trainer) }}" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-lg-start text-center">
                <h2 class="fw-bold mb-3">Ready to Join Our Community?</h2>
                <p class="lead mb-lg-0 mb-4">Start your fitness journey with us today!</p>
            </div>
            <div class="col-lg-4 text-lg-end text-center">
                <a href="{{ route('register') }}" class="btn btn-light btn-lg me-2">Sign Up Now</a>
                <a href="{{ route('consultations.create') }}" class="btn btn-outline-light btn-lg">Get Consultation</a>
            </div>
        </div>
    </div>
</section>
@endsection