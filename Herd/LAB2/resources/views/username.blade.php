<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Username - My Website</title>
</head>

<body>
    <form action="{{ url('/welcome') }}" method="POST">
        @csrf 
    <div class="centered-container">
        <div class="box-container">
        <div class="username-box">
            <div class="username-header">
                <header>Enter your Name</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="username" name="username" autocomplete="off">
            </div>
            <div class="input-submit">
                <button type="submit" class="submit-btn">Enter</button>
            </div>
        </div>
</div>
</div>
    </form>
</body>
</html>