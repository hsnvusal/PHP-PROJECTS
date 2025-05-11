@extends('admin.layouts.master')

@section('content')
    <h3>Yeni İcazə Əlavə Et</h3>

    <form action="{{ route('admin.permissions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>İcazə adı</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button class="btn btn-success">Əlavə et</button>
    </form>
@endsection
