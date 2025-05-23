<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('anasayfa')}}">
                <img src="{{asset('img/logo.png')}}">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" action="{{route('urun_ara')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="aranan" id="navbar-search" class="form-control" placeholder="Ara" value="{{old('aranan')}}">
                    <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @php
                    $sepet = session('sebet', []);
                    $sepetAdet = array_sum(array_column($sepet, 'adet'));
                @endphp
                <li><a href="{{route('sebet')}}"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme">{{ $sepetAdet }}</span></a></li>
                @guest
                <li><a href="{{route('kullanici.oturumac')}}">Oturum Aç</a></li>
                <li><a href="{{route('kullanici.kaydol')}}">Kaydol</a></li>
                @endguest
                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Siparişlerim</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Çıkış</a></li>
                        <form id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="POST" style="display: none">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
