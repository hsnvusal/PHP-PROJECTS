<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Qeydiyyat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<form method="POST" action="{{ route('register') }}" class="card p-4" style="width: 400px;">
    @csrf
    <h3 class="mb-3">Qeydiyyat</h3>

    <div class="mb-3">
        <label>Ad</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Şifrə</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Şifrə təsdiqi</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button class="btn btn-dark w-100" type="submit">Qeydiyyatdan keç</button>
</form>

</body>
</html>
