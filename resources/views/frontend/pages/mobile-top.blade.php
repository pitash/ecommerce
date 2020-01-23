@extends('frontend.pages.index')
@section('mob-top')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="mobile-main-header">
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="Brand Logo">
                    </a>
                </div>
                <div class="mobile-menu-toggler">
                    <div class="mini-cart-wrap">
                        <a href="cart.html">
                            <i class="pe-7s-shopbag"></i>
                            <div class="notification">0</div>
                        </a>
                    </div>
                    <button class="mobile-menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection