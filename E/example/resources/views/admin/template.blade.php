<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin/css/matrix-style.css" />
    <link rel="stylesheet" href="/admin/css/matrix-media.css" />
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/admin/css/jquery.gritter.css" />
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.16.1/sweetalert2.min.css" integrity="sha512-WnmDqbbAeHb7Put2nIAp7KNlnMup0FXVviOctducz1omuXB/hHK3s2vd3QLffK/CvvFUKrpioxdo+/Jo3k/xIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="{{route('yonetim.index')}}" class="visible-phone"><i class="icon icon-home"></i> Yonetim Paneli</a>
    <ul>
        <li class="active"><a href="{{route('yonetim.index')}}"><i class="icon icon-home"></i> <span>Yonetim Paneli</span></a> </li>
        <li ><a href="{{route('ayarlar.index')}}"><i class="icon icon-home"></i> <span>Ayarlar</span></a> </li>
        <li ><a href="{{route('kategoriler.index')}}"><i class="icon icon-home"></i> <span>Kategori Yonetimi</span></a> </li>
        <li ><a href="{{route('yazilar.index')}}"><i class="icon icon-home"></i> <span>Yazi Yonetimi</span></a> </li>

    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <!--End-Action boxes-->
        @yield('icerik')
    </div>

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/admin/js/excanvas.min.js"></script>
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/jquery.ui.custom.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/jquery.flot.min.js"></script>
<script src="/admin/js/jquery.flot.resize.min.js"></script>
<script src="/admin/js/jquery.peity.min.js"></script>
<script src="/admin/js/fullcalendar.min.js"></script>
<script src="/admin/js/matrix.js"></script>
<script src="/admin/js/matrix.dashboard.js"></script>
<script src="/admin/js/jquery.gritter.min.js"></script>
<script src="/admin/js/matrix.interface.js"></script>
<script src="/admin/js/matrix.chat.js"></script>
<script src="/admin/js/jquery.validate.js"></script>
<script src="/admin/js/matrix.form_validation.js"></script>
<script src="/admin/js/jquery.wizard.js"></script>
<script src="/admin/js/jquery.uniform.js"></script>
<script src="/admin/js/select2.min.js"></script>
<script src="/admin/js/matrix.popover.js"></script>
<script src="/admin/js/jquery.dataTables.min.js"></script>
<script src="/admin/js/matrix.tables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.16.1/sweetalert2.min.js" integrity="sha512-LGHBR+kJ5jZSIzhhdfytPoEHzgaYuTRifq9g5l6ja6/k9NAOsAi5dQh4zQF6JIRB8cAYxTRedERUF+97/KuivQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('sweetalert::alert')

    @if (session('alert.config'))
        <script>
            swal({!! session('alert.config') !!});
        </script>
@endif


@yield('js')
</body>
</html>
