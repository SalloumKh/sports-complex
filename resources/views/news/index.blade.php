@extends('layouts.main')

@section('title', 'News')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Latest News</h1>
                <p class="lead">Stay updated with the latest happenings at our sports complex</p>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @forelse($news as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        @else
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="{{ $item->title }}">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small class="text-muted">{{ $item->created_at->format('M d, Y') }}</small>
                            </div>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($item->content), 150) }}</p>
                            <a href="{{ route('news.show', $item) }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3>No news available at the moment.</h3>
                    <p>Please check back later for updates.</p>
                </div>
            @endforelse
        </div>
        
        <div class="mt-4 d-flex justify-content-center">
            {{ $news->links() }}
        </div>
    </div>
</section>
@endsection