@extends('layouts.main')

@section('title', 'Submit Testimonial')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Share Your Experience</h1>
                <p class="lead">We value your feedback about our sports complex</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('testimonials.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="rating" class="form-label">Your Rating</label>
                                <div class="rating-stars mb-2">
                                    <div class="d-flex">
                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rating{{ $i }}">
                                                    <i class="fas fa-star"></i>
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                @error('rating')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="content" class="form-label">Your Testimonial</label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Share your experience with us...">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Testimonial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection