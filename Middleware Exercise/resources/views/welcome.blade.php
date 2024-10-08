@extends('components.Layout')

@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1 class="header-roadmap-title">HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image welcome-roadmap-image">
</header>

<div class="container">
    <div class="form-box">
        <form action="{{ url('/user') }}" method="GET">
            <label for="username">Enter your username:</label>
            <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
        </form>
            <br><br>
        <form action="{{ route('store.age') }}" method="POST">
        @csrf
            <label for="age">Enter your age:</label>
            <input type="text" name="age"  id="age" required min="1" max="100">
            <div class="submit-home">
            <button type="submit">Submit</button>  
            </div>
</form>
            
       
    </div>
</div>

@section('no_footer', true)

@endsection

