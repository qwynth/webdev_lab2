<!-- resources/views/welcome.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Welcome - My Website') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->
<!-- Hero Section  -->
<section id="hero">
    <div class="hero container">
        <div>
            <h2>Welcome, <span>{{ $name }}</span></h2>
            <h1>This is <span></span></h1>
            <h1><b><span>INFORMATION TECHNOLOGY</span></b></h1>
            <a href="{{ url('/about') }}" type="button" class="cta">See more</a>
        </div>
    </div>
</section>
<!-- End Hero Section  -->
@endsection