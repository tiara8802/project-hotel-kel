<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Profil Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="background-color: #f8f9fa;">

<div class="container py-5">
    <h1 class="mb-4">Profil Saya</h1>

    <div class="card p-4 shadow-sm">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Dibuat pada:</strong> {{ $user->created_at->format('d M Y') }}</p>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profil</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
