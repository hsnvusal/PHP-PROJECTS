@extends('layouts.master')

@section('content')

@section('head')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 10px;
            text-align: center;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .quantity-controls form {
            display: inline;
        }

        .quantity-controls button {
            padding: 4px 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .quantity-controls button:hover {
            background-color: #dcdcdc;
        }

        .basket-total {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }

        .remove-btn {
            color: red;
            border: none;
            padding: 6px 10px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: #c0392b;
        }
    </style>

@endsection


{{--    <h2>Məhsul əlavə et</h2>--}}
{{--    <form method="POST" action="{{ route('basket.add') }}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="id" value="1">--}}
{{--        <input type="hidden" name="name" value="iPhone 14">--}}
{{--        <input type="hidden" name="price" value="2999">--}}
{{--        <input type="hidden" name="image" value="iphone.jpg">--}}
{{--        <button type="submit">iPhone 14 səbətə əlavə et</button>--}}
{{--    </form>--}}
<table>
    <tr>
        <th>Ad</th>
        <th>Qiymət</th>
        <th>Say</th>
        <th>Əməliyyat</th>
    </tr>
    @foreach($basket as $id => $item)
        <tr>
            <td>{{ $item['urun_adi'] }}</td>
            <td>{{ $item['fiyati'] }} ₼</td>
            <td>{{ $item['adet'] }}</td>
            <td class="quantity-controls">
                <form method="POST" action="{{ route('basket.increase') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <button type="submit">+</button>
                </form>

                <form method="POST" action="{{ route('basket.decrease') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <button type="submit">−</button>
                </form>

                <form method="POST" action="{{ route('basket.remove') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <button type="submit" class="remove-btn">Sil</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@php
    $total = 0;
    foreach ($basket as $item) {
        $total += floatval($item['fiyati']) * intval($item['adet']);
    }
@endphp

<div class="basket-total">
    Toplam məbləğ: <span>{{ number_format($total, 2) }} ₼</span>
</div>



@endsection
