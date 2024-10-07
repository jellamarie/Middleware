@extends('Components.layout')

@php
    $title = 'Restricted Area';
@endphp

@push('styles')
    <link href="{{ asset('css/access-denied.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'font-sans antialiased dark:bg-black dark:text-white/50')

@section('main-class', 'main-content')

@section('content')
    <div class="blur-background"></div>

    <div class="center-container">
        <h1>Access Denied</h1>
        <p>You must be at least 18 years old to access this content.</p>
        
        <!-- Redirect Button -->
        <a href="{{ url('/') }}" class="redirect-button">Back</a>
    </div>
@endsection
