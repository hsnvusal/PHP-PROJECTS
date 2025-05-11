@extends('admin.layouts.master')

@section('content')
    <h3>Admini Düzəlt: {{ $admin->name }}</h3>

    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Ad</label>
            <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
        </div>

        <div class="mb-3">
            <label>Rol seç</label>
            <div class="row">
                @foreach($roles as $role)
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="roles[]" value="{{ $role->id }}"
                                {{ $admin->roles->contains($role->id) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                {{ $role->name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="btn btn-primary">Yadda saxla</button>
    </form>
@endsection
