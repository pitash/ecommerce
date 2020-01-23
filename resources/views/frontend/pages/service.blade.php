@extends('frontend.pages.index')
@section('service')
<div class="service-policy section-padding">
    <div class="container">
        <div class="row mtn-30">
            @foreach ($serv as $item)
            <div class="col-sm-6 col-lg-3">
                    
                <div class="policy-item">
                    <div class="policy-icon">
                        <i class="{{ $item->icon }}"></i>
                    </div> 
                    <div class="policy-content">
                        <h6>{{ $item->title }}</h6>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                
            </div>
            @endforeach

            {{-- <div class="col-sm-6 col-lg-3">
                <div class="policy-item">
                    <div class="policy-icon">
                        <i class="pe-7s-help2"></i>
                    </div>
                    <div class="policy-content">
                        <h6>Support 24/7</h6>
                        <p>Support 24 hours a day</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="policy-item">
                    <div class="policy-icon">
                        <i class="pe-7s-back"></i>
                    </div>
                    <div class="policy-content">
                        <h6>Money Return</h6>
                        <p>30 days for free return</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="policy-item">
                    <div class="policy-icon">
                        <i class="pe-7s-credit"></i>
                    </div>
                    <div class="policy-content">
                        <h6>100% Payment Secure</h6>
                        <p>We ensure secure payment</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection