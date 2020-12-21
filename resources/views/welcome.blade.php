{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #ffffff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}

{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">{{ Auth::user()->full_name }}</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}


{{--</html>--}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ghaadi - Watch Store</title>
    <!--- main css-->
    <link rel="stylesheet" href="{{asset('/css/app1.css')}}" />
    <!-- Remix Icon-->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <!---Favicon-->
    <link rel="shortcut icon" href="{{asset('/images/favicon.ico?')}}" type="image/x-icon" />
    <!-- Owl Carousel-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous"
    />

</head>
<body>
<!-- SITE HEADER BEGINS -->

<header class="header">
    <nav class="header__nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="flex-sm-2 flex-md-3">
                    <div class="header__menu">
                        <button class="header__menu--toggler">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span></button>
                        <!-- .header__menu--toggler ends-->

                        <span class="hide-on-sm show-on-md">Product We Sell</span>
                    </div>
                    <!-- .header__menu ends-->
                </div>
                <!-- .flex-* ends-->

                <div class="flex-sm-6">
                    <div class="header__logo">
                        <a href="/"
                        ><img src="{{asset('/images/Brand_logo.png')}}  " alt="Brand Logo"
                            /></a>
                    </div>
                </div>
                <!-- .flex-* ends-->
                <div class="flex-sm-4 flex-md-3">
                    <div class="header__extra">
                        <div class="search">
                            <div class="icon"><a href="/search"><i class="ri-search-line"></i></a></div>
                        </div>
                        <!-- .search ends-->

                        <div class="cart">
                            <div class="icon">
                                <a href="/home/cart"><i class="ri-shopping-bag-line"></i></a>
                                <span></span>
                            </div>
                        </div>


                        <!-- .cart ends-->

                        <div class="profile">

                            <div class="dropdown">
                                @guest
                                <a onclick=myFunction() class="dropbtn"><img src="./images/user-profile.png" alt=""></a>
                                    @if(Route::has('register'))
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                </div>
                                    @endif

                                @else
                                    <a onclick=myFunction() class="dropbtn"><img src="./images/user-profile.png" alt=""></a>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="/home">{{Auth::user()->first_name}}'s Dashboard</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                        </form>
                                    </div>
                                @endguest
                            </div><!-- .dropdown ends-->


                        </div>
                        <!-- .profile ends-->
                    </div>
                    <!-- .header__extra ends-->
                </div>
                <!-- .flex-* ends-->
            </div>
            <!-- .row ends-->
        </div>
        <!-- .container ends-->

        <div class="megamenu">
            <div class="close-megamenu hide-on-lg">
                <i class="ri-close-line"></i>
            </div>
            <!-- .close-megamenu ends-->

            <div class="container">
                <div class="row">
                    <div class="flex-lg-3">
                        <ul>
                            <h3>Men's Watch</h3>

                            <li><a href="">Sports watch</a></li>
                            <li><a href="">Classic watch</a></li>
                            <li><a href="">Smart watch</a></li>
                        </ul>
                    </div>
                    <!-- .flex-* ends-->

                    <div class="flex-lg-3">
                        <ul>
                            <h3>Women's Watch</h3>

                            <li><a href="">Sports watch</a></li>
                            <li><a href="">Classic watch</a></li>
                            <li><a href="">Smart watch</a></li>
                        </ul>
                    </div>
                    <!-- .flex-* ends-->

                    <div class="flex-lg-3">
                        <ul>
                            <h3>Kids Watch</h3>

                            <li><a href="">Sports Watch</a></li>
                            <li><a href="">Classic Watch</a></li>
                            <li><a href="">Smart Watch</a></li>
                        </ul>
                    </div>
                    <!-- .flex-* ends-->

                    <div class="flex-lg-3">
                        <ul>
                            <h3>Popular Brands</h3>

                            <li><a href="">Rolex</a></li>
                            <li><a href="">Omega</a></li>
                            <li><a href="">Seiko</a></li>
                            <li><a href="">Geforce</a></li>
                        </ul>
                    </div>
                    <!-- .flex-* ends-->
                </div>
                <!-- .row ends-->
            </div>
            <!-- .container ends-->
        </div>
        <!-- .megamenu ends-->
    </nav>
    <!-- .header__nav ends-->
</header>
<!-- .header ends-->

<!-- SITE HEADER Ends -->

<!-- Main Section Begins -->

<main>
    <!-- Hero sections starts-->
    <section class="hero">
        <div class="hero__carousel owl-carousel" id="hero-carousel">
            <div class="sport-watch hero__slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="flex-lg-12">
                            <div class="sport-watch__content text-center-sm text-left-lg">
                                <h1>
                                    Giving <br />a style<br />
                                    that matters
                                </h1>

                                <a href="" class="button button--default">Shop Now</a>
                            </div>
                        </div>
                        <!-- .flex-* ends-->

                        <!-- <div class="flex-lg-6">
                          <div class="sport-watch__image">
                            <img src="./images/slider-image1.png " alt="image1" />
                          </div>
                        </div> -->
                        <!-- .flex-* ends-->
                    </div>
                    <!-- .row ends-->
                </div>
                <!-- .container ends-->
            </div>
            <!-- .sport-watch ends-->

            <div class="classic-watch hero__slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="flex-lg-12">
                            <div
                                class="classic-watch__content text-center-sm text-left-lg"
                            >
                                <h1>
                                    Get Stylish, <br />
                                    Get Watch
                                </h1>

                                <a href="" class="button button--default">Shop Now</a>
                            </div>
                        </div>
                        <!-- .flex-* ends-->

                        <!-- <div class="flex-lg-6">
                          <div class="sport-watch__image">
                            <img src="./images/slider-image2.png " alt="image1" />
                          </div>
                        </div> -->
                        <!-- .flex-* ends-->
                    </div>
                    <!-- .row ends-->
                </div>
                <!-- .container ends-->
            </div>
            <!-- .classic-watch ends-->

            <div class="smart-watch hero__slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="flex-lg-12">
                            <div
                                class="smart-watch__content text-center-sm text-left-lg"
                            >
                                <h1>
                                    Be Smart,<br> Buy Smart
                                </h1>

                                <a href="" class="button button--default">Shop Now</a>
                            </div>
                        </div>
                        <!-- .flex-* ends-->

                        <!-- <div class="flex-lg-6">
                          <div class="smart-watch__image">
                            <img src="./images/slider-image3.png " alt="image3" />
                          </div>
                        </div> -->
                        <!-- .flex-* ends-->
                    </div>
                    <!-- .row ends-->
                </div>
            </div>
            <!-- .container ends-->
        </div>
        <!-- .smart-watch ends-->

        </div>


        <!-- .hero_carousel ends-->
    </section>
    <!-- .hero ends-->

    <!--Hero sections ends -->

    <!---- Category Section Starts-->
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="flex-md-6 flex-lg-7">

                    <div class="card category__card mens-category">
                        <div class="card__body">
                            <h2>Men's Watch</h2>
                            <a href="" class="button button--default">Shop men's watch</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->
                </div><!-- .flex-* ends-->
                <div class="flex-md-6 flex-lg-5">

                    <div class="card category__card sport-category">
                        <div class="card__body">
                            <h2>Sport Watch</h2>
                            <a href="" class="button button--default">Shop sport watch</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->
                </div><!-- .flex-* ends-->
            </div><!-- .row ends-->

            <div class="row">
                <div class="flex-md-6 flex-lg-5">

                    <div class="card category__card classic-category">
                        <div class="card__body">
                            <h2>Classic Watch</h2>
                            <a href="" class="button button--default">Shop classic watch</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->
                </div><!-- .flex-* ends-->
                <div class="flex-md-6 flex-lg-7">

                    <div class="card category__card womens-category">
                        <div class="card__body">
                            <h2>Women's Watch</h2>
                            <a href="" class="button button--default">Shop womens watch</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->
                </div><!-- .flex-* ends-->
            </div><!-- .row ends-->

        </div><!-- .container ends-->
    </section><!-- .category ends-->
    <!---- Category Section Endss-->

    <!-- Featured Products section starts-->

{{--    <section class="featured-products default-section-spacing">--}}
{{--        <div class="container">--}}
{{--            <div class="section-heading text-center-sm">--}}
{{--                <div class="intro-bg">Featured products</div>--}}
{{--                <h2>Featured products</h2>--}}
{{--            </div><!-- .section-heading ends-->--}}

{{--            <div class="featured-products__carousel owl-carousel" id="featured-products-carousel">--}}

{{--                <div class="card product-card">--}}

{{--                    <div class="card__header">--}}
{{--                        <i class="ri-heart-line"></i>--}}
{{--                        <img src="./images/featured/Bomberg Watch RACING For Men. BS45CHSP.059-3.10 Quartz.jpg" alt="">--}}
{{--                    </div><!-- .card__header ends-->--}}

{{--                    <div class="card__body">--}}

{{--                        <div class="product-details">--}}

{{--                            <div class="title-reviews">--}}
{{--                                <h3>Bomberg Watch RACING For Men</h3>--}}

{{--                                <div class="reviews">--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <span>(85 reviews)</span>--}}
{{--                                </div><!-- .reviews ends-->--}}

{{--                            </div><!-- .title-reviews ends-->--}}

{{--                            <div class="price">NPR 104,380</div><!-- .price ends-->--}}

{{--                        </div><!-- .product-details ends-->--}}

{{--                    </div><!-- .card__body ends-->--}}

{{--                    <div class="card_footer">--}}
{{--                        <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                    </div><!-- .card_footer ends-->--}}

{{--                </div><!-- .card ends-->--}}

{{--                <div class="card product-card">--}}

{{--                    <div class="card__header">--}}
{{--                        <i class="ri-heart-line"></i>--}}
{{--                        <img src="./images/featured/naviforce-nf9110-chronograph-luxury-watchs.jpg" alt="">--}}
{{--                    </div><!-- .card__header ends-->--}}

{{--                    <div class="card__body">--}}

{{--                        <div class="product-details">--}}

{{--                            <div class="title-reviews">--}}
{{--                                <h3>naviforce-nf9110-chronograph</h3>--}}

{{--                                <div class="reviews">--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <span>(55 reviews)</span>--}}
{{--                                </div><!-- .reviews ends-->--}}

{{--                            </div><!-- .title-reviews ends-->--}}

{{--                            <div class="price">NPR 3200</div><!-- .price ends-->--}}

{{--                        </div><!-- .product-details ends-->--}}

{{--                    </div><!-- .card__body ends-->--}}

{{--                    <div class="card_footer">--}}
{{--                        <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                    </div><!-- .card_footer ends-->--}}

{{--                </div><!-- .card ends-->--}}

{{--                <div class="card product-card">--}}

{{--                    <div class="card__header">--}}
{{--                        <i class="ri-heart-line"></i>--}}
{{--                        <img src="./images/featured/Casio G-Shock Gg-1000-1A5Dr(G661) Mud Master Men's Watch.jpg" alt="">--}}
{{--                    </div><!-- .card__header ends-->--}}

{{--                    <div class="card__body">--}}

{{--                        <div class="product-details">--}}

{{--                            <div class="title-reviews">--}}
{{--                                <h3>Casio G-Shock Gg-1000-1A5Dr(G661)..</h3>--}}

{{--                                <div class="reviews">--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <span>(100 reviews)</span>--}}
{{--                                </div><!-- .reviews ends-->--}}

{{--                            </div><!-- .title-reviews ends-->--}}

{{--                            <div class="price">NPR 32,525</div><!-- .price ends-->--}}

{{--                        </div><!-- .product-details ends-->--}}

{{--                    </div><!-- .card__body ends-->--}}

{{--                    <div class="card_footer">--}}
{{--                        <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                    </div><!-- .card_footer ends-->--}}

{{--                </div><!-- .card ends-->--}}

{{--                <div class="card product-card">--}}

{{--                    <div class="card__header">--}}
{{--                        <i class="ri-heart-line"></i>--}}
{{--                        <img src="./images/featured/Titan White Dial Analog Watch For Men - 9480Km02.jpg" alt="">--}}
{{--                    </div><!-- .card__header ends-->--}}

{{--                    <div class="card__body">--}}

{{--                        <div class="product-details">--}}

{{--                            <div class="title-reviews">--}}
{{--                                <h3>Titan White Dial Analog Watch</h3>--}}

{{--                                <div class="reviews">--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <span>(60 reviews)</span>--}}
{{--                                </div><!-- .reviews ends-->--}}

{{--                            </div><!-- .title-reviews ends-->--}}

{{--                            <div class="price">NPR 37,990</div><!-- .price ends-->--}}

{{--                        </div><!-- .product-details ends-->--}}

{{--                    </div><!-- .card__body ends-->--}}

{{--                    <div class="card_footer">--}}
{{--                        <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                    </div><!-- .card_footer ends-->--}}

{{--                </div><!-- .card ends-->--}}

{{--                <div class="card product-card">--}}

{{--                    <div class="card__header">--}}
{{--                        <i class="ri-heart-line"></i>--}}
{{--                        <img src="./images/featured/NAVIFORCE Nf9150 Luxury Chronograph Hollow Steel Watch-Golden.jpg" alt="">--}}
{{--                    </div><!-- .card__header ends-->--}}

{{--                    <div class="card__body">--}}

{{--                        <div class="product-details">--}}

{{--                            <div class="title-reviews">--}}
{{--                                <h3>NAVIFORCE Nf9150 Luxury Chronograph Hollow</h3>--}}

{{--                                <div class="reviews">--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-fill"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <i class="ri-star-s-line"></i>--}}
{{--                                    <span>(30 reviews)</span>--}}
{{--                                </div><!-- .reviews ends-->--}}

{{--                            </div><!-- .title-reviews ends-->--}}

{{--                            <div class="price">NPR 4500</div><!-- .price ends-->--}}

{{--                        </div><!-- .product-details ends-->--}}

{{--                    </div><!-- .card__body ends-->--}}

{{--                    <div class="card_footer">--}}
{{--                        <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                    </div><!-- .card_footer ends-->--}}

{{--                </div><!-- .card ends-->--}}

{{--            </div><!-- .featured-products__carousel ends-->--}}

{{--        </div><!-- .container ends-->--}}
{{--    </section><!-- .featured products ends-->--}}
    <!-- Featured Products section ends-->

    <!-- Trending section starts-->

    <section class="trending mar-b-sm-4">
        <div class="container">
            <div class="section-heading text-center-sm">
                <div class="intro-bg">Our Products</div>
                <h2>Our Products</h2>
            </div><!-- .section-heading ends-->

            <div class="row">
                @foreach($products as $product)
                <div class="flex-md-6 flex-lg-4">
                    <div class="card product-card">

                        <div class="card__header">
                     @foreach($product->images as $image)
                        <img src="/storage/cover_image/{{$image->imagelocation}}" alt="">
                    @endforeach

                        </div><!-- .card__header ends-->

                        <div class="card__body">

                            <div class="product-details">

                                <div class="title-reviews">
                                    <h3>{{$product->product_name}}</h3>

                                </div><!-- .title-reviews ends-->

                                <div class="price">NPR {{$product->product_price}}</div><!-- .price ends-->

                            </div><!-- .product-details ends-->

                        </div><!-- .card__body ends-->

                        <div class="card_footer">
                            <a href="/home/cart/{{$product->id}}" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>
                        </div><!-- .card_footer ends-->

                    </div><!-- .card ends-->
                </div>
                @endforeach
                    <!-- .flex-* ends-->
{{--                <div class="flex-md-6 flex-lg-4">--}}
{{--                    <div class="card product-card">--}}

{{--                        <div class="card__header">--}}
{{--                            <i class="ri-heart-line"></i>--}}
{{--                            <img src="./images/trending/Casual Unisex Quartz Watch with Leather Strap – White-Black.jpg" alt="">--}}
{{--                        </div><!-- .card__header ends-->--}}

{{--                        <div class="card__body">--}}

{{--                            <div class="product-details">--}}

{{--                                <div class="title-reviews">--}}
{{--                                    <h3>Casual Unisex Quartz Watch</h3>--}}

{{--                                    <div class="reviews">--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-line"></i>--}}
{{--                                        <i class="ri-star-s-line"></i>--}}
{{--                                        <span>(20 reviews)</span>--}}
{{--                                    </div><!-- .reviews ends-->--}}

{{--                                </div><!-- .title-reviews ends-->--}}

{{--                                <div class="price">NPR 1,250</div><!-- .price ends-->--}}

{{--                            </div><!-- .product-details ends-->--}}

{{--                        </div><!-- .card__body ends-->--}}

{{--                        <div class="card_footer">--}}
{{--                            <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                        </div><!-- .card_footer ends-->--}}

{{--                    </div><!-- .card ends-->--}}
{{--                </div><!-- .flex-* ends-->--}}
{{--                <div class="flex-md-6 flex-lg-4">--}}
{{--                    <div class="card product-card">--}}

{{--                        <div class="card__header">--}}
{{--                            <i class="ri-heart-line"></i>--}}
{{--                            <img src="./images/trending/Casio G-Shock Gba-400-4Adr(G559) Bluetooth Music Control Men's Watch.jpg" alt="">--}}
{{--                        </div><!-- .card__header ends-->--}}

{{--                        <div class="card__body">--}}

{{--                            <div class="product-details">--}}

{{--                                <div class="title-reviews">--}}
{{--                                    <h3>Casio G-Shock Gba-400-4Adr(G559)</h3>--}}

{{--                                    <div class="reviews">--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-line"></i>--}}
{{--                                        <span>(85 reviews)</span>--}}
{{--                                    </div><!-- .reviews ends-->--}}

{{--                                </div><!-- .title-reviews ends-->--}}

{{--                                <div class="price">NPR 21,695</div><!-- .price ends-->--}}

{{--                            </div><!-- .product-details ends-->--}}

{{--                        </div><!-- .card__body ends-->--}}

{{--                        <div class="card_footer">--}}
{{--                            <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                        </div><!-- .card_footer ends-->--}}

{{--                    </div><!-- .card ends-->--}}
{{--                </div><!-- .flex-* ends-->--}}
{{--                <div class="flex-md-6 flex-lg-4">--}}
{{--                    <div class="card product-card">--}}

{{--                        <div class="card__header">--}}
{{--                            <i class="ri-heart-line"></i>--}}
{{--                            <img src="./images/trending/SKMEI New Men Fashion Watches Sports Military Leather Quartz Waterproof Digital Wristwatches Male Clock 1391.jpg" alt="">--}}
{{--                        </div><!-- .card__header ends-->--}}

{{--                        <div class="card__body">--}}

{{--                            <div class="product-details">--}}

{{--                                <div class="title-reviews">--}}
{{--                                    <h3>Sports Military Leather Quartz Waterproof Digital Wristwatches</h3>--}}

{{--                                    <div class="reviews">--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-line"></i>--}}
{{--                                        <span>(30 reviews)</span>--}}
{{--                                    </div><!-- .reviews ends-->--}}

{{--                                </div><!-- .title-reviews ends-->--}}

{{--                                <div class="price">NPR 4,239</div><!-- .price ends-->--}}

{{--                            </div><!-- .product-details ends-->--}}

{{--                        </div><!-- .card__body ends-->--}}

{{--                        <div class="card_footer">--}}
{{--                            <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                        </div><!-- .card_footer ends-->--}}

{{--                    </div><!-- .card ends-->--}}
{{--                </div><!-- .flex-* ends-->--}}
{{--                <div class="flex-md-6 flex-lg-4">--}}
{{--                    <div class="card product-card">--}}

{{--                        <div class="card__header">--}}
{{--                            <i class="ri-heart-line"></i>--}}
{{--                            <img src="./images/trending/Titan Karishma Champagne Dial Analog Watch For Women- 2598Ym01.jpg" alt="">--}}
{{--                        </div><!-- .card__header ends-->--}}

{{--                        <div class="card__body">--}}

{{--                            <div class="product-details">--}}

{{--                                <div class="title-reviews">--}}
{{--                                    <h3>Titan Karishma Champagne Dial Analog Watch</h3>--}}

{{--                                    <div class="reviews">--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <span>(45 reviews)</span>--}}
{{--                                    </div><!-- .reviews ends-->--}}

{{--                                </div><!-- .title-reviews ends-->--}}

{{--                                <div class="price">NPR 3,890</div><!-- .price ends-->--}}

{{--                            </div><!-- .product-details ends-->--}}

{{--                        </div><!-- .card__body ends-->--}}

{{--                        <div class="card_footer">--}}
{{--                            <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                        </div><!-- .card_footer ends-->--}}

{{--                    </div><!-- .card ends-->--}}
{{--                </div><!-- .flex-* ends-->--}}
{{--                <div class="flex-md-6 flex-lg-4">--}}
{{--                    <div class="card product-card">--}}

{{--                        <div class="card__header">--}}
{{--                            <i class="ri-heart-line"></i>--}}
{{--                            <img src="./images/trending/NAVIFORCE Nf5011 Noble Series Elegant Ladies Watch For Women - Blue.jpg" alt="">--}}
{{--                        </div><!-- .card__header ends-->--}}

{{--                        <div class="card__body">--}}

{{--                            <div class="product-details">--}}

{{--                                <div class="title-reviews">--}}
{{--                                    <h3>NAVIFORCE Nf5011 Noble Series Elegant Ladies Watch</h3>--}}

{{--                                    <div class="reviews">--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-fill"></i>--}}
{{--                                        <i class="ri-star-s-line"></i>--}}
{{--                                        <span>(57 reviews)</span>--}}
{{--                                    </div><!-- .reviews ends-->--}}

{{--                                </div><!-- .title-reviews ends-->--}}

{{--                                <div class="price">NPR 2,550</div><!-- .price ends-->--}}

{{--                            </div><!-- .product-details ends-->--}}

{{--                        </div><!-- .card__body ends-->--}}

{{--                        <div class="card_footer">--}}
{{--                            <a href="" class="button button--default button--block">Add to card<i class="ri-shopping-bag-line"></i></a>--}}
{{--                        </div><!-- .card_footer ends-->--}}

{{--                    </div><!-- .card ends-->--}}
{{--                </div><!-- .flex-* ends-->--}}
            </div><!-- .row ends-->
        </div><!-- .container ends-->
    </section><!-- .trending ends-->

    <!-- Trending section ends-->

    <!-- Details Section Starts-->

    <section class="details default-section-spacing">
        <div class="container">
            <div class="row">
                <div class="flex-md-6 flex-lg-4">

                    <div class="card">

                        <div class="card__header">
                            <div class="details__icon">
                                <i class="ri-truck-line"></i>
                            </div><!-- .deatail__icon ends-->
                        </div><!-- .card_header ends-->

                        <div class="card__body">
                            <h3>Shipping info</h3>
                            <p>Free shipping on all orders of $100 amd more</p>
                            <a href="">Learn more</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->

                </div><!-- .flex-* ends-->
                <div class="flex-md-6 flex-lg-4">

                    <div class="card">

                        <div class="card__header">
                            <div class="details__icon">
                                <i class="ri-customer-service-2-line"></i>
                            </div><!-- .deatail__icon ends-->
                        </div><!-- .card_header ends-->

                        <div class="card__body">
                            <h3>Customer services</h3>
                            <p>You will receice world-class support on all your orders</p>
                            <a href="">Learn more</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->

                </div><!-- .flex-* ends-->
                <div class="flex-md-12 flex-lg-4">

                    <div class="card">

                        <div class="card__header">
                            <div class="details__icon">
                                <i class="ri-refresh-line"></i>
                            </div><!-- .deatail__icon ends-->
                        </div><!-- .card_header ends-->

                        <div class="card__body">
                            <h3>Return policy</h3>
                            <p>We offer a 30-day Moneyback guarenteed.</p>
                            <a href="">Learn more</a>
                        </div><!-- .card__body ends-->
                    </div><!-- .card ends-->

                </div><!-- .flex-* ends-->
            </div><!-- .row-->
        </div><!-- .container-->
    </section><!--- .details ends-->
    <!-- Details Section Ends-->
</main>
<!-- Main Section Ends -->

<!-- All Modals -->
<!-- All Modals end -->

<!-- Site Footer -->
<footer class="footer-distributed">
    <div class="footer-distributed__footer-left">
        <img src="./images/Brand_logo.png" alt="">


        <p class="footer-links">
            <a href="/">Home</a>
{{--            <a href="#">Blog</a>--}}
{{--            <a href="#">About</a>--}}
{{--            <a href="#">Contact</a>--}}
        </p><!--.footer links ends-->

{{--        <p class="footer-distributed__footer-company-name">--}}
{{--            © 2019 Eduonix Learning Solutions Pvt. Ltd.--}}
{{--        </p>--}}
    </div>

    <div class="footer-distributed__footer-center">
        <div>
            <i class="ri-map-pin-line"></i><p>xyz location</p>
        </div>
        <div>
            <i class="ri-phone-line"></i><p>+9823489234</p>
        </div>
        <div>
            <i class="ri-mail-line"></i><p>ghadi@gmail.com</p>
        </div>

    </div><!-- .footer__footer-center ends-->

    <div class="footer-distributed__footer-right">
        <p class="footer-company-about">
            <span>About us</span>
            We provide with you with best products in a reasonable price.
        </p>

        <div class="footer-icons">
            <i class="ri-facebook-fill"></i>
            <i class="ri-instagram-line"></i>
            <i class="ri-twitter-line"></i>
        </div><!-- .footer-icons ends-->

    </div><!-- .footer__footer-right ends-->

</footer><!-- .footer ends-->
<!-- Site Footer Ends -->

<!-- JQuery -->
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"
></script>

<!--
<script>
  $(function(){
$("#header").load("header.html");
});
</script> -->

<!-- Owl Carousel-->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"
></script>


<!-- Main Script -->
<script src="{{asset('/js/app1.js')}}"></script>


</body>
</html>

