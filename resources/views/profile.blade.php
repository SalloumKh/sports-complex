@extends('layouts.app') {{-- Or your main layout file --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Display User Information --}}
                    <p><strong>{{ __('Name') }}:</strong> {{ $user->name }}</p>
                    <p><strong>{{ __('Email Address') }}:</strong> {{ $user->email }}</p>
                    {{-- Add other profile fields as needed --}}
                    <p><strong>{{ __('Phone') }}:</strong> {{ $user->phone ?? 'N/A' }}</p>
                    <p><strong>{{ __('Member Since') }}:</strong> {{ $user->created_at->format('d M Y') }}</p>

                    <hr>

                    {{-- Link to update profile (if you have that functionality) --}}
                    {{-- <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Edit Profile') }}</a> --}}

                    {{-- Link to change password --}}
                    <a href="{{ route('password.change') }}" class="btn btn-secondary">{{ __('Change Password') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection