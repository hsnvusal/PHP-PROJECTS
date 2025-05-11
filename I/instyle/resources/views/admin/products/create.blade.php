@extends('admin.layouts.master')

@section('content')
    <h3>Yeni Məhsul Əlavə Et</h3>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Başlıq</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Təsvir</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label>Qiymət</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Köhnə Qiymət</label>
            <input type="number" step="0.01" name="old_price" class="form-control">
        </div>

        <div class="mb-3">
            <label>Endirim (%)</label>
            <input type="number" name="discount_percent" class="form-control">
        </div>

        <div class="mb-3">
            <label>Şəkil</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Əlavə et</button>
    </form>
@endsection
