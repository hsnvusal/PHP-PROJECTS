@extends('layout.app')

@section('content')
    <h1>Urun Olustur</h1>
    <form action="{{route('urunler.update',$urun->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <input type="text" name="isim" placeholder="Urun ismi" value="{{$urun->isim}}">
        <input type="text" name="seri_no" placeholder="Urun Seri numarasi" value="{{$urun->seri_no}}">
        <input type="submit" value="KAYDET">
    </form>

    {!! Form::open(['route'=>['urunler.update',$urun->id],'method' => 'PUT']) !!}
    {!! Form::label('isim','Urun ismi') !!}
    {!! Form::text('isim','Urun ismi',['class','form-control']) !!}
    {!! Form::label('seri_no','Urun ismi') !!}
    {!! Form::text('seri_no','Urun ismi',['class','form-control']) !!}
    {!! Form::submit("Duzenle") !!}
    {!! Form::close() !!}
@stop
