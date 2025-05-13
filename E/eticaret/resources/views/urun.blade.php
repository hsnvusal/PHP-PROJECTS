@extends('layouts.master')

@section('title',$urun->urun_adi)

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Anasayfa</a></li>
            @foreach($kategoriler as $kategori)
            <li><a href="{{route('kategori',$kategori->slug)}}">{{$kategori->kategori_adi}}</a></li>
            @endforeach
            <li class="active">{{$urun->urun_adi}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzTbAvFUS4xG1MDBnQjegHLP09BwIjxx6RQO8oEK75eA0oe9QcjRNr23sIKASbwZuIW4k&usqp=CAU">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxGkI7bPVJO0YHpFMHJODnRmd9WKqQ1TEdMVuUTKPrQjZxNbiblUhiXkRlLUYv08q-tvM&usqp=CAU"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQua6_rUTN2ZqCO15sjF7Dh15wN14qqavSQbfK5C6aREvPKHq-RFnU3gJ7jh8nNa1pyV2g&usqp=CAU"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHgaGi6lJkDMy6bprnjJUmlrZyTRRmIjtO1w&s"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$urun->urun_adi}}</h1>
                    <p class="price">{{$urun->fiyati}}₺</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">
                        {{$urun->aciklama}}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="t2">t2</div>
                </div>
            </div>

        </div>
    </div>

@endsection
