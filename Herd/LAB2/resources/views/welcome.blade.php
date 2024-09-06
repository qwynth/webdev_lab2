<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Welcome - My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="{{ url('/') }}">
            <h1><span>WEB</span>DEV</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="{{ url('/welcome') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>  
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h2>Welcome, <span>{{ $name }}</span></h2>
        <h1>This is <span></span></h1>
        <h1><b><span>INFORMATION TECHNOLOGY<span></b></h1>
        <a href="{{ url('/about') }}" type="button" class="cta">see more</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <script src="./app.js"></script>
</body>

</html>