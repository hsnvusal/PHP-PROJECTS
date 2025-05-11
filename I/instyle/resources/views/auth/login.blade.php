<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

<form method="POST" action="{{ route('login') }}" class="card p-4" style="width: 400px;">
    @csrf

    <h3 class="mb-3">Giriş</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Şifrə</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-primary w-100" type="submit">Daxil ol</button>
</form>

</body>
</html>
