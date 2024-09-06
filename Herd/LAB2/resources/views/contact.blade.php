<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Contact - My Website</title>
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

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+63968 454 3266</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>sample@bicol-u.edu.ph</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>BICOL UNIVERSITY, College of Science</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- contact-form -->
  <body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
									<h1 class="mb-4 text-center">Get in touch with us</h1>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
				      		<div id="form-message-success" class="mb-4 w-100 text-center">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- contact-form -->


  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>WEB</span>DEV</h1>
      </div>
      <h2>MALLO, LLEVA, LLONA | BSIT 3C</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href=" "><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href=" "><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
        <img src="{{ asset('img/logo.JPG') }}" alt="img">
        </div>
      </div>
      <p>All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  <script src="./app.js"></script>

</body>
</html>