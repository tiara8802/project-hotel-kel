<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Florence Hotel - Rooms & Suites</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .section-title {
      font-family: 'Georgia', serif;
      font-weight: 700;
      font-size: 2.5rem;
      letter-spacing: 2px;
    }
    .text-brown {
        color: #8B6E4B;
      }
      
      .btn-gold {
        background-color: #8B6E4B;
        color: white;
        border: none;
      }
      
      .btn-gold:hover {
        background-color: #6B5639;
        color: white;
      }
    .room-card img {
      object-fit: cover;
      height: 220px;
      border-radius: 8px 8px 0 0;
    }
    .highlight-icon {
      font-size: 2rem;
      color: #d4af37;
    }
    .content-section {
      background: white;
      padding: 3rem 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
      margin-bottom: 3rem;
    }
  </style>
</head>
<body>

  <header class="bg-dark py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="#" class="navbar-brand text-white fs-3 fw-bold" style="font-family: 'Georgia', serif;">FLORENCE HOTEL</a>
      <nav>
        <a href="index.html" class="btn btn-outline-light btn-sm">Back to Home</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <!-- Section Intro -->
    <section class="text-center mb-5">
      <h2 class="section-title">Rooms & Suites</h2>
      <p class="lead text-muted">Discover elegant accommodations designed for your ultimate comfort and luxury during your stay.</p>
    </section>

    <!-- Section Highlights -->
    <section class="content-section">
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <i class="bi bi-award highlight-icon mb-2"></i>
          <h5>Premium Quality</h5>
          <p>All rooms feature high-end furnishings and modern amenities to ensure a memorable stay.</p>
        </div>
        <div class="col-md-4 mb-4">
          <i class="bi bi-building highlight-icon mb-2"></i>
          <h5>Spacious Suites</h5>
          <p>From Deluxe to Presidential Suites, enjoy generous space tailored for relaxation and work.</p>
        </div>
        <div class="col-md-4 mb-4">
          <i class="bi bi-people highlight-icon mb-2"></i>
          <h5>Exceptional Service</h5>
          <p>Our staff are dedicated to providing personalized service including 24/7 butler assistance for top-tier suites.</p>
        </div>
      </div>
    </section>

    <!-- Section Rooms & Suites Cards -->
    <section id="rooms" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Rooms & Suites</h2>
      <p class="lead">Comfortable spaces crafted for a perfect stay</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card room-card h-100">
          <img src="{{ asset('images/room1.jpg') }}" class="card-img-top" alt="Single Room">
          <div class="card-body">
            <h5 class="card-title">Single Room</h5>
            <p class="card-text">A cozy room perfect for solo travelers, offering all the essentials for a restful night.</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check-circle text-brown"></i> 250 sq. ft.</li>
              <li><i class="bi bi-check-circle text-brown"></i> Single bed</li>
              <li><i class="bi bi-check-circle text-brown"></i> Free high-speed WiFi</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold">From $149/night</span>
              <a href="/reservasi/create" class="btn btn-sm btn-gold">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card room-card h-100">
          <img src="{{ asset('images/room2.jpg') }}" class="card-img-top" alt="Double Room">
          <div class="card-body">
            <h5 class="card-title">Double Room</h5>
            <p class="card-text">Ideal for two guests, this room offers a stylish retreat with modern comfort and space.</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check-circle text-brown"></i> 400 sq. ft.</li>
              <li><i class="bi bi-check-circle text-brown"></i> Queen bed or two twin beds</li>
              <li><i class="bi bi-check-circle text-brown"></i> Smart TV & workspace</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold">From $219/night</span>
              <a href="/reservasi/create" class="btn btn-sm btn-gold">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card room-card h-100">
          <img src="{{ asset('images/room3.jpg') }}" class="card-img-top" alt="Suite Room">
          <div class="card-body">
            <h5 class="card-title">Suite Room</h5>
            <p class="card-text">An elegant suite with a separate living area and premium amenities for the ultimate experience.</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check-circle text-brown"></i> 800 sq. ft.</li>
              <li><i class="bi bi-check-circle text-brown"></i> King bed + lounge space</li>
              <li><i class="bi bi-check-circle text-brown"></i> Complimentary breakfast & minibar</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold">From $379/night</span>
              <a href="/reservasi/create" class="btn btn-sm btn-gold">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


    <div class="text-center mb-5">
      <a href="/layout" class="btn btn-outline-dark btn-lg px-4">Back to Home</a>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
