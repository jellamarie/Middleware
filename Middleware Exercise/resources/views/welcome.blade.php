@extends('components.Layout')

@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1 class="header-roadmap-title">HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image">
</header>

<div class="container">
    <div class="form-box">
        <form action="{{ url('/user') }}" method="GET">
            <label for="username">Enter your username:</label>
            <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required >
            <br><br>
            <label for="username">Enter your age:</label>
            <input type="number" name="age" id="age" required min="1" max="100">
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection

