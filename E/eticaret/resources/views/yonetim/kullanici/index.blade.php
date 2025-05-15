@extends('yonetim.layouts.master')

@section('title','Kullanici Yonetimi')

@section('content')
<h1 class="page-header">Kullanici Yonetimi</h1>

<h1 class="sub-header">Kullanici Listesi</h1>
    <div class="well">
        <div class="btn-group pull-right" >
            <a href="{{route('yonetim.kullanici.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
        <form action="{{route('yonetim.kullanici')}}" method="post" class="form-inline">
            @csrf
            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Ad,Email,Ara..." value="{{old('aranan')}}">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{route('yonetim.kullanici')}}" class="btn btn-primary">Temizle</a>
        </form>
    </div>



<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Ad Soyad</th>
            <th>Mail Adresi</th>
            <th>Aktif mi</th>
            <th>Yonetici mi</th>
            <th>Kayit Tarihi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $enrty)
        <tr>
            <td>{{$enrty->id}}</td>
            <td>{{$enrty->adsoyad}}</td>
            <td>{{$enrty->email}}</td>
            <td>
                @if($enrty->aktif_mi)
                    <span class="label label-success">Aktif</span>
                    @else
                    <span class="label label-warning">Pasif</span>
                @endif
            </td>
            <td>
                @if($enrty->yonetici_mi)
                    <span class="label label-success">Yonetici</span>
                @else
                    <span class="label label-warning">Musteri</span>
                @endif
            </td>
            <td>{{$enrty->created_at}}</td>


            <td style="width: 100px">
                <a href="{{route('yonetim.kullanici.duzenle',$enrty->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Duzenle">
                    <span class="fa fa-pencil"></span>
                </a>
                <a href="{{route('yonetim.kullanici.sil',$enrty->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                    <span class="fa fa-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
