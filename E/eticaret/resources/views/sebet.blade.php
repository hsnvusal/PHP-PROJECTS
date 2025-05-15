@extends('layouts.master')
@section('title','Sebet')

@section('content')
    <div class="container">
        <div class="bg-content">
            <h2>Sepet</h2>
            @php
                $sepet = session('sebet', []);
                $toplam = 0;
            @endphp

            <table class="table table-bordered table-hover">
                <tr>
                    <th>Resim</th>
                    <th>Ürün</th>
                    <th>Adet Fiyati</th>
                    <th>Adet</th>
                    <th>Tutar</th>
                </tr>

                @foreach($sepet as $id => $urun)
                    @php
                        $urunToplam = $urun['fiyati'] * $urun['adet'];
                        $toplam += $urunToplam;
                    @endphp
                    <tr>
                        <td><img src="{{ $urun['resim'] ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzTbAvFUS4xG1MDBnQjegHLP09BwIjxx6RQO8oEK75eA0oe9QcjRNr23sIKASbwZuIW4k&usqp=CAU' }}" width="100"></td>
                        <td>{{ $urun['urun_adi'] }} <br>
                            <form action="{{ route('sebet.kaldir', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs">Sepetten Kaldır</button>
                            </form>

                        </td>
                        <td>{{ $urun['fiyati'] }} ₺</td>
                        <td>{{ $urun['adet'] }}</td>
                        <td>{{ number_format($urunToplam, 2) }} ₺</td>
                    </tr>
                @endforeach

                @php
                    $kdv = $toplam * 0.18;
                    $genelToplam = $toplam + $kdv;
                @endphp

                <tr>
                    <td colspan="3" class="text-right"><strong>Alt Toplam</strong></td>
                    <td colspan="2">{{ number_format($toplam, 2) }} ₺</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right"><strong>KDV (%18)</strong></td>
                    <td colspan="2">{{ number_format($kdv, 2) }} ₺</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right"><strong>Genel Toplam</strong></td>
                    <td colspan="2"><strong>{{ number_format($genelToplam, 2) }} ₺</strong></td>
                </tr>
            </table>

            <div>
                <form action="{{route('sebet.bosalt')}}">
                    @csrf
                    <input type="submit" class="btn btn-info pull-left" value="Sebeti Bosalt">
                </form>
                <a href="{{route('odeme')}}" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
            </div>
        </div>
    </div>
@endsection
