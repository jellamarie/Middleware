@extends('components.Layout')

@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1 class="header-roadmap-title">HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image">
</header>



@section('no_footer', true)

@endsection
