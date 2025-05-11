@extends('admin.layouts.master')

@section('content')
    <h3>İcazələr</h3>
    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary mb-2">+ Yeni İcazə</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Adı</th>
            <th>Əməliyyat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning">Dəyiş</a>
                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Silinsin?')" class="btn btn-sm btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
