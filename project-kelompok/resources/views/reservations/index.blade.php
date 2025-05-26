<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --accent-color: #2e59d9;
            --success-color: #1cc88a;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
        }
        
        body {
            background-color: #f8f9fc;
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .container-fluid {
            padding: 2rem 3rem;
        }
        
        .page-header {
            border-bottom: 1px solid #e3e6f0;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }
        
        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            font-weight: 600;
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        .table {
            font-size: 0.85rem;
        }
        
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #5a5c69;
            background-color: #f8f9fc;
            border-bottom-width: 1px;
        }
        
        .status-badge {
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.35rem 0.5rem;
            border-radius: 0.25rem;
        }
        
        .badge-paid {
            background-color: rgba(28, 200, 138, 0.1);
            color: var(--success-color);
        }
        
        .badge-pending {
            background-color: rgba(246, 194, 62, 0.1);
            color: var(--warning-color);
        }
        
        .badge-cancelled {
            background-color: rgba(231, 74, 59, 0.1);
            color: var(--danger-color);
        }
        
        .badge-confirmed {
            background-color: rgba(78, 115, 223, 0.1);
            color: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .action-btns .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
            margin-right: 0.25rem;
        }
        
        .search-box {
            max-width: 300px;
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #5a5c69;
        }
        
        .empty-state i {
            font-size: 4rem;
            color: #dddfeb;
            margin-bottom: 1rem;
        }
        
        @media (max-width: 768px) {
            .container-fluid {
                padding: 1rem;
            }
            
            .page-header {
                flex-direction: column;
            }
            
            .search-box {
                margin-top: 1rem;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between page-header">
        <h1 class="h3 mb-0 text-gray-800">Reservation Management</h1>
        <div class="d-flex">
            <div class="input-group search-box">
                <input type="text" class="form-control" placeholder="Search reservations...">
                <button class="btn btn-primary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">All Reservations</h6>
            <a href="{{ route('reservations.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle"></i> Add Reservation
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                @if($reservations->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-calendar-x"></i>
                        <h5>No Reservations Found</h5>
                        <p>You don't have any reservations yet. Add your first reservation to get started.</p>
                    </div>
                @else
                    <table class="table table-bordered" id="reservationsTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Contact</th>
                                <th>Check-In</th>
                                <th>Check-Out</th>
                                <th>Guests</th>
                                <th>Room Type</th>
                                <th>Room No.</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $r)
                            <tr>
                                <td>
                                    <strong>{{ $r->customer_name }}</strong>
                                    <small class="d-block text-muted">#{{ $r->id }}</small>
                                </td>
                                <td>
                                    {{ $r->contact_info }}
                                    @if($r->email)
                                    <small class="d-block text-muted">{{ $r->email }}</small>
                                    @endif
                                </td>
                                <td>{{ $r->check_in_date->format('M d, Y') }}</td>
                                <td>{{ $r->check_out_date->format('M d, Y') }}</td>
                                <td class="text-center">{{ $r->guests_count }}</td>
                                <td>{{ $r->room_type }}</td>
                                <td class="text-center">
                                    @if($r->room_number)
                                        <span class="badge bg-primary">{{ $r->room_number }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($r->payment_status == 'Paid')
                                        <span class="status-badge badge-paid">
                                            <i class="bi bi-check-circle-fill"></i> Paid
                                        </span>
                                    @elseif($r->payment_status == 'Pending')
                                        <span class="status-badge badge-pending">
                                            <i class="bi bi-clock-fill"></i> Pending
                                        </span>
                                    @elseif($r->payment_status == 'Verified')
                                    <span class="status-badge badge-confirmed">
                                        <i class="bi bi-patch-check-fill"></i> Verified
                                    </span>
                                    @else
                                        <span class="status-badge badge-cancelled">
                                            <i class="bi bi-x-circle-fill"></i> {{ $r->payment_status }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                   @if($r->booking_status == 'Confirmed')
                                        <span class="status-badge badge-confirmed">
                                            <i class="bi bi-check-circle-fill"></i> Confirmed
                                        </span>
                                    @elseif($r->booking_status == 'Pending')
                                        <span class="status-badge badge-pending">
                                            <i class="bi bi-clock-fill"></i> Pending
                                        </span>
                                    @elseif($r->booking_status == 'Checked-in')
                                        <span class="status-badge badge-checked-in">
                                            <i class="bi bi-door-open-fill"></i> Checked-in
                                        </span>
                                    @elseif($r->booking_status == 'Completed')
                                        <span class="status-badge badge-completed">
                                            <i class="bi bi-flag-fill"></i> Completed
                                        </span>
                                    @elseif($r->booking_status == 'Cancelled')
                                        <span class="status-badge badge-cancelled">
                                            <i class="bi bi-x-circle-fill"></i> Cancelled
                                        </span>
                                    @else
                                        <span class="status-badge badge-unknown">
                                            <i class="bi bi-question-circle-fill"></i> {{ $r->booking_status }}
                                        </span>
                                    @endif
                                </td>
                                <td class="action-btns">
                                    <a href="{{ route('reservations.edit', $r) }}" class="btn btn-sm btn-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('reservations.destroy', $r) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this reservation?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="text-muted">
                            Showing <strong>{{ $reservations->firstItem() }}</strong> to <strong>{{ $reservations->lastItem() }}</strong> of <strong>{{ $reservations->total() }}</strong> reservations
                        </div>
                        <nav>
                            {{ $reservations->links() }}
                        </nav>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Add confirmation for delete action with SweetAlert
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('form');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    });
    
    // Simple search functionality
    document.querySelector('.search-box input').addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        document.querySelectorAll('#reservationsTable tbody tr').forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });
</script>
</body>
</html>