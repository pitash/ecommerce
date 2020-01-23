@extends('frontend.pages.index')
@section('topbar')
<div class="header-top bdr-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="welcome-message">
                    <p>Welcome online store</p>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="header-top-settings">
                    <ul class="nav align-items-center justify-content-end">
                        <li class="curreny-wrap">
                            $ Currency
                            <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list curreny-list">
                                <li><a href="#">$ usd</a></li>
                                <li><a href="#">€ EURO</a></li>
                            </ul>
                        </li>
                        <li class="language">
                            <img src="{{ asset('frontend/assets/img/icon/en.png') }}" alt="flag"> English
                            <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list">
                                <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/en.png') }}" alt="flag"> english</a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/fr.png') }}" alt="flag"> french</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection