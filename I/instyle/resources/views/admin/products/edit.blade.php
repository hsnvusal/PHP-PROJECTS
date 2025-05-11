@extends('admin.layouts.master')

@section('content')
    <h3>Məhsulu Düzəlt</h3>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Başlıq</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
        </div>

        <div class="mb-3">
            <label>Təsvir</label>
            <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Qiymət</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label>Köhnə Qiymət</label>
            <input type="number" step="0.01" name="old_price" class="form-control" value="{{ $product->old_price }}">
        </div>

        <div class="mb-3">
            <label>Endirim (%)</label>
            <input type="number" name="discount_percent" class="form-control" value="{{ $product->discount_percent }}">
        </div>

        <div class="mb-3">
            <label>Şəkil</label>
            <input type="file" name="image" class="form-control">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
            @endif
        </div>

        <button class="btn btn-success">Yadda saxla</button>
    </form>
@endsection
