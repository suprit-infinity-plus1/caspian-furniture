@extends('layouts.master')

@section('content')
<div class="container text-center py-5 my-5" style="min-height: 50vh; display: flex; align-items: center; justify-content: center;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 rounded-4 p-5">
                <div class="mb-4 text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                </div>
                <h1 class="display-5 fw-bold mb-3">Thank You!</h1>
                <p class="lead text-muted mb-4">Your message has been successfully received. Our team will review your inquiry and get back to you shortly.</p>
                <a href="{{ route('home') }}" class="tf-btn btn-fill animate-hover-btn">
                    <span>Return to Home</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
