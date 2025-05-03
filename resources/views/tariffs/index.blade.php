@extends('layouts.main')

@section('title', 'Membership Plans')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Membership Plans</h1>
                <p class="lead">Choose the perfect plan for your fitness journey</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @forelse($tariffs as $tariff)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title">{{ $tariff->name }}</h3>
                            <div class="py-3">
                                <span class="display-5 fw-bold">${{ number_format($tariff->price, 2) }}</span>
                                <span class="text-muted">/ {{ $tariff->duration }}</span>
                            </div>
                            <div class="py-3">
                                {!! $tariff->description !!}
                            </div>
                            <ul class="list-unstyled mb-4">
                                @foreach(explode("\n", $tariff->features) as $feature)
                                    @if(trim($feature))
                                        <li class="mb-2">
                                            <i class="fas fa-check text-success me-2"></i>{{ trim($feature) }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg w-100">Choose Plan</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3>No membership plans available at the moment.</h3>
                    <p>Please check back later for updates.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">Everything you need to know about our membership plans</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Can I freeze my membership?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can freeze your membership for up to 30 days per year. This option is available for all membership plans.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is there a joining fee?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                There is a one-time joining fee of $50 for all new members. This fee is waived during promotional periods.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I cancel my membership?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can cancel your membership with 30 days' notice. Please contact our customer service team to initiate the cancellation process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection