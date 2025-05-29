@extends('yonetim.layouts.master')

@section('title','Urun Yonetimi')

@section('content')
<h1 class="page-header">Urun Yonetimi</h1>

<h1 class="sub-header">Urun Listesi</h1>
    <div class="well">
        <div class="btn-group pull-right" >
            <a href="{{route('yonetim.urun.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
        <form action="{{route('yonetim.urun')}}" method="post" class="form-inline">
            @csrf
            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Urun Ara..." value="{{old('aranan')}}">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{route('yonetim.urun')}}" class="btn btn-primary">Temizle</a>
        </form>
    </div>



<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Slug</th>
            <th>Urun adi</th>
            <th>Fiyati</th>
            <th>Kayit Tarihi</th>
        </tr>
        </thead>
        <tbody>
        @if(count($list) ==0)
            <tr>
                <td colspan="6" class="text-center">Kayit Bulunamadi</td>
            </tr>
        @endif
        @foreach($list as $enrty)
        <tr>
            <td>{{$enrty->id}}</td>
            <td>{{$enrty->slug}}</td>
            <td>{{$enrty->urun_adi}}</td>
            <td>{{$enrty->fiyati}}</td>
            <td>{{$enrty->created_at}}</td>


            <td style="width: 100px">
                <a href="{{route('yonetim.urun.duzenle',$enrty->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Duzenle">
                    <span class="fa fa-pencil"></span>
                </a>
                <a href="{{route('yonetim.urun.sil',$enrty->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                    <span class="fa fa-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
        {{$list->links()}}
        </tbody>
    </table>
</div>
@endsection
