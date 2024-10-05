@extends('components.Layout')

@section('title', 'HTML Roadmap - Home')

@section('content')
<div class="container home-container">
    <header>
        <h1 class="header-roadmap-title">Welcome to the HTML Roadmap</h1>
        <img src="{{ asset('/images/html.png') }}" alt="HTML Introduction Image" class="welcome-image">
    </header>
    <div class="introduction">
        <p>
            HTML, or HyperText Markup Language, is the standard language for creating webpages. 
            It helps structure content on the web and is one of the core technologies used to build websites.
        </p>
        <div class="sign-in-button">
            <a href="{{ url('/welcome') }}" class="btn btn-primary">Sign In</a>
        </div>
    </div>
</div>
@endsection

@section('no_footer', true)
