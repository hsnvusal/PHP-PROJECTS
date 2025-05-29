@extends('yonetim.layouts.master')

@section('title','Urun Yonetimi')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <h1 class="sub-header">Urun {{$entry->id>0 ? 'Duzenle' : 'Ekle'}}</h1>

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
    <form method="POST" action="{{route('yonetim.urun.kaydet',$entry->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{$entry->id>0 ? "Guncelle": "Kaydet"}}
            </button>

        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="urun_adi">Urun Adi</label>
                    <input type="text" class="form-control" name="urun_adi" id="urun_adi" placeholder="Urun Adi" value="{{old('urun',$entry->urun_adi)}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="{{old('slug',$entry->slug)}}">
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{old('slug',$entry->slug)}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="aciklama">Aciklama</label>
                    <textarea class="form-control" name="aciklama" id="aciklama" placeholder="Aciklama" >{{old('urun',$entry->aciklama)}}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fiyati">Fiyatii</label>
                    <input type="text" class="form-control" name="fiyati" id="fiyati" placeholder="Urun Fiyati" value="{{old('urun',$entry->fiyati)}}">
                </div>
            </div>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="goster_slider" value="1" {{$entry->detay->goster_slider ? 'checked':''}}> Slider da Goster
            </label>
            <label>
                <input type="checkbox" name="goster_gunun_firsati" value="1" {{$entry->detay->goster_gunun_firsati ? 'checked':''}}> Gunun Firsationda goster
            </label>
            <label>
                <input type="checkbox" name="goster_one_cikan" value="1" {{$entry->detay->goster_one_cikan ? 'checked':''}}> One cikanda goster
            </label>
            <label>
                <input type="checkbox" name="goster_cok_satan" value="1" {{$entry->detay->goster_cok_satan ? 'checked':''}}> Cok satanda goster
            </label>
            <label>
                <input type="checkbox" name="goster_indirimli"  value="1" {{$entry->detay->goster_indirimli ? 'checked':''}}> Indirimlide  goster
            </label>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="aciklama">Kategoriler</label>
                    <select name="kategoriler[]" class="form-control select2" id="kategoriler" multiple>
                        @foreach($kategoriler as $kategori)
                            <option value="{{$kategori->id}}" {{collect(old('$kategoriler',$urun_kategorileri))->contains($kategori->id)?'selected':''}}>{{$kategori->kategori_adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            @if($entry->detay->urun_resmi!=null)
                <img src="/uploads/urunler/{{$entry->detay->urun_resmi}}" alt="" style="height: 100px" class="thumbnail pull-left">
            @endif
            <label for="urun_resmi">Urun Resmi</label>
            <input type="file" name="urun_resmi" id="urun_resmi">
        </div>

    </form>
@endsection

@section('footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script >
        $(function () {
            $('#kategoriler').select2({
                placeholder : 'Lutfen Kategori Seciniz'
            })
        });
    </script>
@endsection
