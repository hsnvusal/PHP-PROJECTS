<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eticaret Projesi - Yonetim</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">
</head>

<body>
<div class="container">
    <form class="form-signin" action="{{route('yonetim.oturumac')}}" method="POST">
        @csrf
        <img src="{{asset('img/logo.png')}}" class="logo">

{{--        @if(session('mesaj'))--}}
{{--            <div class="alert alert-info alert-dismissible fade in" role="alert">--}}
{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--                Ödeme işlemi için giriş yapmalısınız.--}}
{{--            </div>--}}

{{--        @endif--}}
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="password" class="sr-only">Sifre</label>
        <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Sifre" required autofocus>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="benihatirla" value="1" checked> Beni Hatirla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giris Yap</button>
        <div class="links">
            <a href="{{route('anasayfa')}}">&larr; Site ye don</a>
        </div>
    </form>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>
