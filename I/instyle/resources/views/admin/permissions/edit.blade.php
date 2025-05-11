@extends('admin.layouts.master')

@section('content')
    <h3>İcazəni Düzəlt</h3>

    <form action="{{ route('admin.permissions.update', $permissions->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>İcazə adı</label>
            <input type="text" name="name" class="form-control" value="{{ $permissions->name }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button class="btn btn-primary">Yadda saxla</button>
    </form>
@endsection
