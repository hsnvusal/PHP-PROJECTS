@extends('admin.layouts.master')

@section('content')
    <h3>Yeni Rol Əlavə Et</h3>

    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Rol adı</label>
            <input type="text" name="name" id="name" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Əlavə et</button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Geri</a>
    </form>
@endsection
