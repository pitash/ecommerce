@extends('frontend.pages.index')
@section('header')
<div class="header-main-area sticky">
    <div class="container">
        <div class="row align-items-center position-relative">

            <!-- start logo area -->
            <div class="col-lg-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="Brand Logo">
                    </a>
                </div>
            </div>
            <!-- start logo area -->

            <!-- main menu area start -->
            <div class="col-lg-6 position-static">
                <div class="main-menu-area">
                    <div class="main-menu">
                        <!-- main menu navbar start -->
                        <nav class="desktop-menu">
                            <ul>
                                <li class="active"><a href="index.html">Home</a>  
                                </li>
                                <li class="position-static"><a href="#">Category <i class="fa fa-angle-down"></i></a>
                                    <ul class="megamenu dropdown">
                                        @foreach ($categs as $item)
                                        <li class="mega-title"><span>{{ $item->category }}</span>
                                            <ul>
                                                @php
                                                    $sub_catgs = App\SubCategory::where('category', $item->id)->get();
                                                @endphp 
                                                @foreach ($sub_catgs as $sub_cat)
                                                <li><a href="{{ url('diamond') }}">{{ $sub_cat->sub_category }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="shop.html">Electronic <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach ($elecs as $item)
                                        <li><a href="#">{{ $item->category }}<i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown">
                                                @php
                                                    $electronics = App\SubCategory::where('category', $item->id)->get();
                                                @endphp
                                                @foreach ($electronics as $item)
                                                    <li><a href="shop.html">{{ $item->sub_category }}</a></li>
                                                @endforeach
                                            </ul> 
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">Software <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach ($soft as $item)
                                        <li><a href="blog-left-sidebar.html">{{ $item->category }}</a></li>
                                        @endforeach
                                        
                                    </ul>
                                </li>
                                <li><a href="{{ url('contact_us') }}">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- main menu navbar end -->
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

            <!-- mini cart area start -->
            <div class="col-lg-4">
                <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                    <div class="header-search-container">
                        <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                        <form class="header-search-box d-lg-none d-xl-block animated jackInTheBox">
                            <input type="text" placeholder="Search entire store hire" class="header-search-field">
                            <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <div class="header-configure-area">
                        <ul class="nav justify-content-end">
                            <li class="user-hover">
                                <a href="#">
                                    <i class="pe-7s-user"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a href="login-register.html">login</a></li>
                                    <li><a href="login-register.html">register</a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('wishlist') }}">
                                    <i class="pe-7s-like"></i>
                                    <div class="notification">0</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="minicart-btn">
                                    <i class="pe-7s-shopbag"></i>
                                    <div class="notification">2</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- mini cart area end -->

        </div>
    </div>
</div>
@endsection