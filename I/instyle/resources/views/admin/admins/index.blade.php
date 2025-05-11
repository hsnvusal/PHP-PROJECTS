@extends('admin.layouts.master')

@section('content')
    <h3>Adminlər</h3>

    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-3">+ Yeni Admin</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Ad</th>
            <th>Email</th>
            <th>Rollar</th>
            <th>Əməliyyat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    @foreach($admin->roles as $role)
                        <span class="badge bg-secondary">{{ $role->name }}</span>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-sm btn-warning">Dəyiş</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
