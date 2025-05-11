<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Səbətim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">🛒 Səbətim</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($items->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover table-bordered bg-white shadow-sm">
                <thead class="table-dark">
                <tr>
                    <th>Şəkil</th>
                    <th>Məhsul</th>
                    <th>Say</th>
                    <th>Qiymət</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $cart)
                    <tr>
                        <td style="width: 100px;">
                            @if($cart->product->image)
                                <img src="{{ asset('storage/' . $cart->product->image) }}" class="img-fluid rounded" style="height:60px;">
                            @endif
                        </td>
                        <td class="align-middle">{{ $cart->product->title }}</td>
                        <td class="align-middle">{{ $cart->quantity }}</td>
                        <td class="align-middle">{{ $cart->product->price }} ₼</td>
                        <td class="align-middle">
                            <a href="{{ route('cart.decrease', $cart->id) }}" class="btn btn-sm btn-outline-secondary">-</a>
                            <span>{{ $cart->quantity }}</span>
                            <a href="{{ route('cart.increase', $cart->id) }}" class="btn btn-sm btn-outline-secondary">+</a>
                            <a href="{{ route('cart.remove', $cart->id) }}" class="btn btn-sm btn-outline-danger">Sil</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-end">
            <a href="/" class="btn btn-outline-primary">Alış-verişə davam et</a>
        </div>
    @else
        <div class="alert alert-info text-center">
            Səbətiniz boşdur. <a href="/" class="btn btn-sm btn-primary ms-2">Əsas səhifəyə qayıt</a>
        </div>
    @endif
</div>
</body>
</html>
