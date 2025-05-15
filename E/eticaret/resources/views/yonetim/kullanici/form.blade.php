@extends('yonetim.layouts.master')

@section('title','Kullanici Yonetimi')

@section('content')
    <h1 class="sub-header">Kullanici {{$entry->id>0 ? 'Duzenle' : 'Ekle'}}</h1>

    @if(session('mesaj'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Guncellendi
        </div>
    @endif
    @if(session()->has('mesaj'))
        <div class="alert alert{{session('mesaj_tur')}}">{{session('mesaj')}}</div>
    @endif
    <form method="POST" action="{{route('yonetim.kullanici.kaydet',$entry->id)}}">
        @csrf
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{$entry->id>0 ? "Guncelle": "Kaydet"}}
            </button>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad</label>
                    <input type="text" class="form-control" name="adsoyad" id="adsoyad" placeholder="Ad Soyad" value="{{old('adsoyad',$entry->adsoyad)}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email',$entry->email)}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sifre">Sifre</label>
                    <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Sifre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" id="adres" name="adres" placeholder="Address" value="{{old('adres',$entry->adres)}}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" value="{{old('telefon',$entry->telefon)}}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="aktif_mi" value="1" {{$entry->aktif_mi ? 'checked':''}}> Aktif Mi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="yonetici_mi" value="1" {{$entry->yonetici_mi ? 'checked':''}}> Yonetici Mi
            </label>
        </div>
    </form>
@endsection
