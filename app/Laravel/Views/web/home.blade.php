@extends('web._layouts.main')

@section('content')
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-3 text-dark">Welcome to AMS</h1>
        <p class="lead text-secondary mb-4">
            This is a Laravel web application that serves as a simple Article Management System (AMS).
        </p>
        <div class="d-flex justify-content-center gap-2">
            <a href="https://laravel.com/docs/12.x" target="_blank" class="btn btn-primary btn-lg">
                Documentation
            </a>
            <a href="{{ url('/health') }}" class="btn btn-outline-secondary btn-lg">
                Health Check
            </a>
        </div>
    </div>

@endsection 