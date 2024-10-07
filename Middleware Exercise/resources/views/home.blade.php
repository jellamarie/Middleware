@extends('components.Layout')

@section('title', 'HTML Roadmap - Home')

@section('content')
<div class="container home-container">
    <header>
        <h1 class="header-roadmap-title">Welcome to the HTML Roadmap</h1>
    </header>
    <div class="introduction">
        <p>
            HTML, or HyperText Markup Language, is the standard language for creating webpages. 
            It helps structure content on the web and is one of the core technologies used to build websites.
        </p>
        <form action="{{ url('/welcome') }}" method="get">
            <button type="submit" class="btn btn-primary sign-in-button">Sign In</button>
        </form>
    </div>
</div>
@endsection

@section('no_footer', true)
