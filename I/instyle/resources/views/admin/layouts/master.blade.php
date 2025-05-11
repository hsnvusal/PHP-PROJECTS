<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>

    @if(Auth::guard('admin')->user()->hasPermission('product.manage'))
        <li><a href="{{ route('admin.products.index') }}">Məhsullar</a></li>
    @endif

    @if(Auth::guard('admin')->user()->hasPermission('role.manage'))
        <li><a href="{{ route('admin.roles.index') }}">Rollar</a></li>
    @endif

    @if(Auth::guard('admin')->user()->hasPermission('permission.manage'))
        <li><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
    @endif

    @if(Auth::guard('admin')->user()->hasPermission('permission.manage'))
        <li><a href="{{ route('admin.admins.index') }}">Adminler</a></li>
    @endif




    <form action="{{route('admin.logout')}}" method="POST" class="d-inline">
        @csrf
        <button class="btn btn-sm btn-outline-light" type="submit">Çıxış</button>
    </form>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
