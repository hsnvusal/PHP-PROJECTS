@extends('yonetim.layouts.master')

@section('title','Kategori Yonetimi')

@section('content')
    <h1 class="sub-header">Kategori {{$entry->id>0 ? 'Duzenle' : 'Ekle'}}</h1>

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
    <form method="POST" action="{{route('yonetim.kategori.kaydet',$entry->id)}}">
        @csrf
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{$entry->id>0 ? "Guncelle": "Kaydet"}}
            </button>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="kategori_adi">Ust Kategori</label>
                    <select name="ust_id" id="ust_id" class="form-control">
                        @foreach($kategoriler as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="kategori_adi">Kategori Adi</label>
                    <input type="text" class="form-control" name="kategori_adi" id="kategori_adi" placeholder="Kategori Adi" value="{{old('kategori_adi',$entry->kategori_adi)}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="{{old('slug',$entry->slug)}}">
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{old('slug',$entry->slug)}}">
                </div>
            </div>
        </div>
    </form>
@endsection
