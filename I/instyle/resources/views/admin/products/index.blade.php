@extends('admin.layouts.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Məhsullar</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">Yeni Məhsul</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Şəkil</th>
            <th>Ad</th>
            <th>Qiymət</th>
            <th>Endirim</th>
            <th>Əməliyyat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" width="60">
                    @endif
                </td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }} $</td>
                <td>
                    @if($product->discount_percent)
                        {{ $product->discount_percent }}%
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">Düzəlt</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Əminsən?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
