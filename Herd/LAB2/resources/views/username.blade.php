@extends('Components.Layout')
@section('title', 'Username - My Website')

@section('content')

<!-- Age Verification Modal -->
<div id="ageModal" class="modal" style="display: block;"> <!-- Show by default -->
    <div class="modal-content">
        <h2>Age Verification</h2>
        <h3>Please enter your age:</h3>
        
        <input type="number" class="AgeInput" id="ageInput" placeholder="Enter your age" required>
        <button id="submitAgeButton" class="modal-btn">Submit</button>
    </div>
</div>

<!-- Username Form (Initially Hidden) -->
<form id="usernameForm" action="{{ url('/welcome') }}" method="POST" style="display:none;">
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
<!-- Styles for Modal -->
<style>
    .modal {
        display: none; /* Hide modals by default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: transparent;
        margin: 15% auto;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 35%;
        box-shadow: 0 0 15px #ffff;
        border-color: #fff;
    }
    .modal-content > h2 {
        color: crimson;
    }

    .modal-btn {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: crimson;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
        cursor: pointer;
        border-radius: 30px;
        transition: .3s; 
    }

    .submit-btn:hover {
    background: red;
    transform: scale(1.05,1);
    }
</style>
<!-- JavaScript to handle modal functionality -->
<script>
    document.getElementById('submitAgeButton').addEventListener('click', function () {
        var age = document.getElementById('ageInput').value;

        if (age >= 21) {
            // Redirect to the restricted area if age is 21 or older
            window.location.href = '/restricted-area';
        } else if (age >= 18) {
            // Valid age: hide age modal and show username form
            document.getElementById('ageModal').style.display = 'none';
            document.getElementById('usernameForm').style.display = 'block';
            // Store age in session
            fetch('/store-age', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ age: age })
            });
        } else {
            // Invalid age: redirect to access denied page
            window.location.href = '/access-denied';
        }
    });
</script>


@endsection
