@extends('admin.layouts.master')

@section('content')
    <h3>Yeni Istifadeci Əlavə Et</h3>

    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf

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
            <label>Şifrə Təsdiqi</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Rol seç</label>
            <div class="row">
                @foreach($roles as $role)
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="roles[]" value="{{ $role->id }}">

                            <label class="form-check-label">
                                {{ $role->name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="btn btn-success">Əlavə et</button>
    </form>
@endsection
