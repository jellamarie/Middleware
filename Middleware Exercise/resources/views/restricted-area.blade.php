ACCESS DENIED

@extends('Components.layout')

@php
    $title = 'Access Denied';
@endphp

@push('styles')
    <link href="{{ asset('css/access-denied.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'font-sans antialiased dark:bg-black dark:text-white/50')

@section('main-class', 'main-content')

@section('content')

        <h1>Restricted Area</h1>
        <p>Welcome to the RESTRICTED AREA.</p>
    </div>
@endsection
    