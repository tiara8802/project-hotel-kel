<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Reservasi Kamar | Florence Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --primary: #6d8bce;
      --primary-light: #e8f1fa;
      --primary-dark: #4a6fc7;
      --accent: #ff9e7d;
      --text: #4a5568;
      --text-light: #718096;
      --border: #e2e8f0;
    }
    
    body {
      background: url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      position: relative;
      color: var(--text);
    }
    
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.85);
      z-index: -1;
    }
    
    .container {
      padding-top: 60px;
      padding-bottom: 60px;
    }
    
    .card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(109, 139, 206, 0.15);
      background: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(109, 139, 206, 0.2);
    }
    
    .card-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      padding: 2.5rem 2rem;
      text-align: center;
      border-bottom: none;
    }
    
    .card-header h3 {
      font-weight: 600;
      letter-spacing: 0.5px;
      margin-bottom: 0.5rem;
    }
    
    .card-header p {
      font-weight: 300;
      opacity: 0.9;
      font-size: 0.95rem;
    }
    
    .form-control, .form-select {
      border-radius: 8px;
      padding: 12px 15px;
      border: 1px solid var(--border);
      transition: all 0.3s ease;
      font-size: 0.95rem;
      background-color: #f9fafc;
    }
    
    .form-control:focus, .form-select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.2rem rgba(109, 139, 206, 0.15);
      background-color: white;
    }
    
    .form-label {
      font-weight: 500;
      color: var(--text);
      margin-bottom: 8px;
      font-size: 0.9rem;
    }
    
    .btn-primary {
      background: linear-gradient(to right, var(--primary), var(--primary-dark));
      border: none;
      padding: 14px;
      font-weight: 500;
      letter-spacing: 0.5px;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-size: 1rem;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(109, 139, 206, 0.3);
      background: linear-gradient(to right, var(--primary-dark), var(--primary));
    }
    
    .required-field::after {
      content: '*';
      color: #f56565;
      margin-left: 4px;
      font-size: 0.8rem;
    }
    
    .input-icon {
      position: relative;
    }
    
    .input-icon i {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      color: var(--primary);
      font-size: 0.9rem;
      opacity: 0.7;
    }
    
    .input-icon input, .input-icon select {
      padding-left: 40px;
    }
    
    .form-section {
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--border);
    }
    
    .form-section:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    
    .form-section h5 {
      color: var(--primary-dark);
      font-weight: 500;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      font-size: 1.1rem;
    }
    
    .form-section h5 i {
      margin-right: 12px;
      font-size: 1.1rem;
      background: var(--primary-light);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-dark);
    }
    
    .error-message {
      font-size: 0.8rem;
      margin-top: 6px;
      color: #f56565;
      font-weight: 400;
    }
    
    .alert {
      border-radius: 8px;
      border: none;
    }
    
    .alert-success {
      background-color: #f0fff4;
      color: #2f855a;
    }
    
    .hotel-icon {
      width: 50px;
      height: 50px;
      background: white;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .hotel-icon i {
      color: var(--primary-dark);
      font-size: 1.5rem;
    }
    
    @media (max-width: 768px) {
      .container {
        padding-top: 40px;
        padding-bottom: 40px;
      }
      
      .card-header {
        padding: 1.8rem 1.5rem;
      }
      
      .form-section h5 {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="card">
        <div class="card-header">
          <div class="hotel-icon">
            <i class="fas fa-hotel"></i>
          </div>
          <h3 class="mb-2">ROOM RESERVATION</h3>
          <p class="mb-0">Florence Hotel - Luxury Redefined</p>
        </div>

        <div class="card-body p-4 p-lg-5">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4">
              <i class="fas fa-check-circle me-2"></i>
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            <div class="form-section">
              <h5><i class="fas fa-user"></i>Guest Information</h5>
              
              <div class="mb-4 input-icon">
                <label for="customer_name" class="form-label required-field">Full Name</label>
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ old('customer_name') }}" required>
                @error('customer_name') <div class="error-message">{{ $message }}</div> @enderror
              </div>

              <div class="mb-4 input-icon">
                <label for="contact_info" class="form-label">Contact Information</label>
                <i class="fas fa-phone-alt"></i>
                <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ old('contact_info') }}" placeholder="Phone/WhatsApp/Email">
                @error('contact_info') <div class="error-message">{{ $message }}</div> @enderror
              </div>
            </div>

            <div class="form-section">
              <h5><i class="far fa-calendar-alt"></i>Reservation Details</h5>
              
              <div class="row">
                <div class="col-md-6 mb-4 input-icon">
                  <label for="check_in_date" class="form-label required-field">Check-in Date</label>
                  <i class="far fa-calendar-check"></i>
                  <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="{{ old('check_in_date') }}" required>
                  @error('check_in_date') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                
                <div class="col-md-6 mb-4 input-icon">
                  <label for="check_out_date" class="form-label required-field">Check-out Date</label>
                  <i class="far fa-calendar-times"></i>
                  <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="{{ old('check_out_date') }}" required>
                  @error('check_out_date') <div class="error-message">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 input-icon">
                  <label for="guests_count" class="form-label required-field">Number of Guests</label>
                  <i class="fas fa-users"></i>
                  <input type="number" min="1" max="10" class="form-control" id="guests_count" name="guests_count" value="{{ old('guests_count', 1) }}" required>
                  @error('guests_count') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                
                <div class="col-md-6 mb-4 input-icon">
                  <label for="room_type" class="form-label required-field">Room Type</label>
                  <i class="fas fa-bed"></i>
                  <select class="form-select" id="room_type" name="room_type" required>
                    <option value="" disabled selected>Select Room Type</option>
                    @foreach ($roomTypes as $type)
                      <option value="{{ $type }}" @if(old('room_type') == $type) selected @endif>{{ $type }}</option>
                    @endforeach
                  </select>
                  @error('room_type') <div class="error-message">{{ $message }}</div> @enderror
                </div>
              </div>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary py-3">
                <i class="fas fa-calendar-plus me-2"></i> Complete Reservation
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Set minimum date for check-in (today)
  document.getElementById('check_in_date').min = new Date().toISOString().split('T')[0];
  
  // When check-in date changes, update check-out min date
  document.getElementById('check_in_date').addEventListener('change', function() {
    const checkInDate = this.value;
    document.getElementById('check_out_date').min = checkInDate;
    
    // If current check-out date is before new check-in date, reset it
    if(document.getElementById('check_out_date').value && 
       document.getElementById('check_out_date').value < checkInDate) {
      document.getElementById('check_out_date').value = '';
    }
  });

  // Add smooth hover effects to form inputs
  document.querySelectorAll('.form-control, .form-select').forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.querySelector('i').style.opacity = '1';
      this.parentElement.querySelector('i').style.color = 'var(--primary-dark)';
    });
    
    input.addEventListener('blur', function() {
      this.parentElement.querySelector('i').style.opacity = '0.7';
      this.parentElement.querySelector('i').style.color = 'var(--primary)';
    });
  });
</script>
</body>
</html>