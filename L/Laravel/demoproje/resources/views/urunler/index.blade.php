@extends('layout.app')

@section('content')
    <h1>Urunler</h1>
    @if($urunler)
        <a href="/urunler/create">Urun Olustur</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($urunler as $urun)
            <tr>
                <td>{{$urun->isim}}</td>
                <td>{{$urun->seri_no}}</td>
                <td>
                    <a href="{{route('urunler.edit',$urun->id)}}">Duzenle</a>
                    <a href="{{route('urunler.destroy',$urun->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                        SIL
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif


@stop
