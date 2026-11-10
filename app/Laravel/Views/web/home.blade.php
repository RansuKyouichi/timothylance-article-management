@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-3 text-dark">Welcome to Your Laravel 12 Application</h1>
        <p class="lead text-secondary mb-4">
            You're running Laravel 12 with a custom structure and modern tooling.
        </p>
        <div class="d-flex justify-content-center gap-2">
            <a href="https://laravel.com/docs/12.x" target="_blank" class="btn btn-primary btn-lg">
                Documentation
            </a>
            <a href="{{ url('/health') }}" class="btn btn-outline-secondary btn-lg">
                Health Check
            </a>
            <a href="{{ url('/about') }}" class="btn btn-outline-secondary btn-lg">
                About Page
            </a>
        </div>
    </div>
</main>
<footer class="text-center text-muted py-3 mt-auto">
    &copy; {{ date('Y') }} Laravel 12 Starter. Built with ❤️.
</footer>

@endsection

@section('page-styles')
    <!-- Page-specific styles can be added here -->

@endsection