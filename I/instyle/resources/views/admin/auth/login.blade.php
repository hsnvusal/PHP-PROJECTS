<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
<form method="POST" action="{{ route('admin.login') }}" class="card p-4" style="width: 400px;">
    @csrf
    <h4 class="mb-3">Admin Giriş</h4>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Şifrə</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-dark w-100" type="submit">Daxil ol</button>
</form>
</body>
</html>
