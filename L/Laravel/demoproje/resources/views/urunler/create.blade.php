@extends('layout.app')

@section('content')
    <h1>Urun Olustur</h1>
    <form action="/urunler" method="POST">
        {!! csrf_field() !!}
        <input type="text" name="isim" placeholder="Urun ismi">
        <input type="text" name="seri_no" placeholder="Urun Seri numarasi">
        <input type="submit" value="GONDER">
    </form>

    {!! Form::open(['url'=>'/urunler','method' => 'POST','files' => true]) !!}
    {!! Form::label('isim','Urun ismi') !!}
    {!! Form::text('isim','Urun ismi',['class','form-control']) !!}
    {!! Form::label('seri_no','Urun ismi') !!}
    {!! Form::select('seri_no',['01'=>'Adana','02'=>"Adiyaman"]) !!}

    {!! Form::file('resim') !!}
    {!! Form::submit("KAYDET") !!}
    {!! Form::close() !!}

@stop
