@extends('layouts.main')

@section('title', 'Request Consultation')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Request a Consultation</h1>
                <p class="lead">Get personalized advice from our fitness experts</p>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('consultations.store') }}" method="POST">
                            @csrf
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->check() ? auth()->user()->name : old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->check() ? auth()->user()->email : old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="preferred_date" class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}">
                                    @error('preferred_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="consultation_type" class="form-label">Consultation Type</label>
                                <select class="form-select" id="consultation_type" name="consultation_type">
                                    <option value="">Select a consultation type</option>
                                    <option value="fitness_assessment" {{ old('consultation_type') == 'fitness_assessment' ? 'selected' : '' }}>Fitness Assessment</option>
                                    <option value="nutrition_plan" {{ old('consultation_type') == 'nutrition_plan' ? 'selected' : '' }}>Nutrition Plan</option>
                                    <option value="personal_training" {{ old('consultation_type') == 'personal_training' ? 'selected' : '' }}>Personal Training</option>
                                    <option value="membership_info" {{ old('consultation_type') == 'membership_info' ? 'selected' : '' }}>Membership Information</option>
                                </select>
                                @error('consultation_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label">Additional Information</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about your fitness goals or any specific questions you have...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Request Consultation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection