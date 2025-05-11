@extends('admin.layouts.master')

@section('content')
    <h3>Rolu Düzəlt: {{ $role->name }}</h3>

    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Rol adı</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">İcazələr</label>
            <div class="row">
                @foreach($permissions as $permission)
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="permissions[]" value="{{ $permission->id }}"
                                {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>

                            <label class="form-check-label">
                                {{ $permission->name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <button class="btn btn-primary">Yadda saxla</button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Geri</a>
    </form>
@endsection
