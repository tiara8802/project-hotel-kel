<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Luxury accommodation at Florence Hotel - Experience unparalleled comfort and service in the heart of the city">
    <meta name="author" content="Florence Hotel">
    <title>Florence Hotel - Luxury Accommodation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .hero-image {
        background-size: cover;
        background-position: center;
        min-height: 80vh;
        position: relative;
      }
      
      .hero-overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      
      .room-card {
        transition: transform 0.3s;
        margin-bottom: 20px;
      }

      .room-card img {
      object-fit: cover;
      height: 220px;
      border-radius: 8px 8px 0 0;
      }
      
      .room-card:hover {
        transform: translateY(-5px);
      }
      
      .amenity-icon {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #8B6E4B;
      }
      
      .navbar {
        transition: background-color 0.3s;
      }
      
      .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.9) !important;
      }
      
      .bg-light-brown {
        background-color: #F8F4EF;
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
      
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 20px;
      }
      
      .booking-form {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
    <main>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex flex-column align-items-start" href="#">
      <h1 class="mb-0 fw-bold" style="font-family: 'Georgia', serif; font-size: 1.8rem; letter-spacing: 2px;">FLORENCE HOTEL</h1>
      <small class="text-muted" style="letter-spacing: 1.5px;">Luxury Accommodation</small>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link active px-3" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="/room">Rooms & Suites</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#dining">Dining</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#amenities">Amenities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#contact">Contact</a>
        </li>
      </ul>

      <a href="/reservasi/create" class="btn btn-warning text-dark fw-semibold ms-3" style="letter-spacing: 1px; border-radius: 30px; padding: 8px 20px; box-shadow: 0 4px 8px rgba(255, 215, 0, 0.4); transition: background-color 0.3s ease;">
        Book Now
      </a>

      <!-- User Dropdown -->
      @auth
      <div class="dropdown ms-3">
          <a class="btn btn-outline-light dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 30px; padding: 6px 16px;">
              <i class="bi bi-person-circle fs-5 me-2"></i>
              <span>{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                  <form action="{{ route('logout') }}" method="POST" class="d-inline">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
              </li>
          </ul>
      </div>
      @endauth

      @guest
          <a href="{{ route('login') }}" class="btn btn-outline-light ms-3">Login</a>
      @endguest
    </div>
    </div>
    </nav>


    <!-- Hero Carousel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active hero-image" style="background-image: url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
          <div class="hero-overlay"></div>
          <div class="container h-100 d-flex align-items-center">
            <div class="carousel-caption text-start">
              <h1 class="display-3">Experience Unparalleled Luxury</h1>
              <p class="lead">Discover the perfect blend of comfort and elegance at Florence Hotel</p>
              <a href="#rooms" class="btn btn-gold btn-lg px-4">Explore Rooms</a>
            </div>
          </div>
        </div>
        <div class="carousel-item hero-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
          <div class="hero-overlay"></div>
          <div class="container h-100 d-flex align-items-center">
            <div class="carousel-caption">
              <h1 class="display-3">Award-Winning Dining</h1>
              <p class="lead">Savor exquisite culinary creations at our world-class restaurants</p>
              <a href="#dining" class="btn btn-gold btn-lg px-4">View Menus</a>
            </div>
          </div>
        </div>
        <div class="carousel-item hero-image" style="background-image: url('https://images.unsplash.com/photo-1539667468225-eebb663053e6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2011&q=80');">
          <div class="hero-overlay"></div>
          <div class="container h-100 d-flex align-items-center">
            <div class="carousel-caption text-end">
              <h1 class="display-3">Relax & Rejuvenate</h1>
              <p class="lead">Unwind in our luxurious spa and wellness center</p>
              <a href="#amenities" class="btn btn-gold btn-lg px-4">Spa Services</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <!-- Rooms & Suites -->
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

    <div class="text-center mt-4">
      <a href="/room" class="btn btn-outline-dark">View All Accommodations</a>
    </div>
  </div>
</section>


    <!-- Dining -->
    <section id="dining" class="py-5 bg-light-brown">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Dining Experiences</h2>
          <p class="lead">Culinary excellence at its finest</p>
        </div>
        
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100 border-0">
              <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="The Grand Restaurant">
              <div class="card-body">
                <h5 class="card-title">The Grand Restaurant</h5>
                <p class="card-text">Our signature dining venue offering contemporary cuisine with seasonal ingredients in an elegant setting.</p>
                <p class="text-muted"><i class="bi bi-clock"></i> Breakfast: 7am-11am | Dinner: 6pm-11pm</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card h-100 border-0">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Lobby Lounge">
              <div class="card-body">
                <h5 class="card-title">Lobby Lounge</h5>
                <p class="card-text">Relax with afternoon tea, light bites, and crafted cocktails in our sophisticated lounge atmosphere.</p>
                <p class="text-muted"><i class="bi bi-clock"></i> Daily: 11am-11pm</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card h-100 border-0">
              <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Rooftop Bar">
              <div class="card-body">
                <h5 class="card-title">Rooftop Bar</h5>
                <p class="card-text">Enjoy breathtaking city views with our selection of fine wines, champagne, and artisanal cocktails.</p>
                <p class="text-muted"><i class="bi bi-clock"></i> Mon-Sat: 4pm-1am | Sun: 4pm-11pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Amenities -->
    <section id="amenities" class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Hotel Amenities</h2>
          <p class="lead">Everything you need for a perfect stay</p>
        </div>
        
        <div class="row text-center g-4">
          <div class="col-md-3">
            <div class="amenity-icon">
              <i class="bi bi-water"></i>
            </div>
            <h4>Infinity Pool</h4>
            <p class="text-muted">Stunning rooftop pool with panoramic city views</p>
          </div>
          
          <div class="col-md-3">
            <div class="amenity-icon">
              <i class="bi bi-droplet"></i>
            </div>
            <h4>Spa & Wellness</h4>
            <p class="text-muted">Full-service spa with premium treatments</p>
          </div>
          
          <div class="col-md-3">
            <div class="amenity-icon">
              <i class="bi bi-heart-pulse"></i>
            </div>
            <h4>Fitness Center</h4>
            <p class="text-muted">State-of-the-art equipment available 24/7</p>
          </div>
          
          <div class="col-md-3">
            <div class="amenity-icon">
              <i class="bi bi-wifi"></i>
            </div>
            <h4>High-Speed WiFi</h4>
            <p class="text-muted">Complimentary throughout the hotel</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light-brown">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Guest Reviews</h2>
          <p class="lead">What our guests say about us</p>
        </div>
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card border-0 bg-transparent">
                    <div class="card-body text-center">
                      <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle mb-3" width="80" alt="Guest">
                      <p class="lead">"The Florence Hotel exceeded all our expectations. The service was impeccable, the room was stunning, and the location was perfect. We'll definitely be back!"</p>
                      <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <h5>Sarah Johnson</h5>
                      <small class="text-muted">New York, USA</small>
                    </div>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <div class="card border-0 bg-transparent">
                    <div class="card-body text-center">
                      <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3" width="80" alt="Guest">
                      <p class="lead">"From the moment we arrived, the staff made us feel special. The attention to detail is remarkable, and the dining options are world-class. A truly memorable experience."</p>
                      <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <h5>Michael Chen</h5>
                      <small class="text-muted">London, UK</small>
                    </div>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <div class="card border-0 bg-transparent">
                    <div class="card-body text-center">
                      <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle mb-3" width="80" alt="Guest">
                      <p class="lead">"The spa treatments were divine, and our suite was absolutely breathtaking. Florence Hotel has set a new standard for luxury accommodation in our travels."</p>
                      <div class="text-warning mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <h5>Elena Rodriguez</h5>
                      <small class="text-muted">Madrid, Spain</small>
                    </div>
                  </div>
                </div>
              </div>
              
              <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mb-4">Contact Us</h2>
            <p>We'd love to hear from you. Whether you have questions about reservations, events, or our services, our team is ready to assist you.</p>
            
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-geo-alt-fill text-brown me-2"></i> 123 Luxury Avenue, Florence, Italy</li>
              <li class="mb-3"><i class="bi bi-telephone-fill text-brown me-2"></i> +39 055 123 4567</li>
              <li class="mb-3"><i class="bi bi-envelope-fill text-brown me-2"></i> reservations@florencehotel.com</li>
            </ul>
            
            <div class="mt-4">
              <h5>Follow Us</h5>
              <div class="d-flex gap-3">
                <a href="#" class="text-dark"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-pinterest fs-4"></i></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
              <div class="card-body p-4">
                <h5 class="card-title mb-4">Send us a message</h5>
                <form>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-gold">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <h5 class="mb-4">FLORENCE HOTEL</h5>
            <p>Experience the pinnacle of luxury hospitality in the heart of Florence. Our commitment to excellence ensures every stay is memorable.</p>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="mb-4">Quick Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
              <li class="mb-2"><a href="#rooms" class="text-white text-decoration-none">Rooms</a></li>
              <li class="mb-2"><a href="#dining" class="text-white text-decoration-none">Dining</a></li>
              <li class="mb-2"><a href="#amenities" class="text-white text-decoration-none">Amenities</a></li>
              <li class="mb-2"><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="mb-4">Contact Info</h5>
            <address>
              123 Luxury Avenue<br>
              Florence, Italy 50123<br><br>
              <strong>Phone:</strong> +39 055 123 4567<br>
              <strong>Email:</strong> info@florencehotel.com
            </address>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Newsletter</h5>
            <p>Subscribe to receive updates and special offers.</p>
            <form>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Your Email">
                <button class="btn btn-gold" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
        
        <hr class="my-4">
        
        <div class="row">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0">&copy; 2023 Florence Hotel. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
            <a href="#" class="text-white text-decoration-none">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Navbar scroll effect
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
      
      // Initialize all carousels
      document.addEventListener('DOMContentLoaded', function() {
        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach(function(carousel) {
          new bootstrap.Carousel(carousel);
        });
      });
    </script>
  </body>
</html>