<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Ad">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Şifrə">
    <input type="password" name="password_confirmation" placeholder="Şifrə təkrarı">
    <button type="submit">Qeydiyyatdan keç</button>
</form>

</body>
</html>
