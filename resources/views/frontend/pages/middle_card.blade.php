@extends('frontend.pages.index')
@section('middle_card')
<section class="product-banner-statistics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="product-banner-carousel slick-row-10">
                        @foreach ($cen_cards as $cen_card)
                    <!-- banner single slide start -->
                    <div class="banner-slide-item">
                        <figure class="banner-statistics single_promo">
                            <a href="#">
                                <img src="{{ asset('/storage') }}/{{ $cen_card->img }}" alt="product banner">
                            <div class="box-content">
                                
                            </div>
                            <div class="banner-content banner-content_style2">
                                <h5 class="banner-text3 title"><a href="#">{{ $cen_card->name }}</a></h5>
                            </div>
                          </a>
                        </figure>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection