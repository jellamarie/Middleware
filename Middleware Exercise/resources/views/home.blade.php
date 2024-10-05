@extends('components.Layout')

 HEAD
@section('title', 'HTML Roadmap - Contact Us')

@section('content')
<div class="container contact-container">
    <div class="card">
        <div class="card-header">
            <h2>Contact Us</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('/submit-contact') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="input-box" id="email" name="email" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="input-box" id="message" name="message" required></textarea>
                </div>
                <div class="submit-home">
                    <button type="submit" class="submit-btn">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1 class="header-roadmap-title">HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image">
</header>



@section('no_footer', true)
 2513c47191c9eb566b7ce99959f1d5742b86477e
@endsection
