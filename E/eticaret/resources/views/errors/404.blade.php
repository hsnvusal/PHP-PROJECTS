@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>404</h1>
            <h2>Aradiginiz Sayfa Bulunamadi</h2>
            <a href="{{route('anasayfa')}}" class="btn btn-primary">Anasayfaya Don</a>
        </div>
    </div>
@endsection
