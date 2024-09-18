<!-- resources/views/username.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - My Website') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
<form action="{{ url('/welcome') }}" method="POST">
    @csrf 
    <div class="centered-container">
        <div class="box-container">
        <div class="username-box">
            <div class="username-header">
                <header>Enter your Name</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="username" name="username" autocomplete="off" value="{{ request('username') }}" pattern="[a-zA-Z]+" title="Please enter only alphabetic characters.">
            </div>
            <div class="input-submit">
                <button type="submit" class="submit-btn">Enter</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection