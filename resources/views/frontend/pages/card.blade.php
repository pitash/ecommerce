@extends('frontend.pages.index')
@section('up-card')
<div class="banner-statistics-area">
    <div class="container">
        <div class="row row-20 mtn-20">
            @foreach ($top_cards as $top_card)
            @php
                $var = $top_card->pro_name;
                $hovar = $top_card->hover_text;
                $slipt = explode(" ", $var);
                $hoveslipt = explode(" ", $hovar);
            @endphp
            <div class="col-sm-6">
                <a href="#">
                    <div class="single_promo">
                        <img src="{{ asset('/storage') }}/{{ $top_card->img }}" alt="product banner">
                        <div class="box-content">
                            <span class="banner-text2 post"><?php echo $hoveslipt[0]?> <span><?php echo $hoveslipt[1]?></span></span>
                        </div>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1 title">{{ $top_card->title }}</h5>
                            {{-- <h2 class="banner-text2">Wedding <span>Rings</span></h2> --}}
                            <h2 class="banner-text2"><?php echo $slipt[0]?> <span><?php echo $slipt[1]?></span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            {{-- <div class="col-sm-6">
                <a href="#">
                    <div class="single_promo">
                        <img src="{{ asset('frontend/assets/img/banner/img2-top.jpg') }}" alt="product banner">
                        <div class="box-content">
                            
                            <span class="banner-text2 post">Floral <span>Earring</span></span>
                        </div>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1 title">EARRINGS</h5>
                            <h2 class="banner-text2">Floral <span>Earring</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#">
                    <div class="single_promo">
                        <img src="{{ asset('frontend/assets/img/banner/img3-top.jpg') }}" alt="product banner">
                        <div class="box-content">
                            
                            <span class="banner-text2 post">Pearl <span>Necklaces</span></span>
                        </div>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1 title">NEW ARRIVALLS</h5>
                            <h2 class="banner-text2">Pearl <span>Necklaces</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#">
                    <div class="single_promo">
                        <img src="{{ asset('frontend/assets/img/banner/img4-top.jpg') }}" alt="product banner">
                        <div class="box-content">
                            <span class="banner-text2 post">Diamond <span>Jewelry</span></span>
                        </div>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1 title">NEW DESIGN</h5>
                            <h2 class="banner-text2">Diamond <span>Jewelry</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div> --}}
            
        </div>
    </div>
</div>
@endsection