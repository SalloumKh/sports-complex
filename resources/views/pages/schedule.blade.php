@extends('layouts.main')

@section('title', 'Class Schedule')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Class Schedule</h1>
                <p class="lead">Find the perfect class to fit your schedule and fitness goals</p>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills nav-fill" id="scheduleTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active rounded-0" id="monday-tab" data-bs-toggle="tab" data-bs-target="#monday" type="button" role="tab" aria-controls="monday" aria-selected="true">Monday</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="tuesday-tab" data-bs-toggle="tab" data-bs-target="#tuesday" type="button" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="wednesday-tab" data-bs-toggle="tab" data-bs-target="#wednesday" type="button" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="thursday-tab" data-bs-toggle="tab" data-bs-target="#thursday" type="button" role="tab" aria-controls="thursday" aria-selected="false">Thursday</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="friday-tab" data-bs-toggle="tab" data-bs-target="#friday" type="button" role="tab" aria-controls="friday" aria-selected="false">Friday</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="weekend-tab" data-bs-toggle="tab" data-bs-target="#weekend" type="button" role="tab" aria-controls="weekend" aria-selected="false">Weekend</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-content" id="scheduleTabContent">
            <!-- Monday Schedule -->
            <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00 - 07:00</td>
                                        <td>
                                            <span class="fw-bold">Morning Yoga</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>08:00 - 09:00</td>
                                        <td>
                                            <span class="fw-bold">HIIT</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 - 11:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Spinning</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Cycling Room</td>
                                    </tr>
                                    <tr>
                                        <td>17:00 - 18:00</td>
                                        <td>
                                            <span class="fw-bold">Body Pump</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>19:00 - 20:00</td>
                                        <td>
                                            <span class="fw-bold">Zumba</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tuesday Schedule -->
            <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00 - 07:00</td>
                                        <td>
                                            <span class="fw-bold">CrossFit</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>08:00 - 09:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 - 11:00</td>
                                        <td>
                                            <span class="fw-bold">Aqua Aerobics</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Pool</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Boxing</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>17:00 - 18:00</td>
                                        <td>
                                            <span class="fw-bold">Yoga Flow</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>19:00 - 20:00</td>
                                        <td>
                                            <span class="fw-bold">HIIT</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Wednesday Schedule -->
            <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00 - 07:00</td>
                                        <td>
                                            <span class="fw-bold">Morning Yoga</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>08:00 - 09:00</td>
                                        <td>
                                            <span class="fw-bold">Body Sculpt</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 - 11:00</td>
                                        <td>
                                            <span class="fw-bold">Spinning</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Cycling Room</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>17:00 - 18:00</td>
                                        <td>
                                            <span class="fw-bold">CrossFit</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>19:00 - 20:00</td>
                                        <td>
                                            <span class="fw-bold">Zumba</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thursday Schedule -->
            <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00 - 07:00</td>
                                        <td>
                                            <span class="fw-bold">CrossFit</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>08:00 - 09:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 - 11:00</td>
                                        <td>
                                            <span class="fw-bold">Aqua Aerobics</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Pool</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Boxing</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>17:00 - 18:00</td>
                                        <td>
                                            <span class="fw-bold">Yoga Flow</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>19:00 - 20:00</td>
                                        <td>
                                            <span class="fw-bold">HIIT</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Friday Schedule -->
            <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00 - 07:00</td>
                                        <td>
                                            <span class="fw-bold">Morning Yoga</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>08:00 - 09:00</td>
                                        <td>
                                            <span class="fw-bold">HIIT</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 - 11:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Spinning</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>John Doe</td>
                                        <td>Cycling Room</td>
                                    </tr>
                                    <tr>
                                        <td>17:00 - 18:00</td>
                                        <td>
                                            <span class="fw-bold">Body Pump</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>19:00 - 20:00</td>
                                        <td>
                                            <span class="fw-bold">Zumba</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Weekend Schedule -->
            <div class="tab-pane fade" id="weekend" role="tabpanel" aria-labelledby="weekend-tab">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Class</th>
                                        <th>Trainer</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>09:00 - 10:00</td>
                                        <td>
                                            <span class="fw-bold">Weekend Yoga</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>10:30 - 11:30</td>
                                        <td>
                                            <span class="fw-bold">HIIT</span>
                                            <span class="badge bg-danger ms-2">Advanced</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 - 13:00</td>
                                        <td>
                                            <span class="fw-bold">Zumba</span>
                                            <span class="badge bg-info ms-2">All Levels</span>
                                        </td>
                                        <td>Sarah Williams</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>14:00 - 15:00</td>
                                        <td>
                                            <span class="fw-bold">Pilates</span>
                                            <span class="badge bg-success ms-2">Beginner</span>
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>Studio 1</td>
                                    </tr>
                                    <tr>
                                        <td>16:00 - 17:00</td>
                                        <td>
                                            <span class="fw-bold">Body Pump</span>
                                            <span class="badge bg-warning ms-2">Intermediate</span>
                                        </td>
                                        <td>Mike Johnson</td>
                                        <td>Studio 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Class Descriptions Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Class Descriptions</h2>
            <p class="lead text-muted">Learn more about our fitness classes</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Yoga</h5>
                        <p class="card-text">A mind-body practice that combines physical poses, controlled breathing, and meditation or relaxation. Yoga helps reduce stress, improve flexibility, and increase strength.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-info me-2">All Levels</span>
                            <span class="text-muted small">60 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">HIIT</h5>
                        <p class="card-text">High-Intensity Interval Training alternates between intense bursts of activity and fixed periods of less-intense activity or rest. It's great for burning fat and improving cardiovascular health.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-danger me-2">Advanced</span>
                            <span class="text-muted small">45 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pilates</h5>
                        <p class="card-text">A system of exercises designed to improve physical strength, flexibility, and posture, and enhance mental awareness. Pilates focuses on the core muscles of the abdomen and spine.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success me-2">Beginner</span>
                            <span class="text-muted small">60 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Spinning</h5>
                        <p class="card-text">An indoor cycling workout that focuses on endurance, strength, intervals, and recovery. It's a great way to improve cardiovascular fitness and burn calories.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-warning me-2">Intermediate</span>
                            <span class="text-muted small">45 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Body Pump</h5>
                        <p class="card-text">A weight-based group-fitness class that uses barbells with adjustable weights to work all major muscle groups. It's designed to improve strength and endurance.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-warning me-2">Intermediate</span>
                            <span class="text-muted small">60 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Zumba</h5>
                        <p class="card-text">A dance fitness program that combines Latin and international music with dance moves. Zumba is fun, energetic, and makes you feel amazing.</p>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-info me-2">All Levels</span>
                            <span class="text-muted small">60 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-lg-start text-center">
                <h2 class="fw-bold mb-3">Ready to Join a Class?</h2>
                <p class="lead mb-lg-0 mb-4">Sign up today and start your fitness journey!</p>
            </div>
            <div class="col-lg-4 text-lg-end text-center">
                <a href="{{ route('register') }}" class="btn btn-light btn-lg me-2">Sign Up Now</a>
                <a href="{{ route('consultations.create') }}" class="btn btn-outline-light btn-lg">Get Consultation</a>
            </div>
        </div>
    </div>
</section>
@endsection