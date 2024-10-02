@extends('components.Layout')

@section('title', 'HTML Roadmap - Home')

@section('content')
<header>
    <h1 class="header-roadmap-title">HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image">
</header>

<div class="container1">
    <h3>Welcome to HTML Roadmaps, your go-to resource for mastering HTML!
        Whether you're a beginner or looking to refine your web development skills,
        our site offers a collection of structured lectures designed to guide you through the fundamentals of HTML.
        Start your journey to building stunning websites with our easy-to-follow lessons and practical examples.</h3>
</div>
@endsection

