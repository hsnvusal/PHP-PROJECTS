<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<h1>Xoş gəldin, {{ Auth::guard('admin')->user()->name }}</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Çıxış et</button>
</form>
</body>
</html>
