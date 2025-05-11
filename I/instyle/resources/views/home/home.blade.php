<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instyle</title>

    <!-- style -->
    <link rel="stylesheet" href="style/style.css">

    <!-- font -->
    <link rel="stylesheet" href="style/font/stylesheet.css">

    <!-- jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        .custom-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 14px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            z-index: 9999;
            animation: slideIn 0.5s ease, fadeOut 0.5s ease 2.5s forwards;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            to { opacity: 0; transform: translateY(-20px); display: none; }
        }

    </style>

</head>

<body>
@if(session('success'))
    <div id="custom-toast" class="custom-toast">
        {{ session('success') }}
    </div>
@endif

<header>
    <div class="layer-menu"></div>
    <div class="menu-popup">
        <div class="container">
            <div class="menu-popup-content">
                <div class="menu-tabs tabs">
                    <span class="tab-menu active">Man</span>
                    <span class="tab-menu">Woman</span>
                    <span class="tab-menu">Kids</span>
                </div>
                <div class="menu-tabs-parent">
                    <div class="menu-tab_item active">
                        <div class="category-header">
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Hoodies & Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Bottoms
                                </h4>
                                <a href="">
                                    Pants
                                </a>
                                <a href="">
                                    Jumpsuits
                                </a>
                                <a href="">
                                    Shorts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Coats & Jackets
                                </h4>
                                <a href="">
                                    Jackets
                                </a>
                                <a href="">
                                    Overcoats
                                </a>
                                <a href="">
                                    Suits
                                </a>

                            </div>
                            <div class="category-header-card height-100">
                                <h4>
                                    Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-tab_item">
                        <div class="category-header">
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a> <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a> <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Hoodies & Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Bottoms
                                </h4>
                                <a href="">
                                    Pants
                                </a>
                                <a href="">
                                    Jumpsuits
                                </a>
                                <a href="">
                                    Shorts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Coats & Jackets
                                </h4>
                                <a href="">
                                    Jackets
                                </a>
                                <a href="">
                                    Overcoats
                                </a>
                                <a href="">
                                    Suits
                                </a>
                            </div>
                            <div class="category-header-card height-100">
                                <h4>
                                    Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-tab_item">
                        <div class="category-header">
                            <div class="category-header-card">
                                <h4>
                                    Tops
                                </h4>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                                <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a> <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a> <a href="">
                                    Shirts
                                </a>
                                <a href="">
                                    T-Shirts
                                </a>
                                <a href="">
                                    Henley Shirts
                                </a>
                            </div>
                            <div class="category-header-card">
                                <h4>
                                    Hoodies & Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>

                            <div class="category-header-card height-100">
                                <h4>
                                    Sweatshirts
                                </h4>
                                <a href="">
                                    Hoodies
                                </a>
                                <a href="">
                                    Sweatshirts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content-parent">
        <div class="container">
            <div class="header-content-child">
                <div class="user-popup">
                    <div class="user-popup-inner">
                        @auth
                            <a href="#">Settings</a>
                            <a href="#">Profile</a>
                            <div></div>
                            <a href="#">Orders</a>
                            <a href="#">Address</a>
                            <a href="#">Courier</a>
                            <a href="#">Order tracking</a>
                            <div></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="all: unset; cursor: pointer;">Log out</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                </div>

                <div class="search-popup">
                    <div class="search-popup-inner">
                        <form action="">
                            <input type="text" name="" id="" placeholder="search...">
                            <button type="submit">
                                search
                            </button>
                        </form>
                    </div>
                </div>

                <div class="header-left">
                    <button type="button" class="header-menu-button">
                        <img src="media/menu.png" alt="">
                        <img src="media/x.png" alt="">
                    </button>
                    <div class="lang">
                        <div class="lang-head">
                            az
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.999756 1L4.99976 5L8.99976 1" stroke="black" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="lang-body">
                            <div>
                                <a href="">
                                    ru
                                </a>
                                <a href="">
                                    en
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="logo">
                    <img src="media/logo.svg" alt="">
                </a>
                <div class="header-right">
                    <button type="button" class="header-right-button search-menu">
                        <img src="media/search.svg" alt="">
                        <img src="media/circle.png" alt="">
                    </button>
                    <!-- login -->
                    <button class="header-right-button user-button">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.7188 24.8241L22 22.1716C22 20.7647 21.4469 19.4153 20.4623 18.4205C19.4777 17.4256 18.1424 16.8667 16.75 16.8667H6.25C4.85761 16.8667 3.52226 17.4256 2.53769 18.4205C1.55312 19.4153 1 20.7647 1 22.1716L4.28125 24.8241"
                                stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M11.5 11.5617C14.3995 11.5617 16.75 9.18662 16.75 6.25681C16.75 3.32699 14.3995 0.951904 11.5 0.951904C8.6005 0.951904 6.25 3.32699 6.25 6.25681C6.25 9.18662 8.6005 11.5617 11.5 11.5617Z"
                                stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg> </button>
                    <!-- logout -->
                    <a href="" class="header-right-button d-none">
                        <img src="media/account.svg" alt="">
                    </a>
                    <a href="{{ route('cart.index') }}" class="header-right-button">
                        <img src="media/cart.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="homopage-products">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="xl-4 lg-4 md-4 dm-6 sm-12">
                <a href="" class="product-card">
                    <div class="product-card-header">
                        @if($product->image)
                            <img src="{{asset('storage/'.$product->image)}}" alt="">
                        @endif
                        <label class="product-hearth">
                            <input class="like-button" type="checkbox" data-pid="230">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                      stroke="#222222" stroke-width="1.5" />
                                <path class="fil0 str0"
                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </label>
                        <div class="discound-span">
                            @if($product->discount_percent)
                                {{$product->discount_percent}}%
                            @endif
                        </div>
                        <div class="delivery-span">
                            Delivery in 24 hours
                        </div>
                    </div>
                    <div class="product-card-body">
                        <h4>
                            {{$product->title}}
                        </h4>
                        <p class="price">
                                        <span>
                                            {{$product->old_price}}$
                                        </span>
                            {{$product->price}}$
                        </p>
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">
                            Add to Cart
                        </a>
                    </div>
                </a>
            </div>
            @endforeach
{{--            <div class="xl-4 lg-4 md-4 dm-6 sm-12">--}}
{{--                <a href="" class="product-card">--}}
{{--                    <div class="product-card-header">--}}
{{--                        <img src="media/img2.png" alt="">--}}
{{--                        <label class="product-hearth">--}}
{{--                            <input class="like-button" type="checkbox" data-pid="230">--}}
{{--                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"--}}
{{--                                      stroke="#222222" stroke-width="1.5" />--}}
{{--                                <path class="fil0 str0"--}}
{{--                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"--}}
{{--                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </label>--}}

{{--                    </div>--}}
{{--                    <div class="product-card-body">--}}
{{--                        <h4>--}}
{{--                            Yin Yang Animal Print Open Front Street Loose Kimono--}}
{{--                        </h4>--}}
{{--                        <span class="price">--}}
{{--                                        17.99$--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="xl-4 lg-4 md-4 dm-6 sm-12">--}}
{{--                <a href="" class="product-card">--}}
{{--                    <div class="product-card-header">--}}
{{--                        <img src="media/img.png" alt="">--}}
{{--                        <label class="product-hearth">--}}
{{--                            <input class="like-button" type="checkbox" data-pid="230">--}}
{{--                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"--}}
{{--                                      stroke="#222222" stroke-width="1.5" />--}}
{{--                                <path class="fil0 str0"--}}
{{--                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"--}}
{{--                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </label>--}}

{{--                    </div>--}}
{{--                    <div class="product-card-body">--}}
{{--                        <h4>--}}
{{--                            Yin Yang Animal Print Open Front Street Loose Kimono--}}
{{--                        </h4>--}}
{{--                        <span class="price">--}}
{{--                                        17.99$--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="xl-4 lg-4 md-4 dm-6 sm-12">--}}
{{--                <a href="" class="product-card">--}}
{{--                    <div class="product-card-header">--}}
{{--                        <img src="media/img2.png" alt="">--}}
{{--                        <label class="product-hearth">--}}
{{--                            <input class="like-button" type="checkbox" data-pid="230">--}}
{{--                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"--}}
{{--                                      stroke="#222222" stroke-width="1.5" />--}}
{{--                                <path class="fil0 str0"--}}
{{--                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"--}}
{{--                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </label>--}}

{{--                    </div>--}}
{{--                    <div class="product-card-body">--}}
{{--                        <h4>--}}
{{--                            Yin Yang Animal Print Open Front Street Loose Kimono--}}
{{--                        </h4>--}}
{{--                        <span class="price">--}}
{{--                                        17.99$--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="xl-4 lg-4 md-4 dm-6 sm-12">--}}
{{--                <a href="" class="product-card">--}}
{{--                    <div class="product-card-header">--}}
{{--                        <img src="media/img.png" alt="">--}}
{{--                        <label class="product-hearth">--}}
{{--                            <input class="like-button" type="checkbox" data-pid="230">--}}
{{--                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"--}}
{{--                                      stroke="#222222" stroke-width="1.5" />--}}
{{--                                <path class="fil0 str0"--}}
{{--                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"--}}
{{--                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </label>--}}

{{--                    </div>--}}
{{--                    <div class="product-card-body">--}}
{{--                        <h4>--}}
{{--                            Yin Yang Animal Print Open Front Street Loose Kimono--}}
{{--                        </h4>--}}
{{--                        <span class="price">--}}
{{--                                        17.99$--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="xl-4 lg-4 md-4 dm-6 sm-12">--}}
{{--                <a href="" class="product-card">--}}
{{--                    <div class="product-card-header">--}}
{{--                        <img src="media/img2.png" alt="">--}}
{{--                        <label class="product-hearth">--}}
{{--                            <input class="like-button" type="checkbox" data-pid="230">--}}
{{--                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"--}}
{{--                                      stroke="#222222" stroke-width="1.5" />--}}
{{--                                <path class="fil0 str0"--}}
{{--                                      d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"--}}
{{--                                      stroke="#222222" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </label>--}}

{{--                    </div>--}}
{{--                    <div class="product-card-body">--}}
{{--                        <h4>--}}
{{--                            Yin Yang Animal Print Open Front Street Loose Kimono--}}
{{--                        </h4>--}}
{{--                        <span class="price">--}}
{{--                                        17.99$--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<div class="homepage-carousel">
    <div class="container overflow-hidden">
        <div class="swiper-container mySwiper7">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="media/carousel-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="media/carousel-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="media/carousel-img.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="homepage-category wrapper">
    <div class="container overflow-hidden">
        <div class="homepage-category-head tabs">
            <span class="tab active">Man</span>
            <span class="tab">Woman</span>
        </div>

        <div class="tab_content">
            <div class="tab_item">
                <div class="swiper-container mySwiper2">
                    <div class="swiper-wrapper">
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab_item">
                <div class="swiper-container mySwiper3">
                    <div class="swiper-wrapper">
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>
                        <a href="" class="category-card swiper-slide">
                            <div class="category-card-header">
                                <img src="media/img3.png" alt="">
                            </div>
                            <h5>
                                Shirts
                            </h5>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="homepage-brand">
    <div class="container-mini  overflow-hidden">
        <div class="swiper-container mySwiper4">
            <div class="swiper-wrapper">
                <div class="swiper-slide brand-card">
                    <img src="media/brand.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand2.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand2.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand2.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand.png" alt="">
                </div>
                <div class="swiper-slide brand-card">
                    <img src="media/brand2.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="products-section">
    <div class="container  overflow-hidden">
        <div class="swiper-container mySwiper5">
            <div class="product-header">
                <h4>
                    New arrival
                </h4>
                <div class="product-header-right">
                    <div class="button-prev">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="">
                                <path d="M20 24L12 16L20 8" stroke="black" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="button-next">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9033 24L20.9033 16L12.9033 8" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="products-section">
    <div class="container  overflow-hidden">
        <div class="swiper-container mySwiper5">
            <div class="product-header">
                <h4>
                    Recommendations for you
                </h4>
                <div class="product-header-right">
                    <div class="button-prev">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="">
                                <path d="M20 24L12 16L20 8" stroke="black" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="button-next">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9033 24L20.9033 16L12.9033 8" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="products-section">
    <div class="container  overflow-hidden">
        <div class="swiper-container mySwiper5">
            <div class="product-header">
                <h4>
                    Burn in last month
                </h4>
                <div class="product-header-right">
                    <div class="button-prev">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="">
                                <path d="M20 24L12 16L20 8" stroke="black" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="button-next">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9033 24L20.9033 16L12.9033 8" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="product-card">
                        <div class="product-card-header">
                            <img src="media/img.png" alt="">
                            <label class="product-hearth">
                                <input class="like-button" type="checkbox" data-pid="230">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="46.5" height="46.5" rx="23.25"
                                          stroke="#222222" stroke-width="1.5" />
                                    <path class="fil0 str0"
                                          d="M32.4578 17.5422C31.9691 17.0533 31.3889 16.6654 30.7503 16.4008C30.1117 16.1362 29.4272 16 28.7359 16C28.0446 16 27.3601 16.1362 26.7215 16.4008C26.0829 16.6654 25.5026 17.0533 25.0139 17.5422L23.9997 18.5564L22.9855 17.5422C21.9984 16.5551 20.6596 16.0005 19.2636 16.0005C17.8676 16.0005 16.5288 16.5551 15.5417 17.5422C14.5546 18.5293 14 19.8681 14 21.2641C14 22.6601 14.5546 23.9989 15.5417 24.9861L16.5559 26.0003L23.9997 33.4441L31.4436 26.0003L32.4578 24.9861C32.9467 24.4974 33.3346 23.9171 33.5992 23.2785C33.8638 22.6399 34 21.9554 34 21.2641C34 20.5728 33.8638 19.8883 33.5992 19.2497C33.3346 18.6111 32.9467 18.0309 32.4578 17.5422V17.5422Z"
                                          stroke="#222222" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </label>

                        </div>
                        <div class="product-card-body">
                            <h4>
                                Yin Yang Animal Print Open Front Street Loose Kimono
                            </h4>
                            <span class="price">
                                            17.99$
                                        </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row footer-container">
            <div class="xl-3 lg-3 md-3 dm-12 sm-12">
                <a href="" class="logo">
                    <img src="media/footer-logo.svg" alt="">
                </a>
                <p class="footer-p">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
            </div>
            <div class="xl-2 lg-2 md-2 dm-12 sm-0"></div>
            <div class="xl-2 lg-2 md-2 dm-12 sm-12 footer-loc">
                <h4>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10L20 1L11 20L9 12L1 10Z" stroke="white" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Baku, Azerbaijan
                </h4>
            </div>
            <div class="xl-2 lg-2 md-2 dm-12 sm-12 footer-loc">
                <a href="">
                    +994 50 670 75 04
                </a>
                <a href="">
                    +994 50 670 75 04
                </a>
                <a href="mailto:hellohereis@instyle.az" class="pt">
                    hellohereis@instyle.az
                </a>
            </div>
            <div class="xl-3 lg-3 md-3 dm-12 sm-12">
                <div class="social-icons">
                    <a href="">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M21 10.5634C21 4.72996 16.2984 0 10.5 0C4.70156 0 0 4.72996 0 10.5634C0 15.8357 3.83906 20.2059 8.85938 20.9991V13.6179H6.19266V10.5634H8.85938V8.23617C8.85938 5.58918 10.4273 4.12587 12.8255 4.12587C13.9744 4.12587 15.1763 4.33242 15.1763 4.33242V6.93225H13.8516C12.548 6.93225 12.1402 7.7462 12.1402 8.58278V10.5634H15.052L14.587 13.6179H12.1406V21C17.1609 20.2073 21 15.8371 21 10.5634Z"
                                  fill="white" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.8748 1.74984C16.0342 1.7533 17.1451 2.21538 17.9648 3.03516C18.7846 3.85494 19.2467 4.96581 19.2502 6.12514V14.8748C19.2467 16.0342 18.7846 17.145 17.9648 17.9648C17.1451 18.7846 16.0342 19.2467 14.8748 19.2501H6.12516C4.96582 19.2467 3.85495 18.7846 3.03517 17.9648C2.21539 17.145 1.75331 16.0342 1.74984 14.8748V6.12514C1.75331 4.96581 2.21539 3.85494 3.03517 3.03516C3.85495 2.21538 4.96582 1.7533 6.12516 1.74984H14.8748ZM14.8748 0H6.12516C2.75625 0 0 2.75624 0 6.12514V14.8748C0 18.2437 2.75625 21 6.12516 21H14.8748C18.2437 21 21 18.2437 21 14.8748V6.12514C21 2.75624 18.2437 0 14.8748 0Z"
                                fill="white" />
                            <path
                                d="M16.1873 6.12499C15.9277 6.12499 15.674 6.04802 15.4581 5.9038C15.2423 5.75958 15.0741 5.5546 14.9747 5.31477C14.8754 5.07494 14.8494 4.81104 14.9 4.55644C14.9507 4.30184 15.0757 4.06798 15.2592 3.88442C15.4428 3.70087 15.6767 3.57586 15.9313 3.52522C16.1859 3.47458 16.4498 3.50057 16.6896 3.59991C16.9294 3.69925 17.1344 3.86747 17.2786 4.08331C17.4228 4.29915 17.4998 4.55291 17.4998 4.8125C17.5002 4.98496 17.4665 5.1558 17.4007 5.31521C17.3348 5.47461 17.2382 5.61945 17.1162 5.7414C16.9943 5.86335 16.8494 5.96001 16.69 6.02584C16.5306 6.09167 16.3598 6.12537 16.1873 6.12499ZM10.5 6.99968C11.1923 6.99968 11.869 7.20496 12.4446 7.58956C13.0202 7.97416 13.4688 8.52081 13.7337 9.16038C13.9986 9.79995 14.0679 10.5037 13.9329 11.1827C13.7978 11.8616 13.4645 12.4853 12.975 12.9748C12.4855 13.4643 11.8618 13.7977 11.1828 13.9327C10.5039 14.0678 9.80011 13.9985 9.16054 13.7335C8.52097 13.4686 7.97433 13.02 7.58972 12.4444C7.20512 11.8688 6.99984 11.1921 6.99984 10.4998C7.00084 9.57184 7.36992 8.68214 8.02611 8.02595C8.6823 7.36976 9.572 7.00067 10.5 6.99968ZM10.5 5.24984C9.46164 5.24984 8.44661 5.55775 7.58325 6.13462C6.7199 6.7115 6.04699 7.53144 5.64963 8.49075C5.25227 9.45006 5.14831 10.5057 5.35088 11.5241C5.55345 12.5424 6.05346 13.4779 6.78769 14.2121C7.52191 14.9464 8.45737 15.4464 9.47577 15.6489C10.4942 15.8515 11.5498 15.7475 12.5091 15.3502C13.4684 14.9528 14.2883 14.2799 14.8652 13.4166C15.4421 12.5532 15.75 11.5382 15.75 10.4998C15.75 9.10745 15.1969 7.77209 14.2123 6.78753C13.2277 5.80296 11.8924 5.24984 10.5 5.24984Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 2.13281C21.1748 2.49954 20.3016 2.74115 19.4081 2.85C20.3471 2.28768 21.0532 1.39433 21.3941 0.337507C20.5063 0.868407 19.5367 1.24091 18.5268 1.43907C18.1015 0.983222 17.59 0.620586 17.0234 0.3732C16.4568 0.125813 15.8469 -0.00115656 15.2309 7.93799e-06C12.7366 7.93799e-06 10.7181 2.03438 10.7181 4.54218C10.7164 4.89101 10.7554 5.2388 10.8345 5.57812C9.04598 5.49236 7.29462 5.02573 5.69249 4.20808C4.09037 3.39043 2.67276 2.23976 1.53038 0.829693C1.1296 1.52068 0.917644 2.30908 0.916667 3.1125C0.916667 4.68749 1.72013 6.07968 2.93333 6.8953C2.21454 6.87785 1.51048 6.68328 0.880917 6.32811V6.38436C0.880917 8.58748 2.43925 10.4203 4.50175 10.8375C4.1139 10.9432 3.71423 10.9968 3.31283 10.9968C3.02802 10.9974 2.74384 10.9691 2.46446 10.9125C3.03783 12.7172 4.70663 14.0297 6.68342 14.0672C5.07713 15.3332 3.10503 16.0175 1.07708 16.0125C0.717117 16.0119 0.357484 15.99 0 15.9468C2.06304 17.2941 4.46116 18.0068 6.90892 18C15.2213 18 19.7624 11.0765 19.7624 5.07187C19.7624 4.87499 19.7574 4.67812 19.7482 4.48593C20.6296 3.84471 21.3922 3.04786 22 2.13281Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 2.13281C21.1748 2.49954 20.3016 2.74115 19.4081 2.85C20.3471 2.28768 21.0532 1.39433 21.3941 0.337507C20.5063 0.868407 19.5367 1.24091 18.5268 1.43907C18.1015 0.983222 17.59 0.620586 17.0234 0.3732C16.4568 0.125813 15.8469 -0.00115656 15.2309 7.93799e-06C12.7366 7.93799e-06 10.7181 2.03438 10.7181 4.54218C10.7164 4.89101 10.7554 5.2388 10.8345 5.57812C9.04598 5.49236 7.29462 5.02573 5.69249 4.20808C4.09037 3.39043 2.67276 2.23976 1.53038 0.829693C1.1296 1.52068 0.917644 2.30908 0.916667 3.1125C0.916667 4.68749 1.72013 6.07968 2.93333 6.8953C2.21454 6.87785 1.51048 6.68328 0.880917 6.32811V6.38436C0.880917 8.58748 2.43925 10.4203 4.50175 10.8375C4.1139 10.9432 3.71423 10.9968 3.31283 10.9968C3.02802 10.9974 2.74384 10.9691 2.46446 10.9125C3.03783 12.7172 4.70663 14.0297 6.68342 14.0672C5.07713 15.3332 3.10503 16.0175 1.07708 16.0125C0.717117 16.0119 0.357484 15.99 0 15.9468C2.06304 17.2941 4.46116 18.0068 6.90892 18C15.2213 18 19.7624 11.0765 19.7624 5.07187C19.7624 4.87499 19.7574 4.67812 19.7482 4.48593C20.6296 3.84471 21.3922 3.04786 22 2.13281Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="21" height="17" viewBox="0 0 21 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.125 1H2.375C1.33947 1 0.5 1.83946 0.5 2.875V14.125C0.5 15.1605 1.33947 16 2.375 16H18.125C19.1605 16 20 15.1605 20 14.125V2.875C20 1.83946 19.1605 1 18.125 1Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.5 4L10.25 9.24999L17 4" stroke="white" stroke-linecap="round"
                                  stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.8458 3.97442C23.8458 1.86511 22.294 0.168277 20.3766 0.168277C17.7794 0.0468736 15.1306 0 12.4237 0H11.5799C8.87953 0 6.22607 0.0468737 3.62887 0.168745C1.71613 0.168745 0.164368 1.87495 0.164368 3.98427C0.047166 5.6525 -0.00252777 7.32121 0.000285087 8.98991C-0.004403 10.6586 0.0487287 12.3289 0.15968 14.0007C0.15968 16.11 1.71144 17.8209 3.62418 17.8209C6.35265 17.9475 9.15144 18.0037 11.9971 17.999C14.8475 18.0084 17.6384 17.949 20.37 17.8209C22.2875 17.8209 23.8392 16.11 23.8392 14.0007C23.9517 12.3273 24.0033 10.6586 23.9986 8.98522C24.0092 7.31652 23.9583 5.64625 23.8458 3.97442ZM9.70463 13.5882V4.37754L16.5024 8.98054L9.70463 13.5882Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row footer-container-bottom">
            <div class="xl-5 lg-5 md-5 dm-12 sm-12"></div>
            <div class="xl-2 lg-2 md-2 dm-12 sm-12">
                <a href="" class="footer-bottom-a">
                    Terms / Conditions
                </a>
            </div>
            <div class="xl-2 lg-2 md-2 dm-12 sm-12">
                <a href="" class="footer-bottom-a">
                    Returns / Exchanges
                </a>
            </div>
            <div class="xl-3 lg-3 md-3 db-12 sm-12">
                <div class="footer-bottom-p">
                    Designed and developed by <a href="https://unitedskills.az/" target="_blank">United
                        Skills</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="js/main.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>
