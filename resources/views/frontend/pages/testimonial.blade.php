@extends('frontend.pages.index')
@section('testimonial')
<section class="testimonial-area section-padding bg-img" data-bg="frontend/assets/img/testimonial/testimonials-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">testimonials</h2>
                    <p class="sub-title">What they say</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-thumb-wrapper">
                    <div class="testimonial-thumb-carousel">
                            @foreach ($tests as $test)
                        <div class="testimonial-thumb">
                            <img src="{{ asset('/storage') }}/{{ $test->img }}" alt="testimonial-thumb">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="testimonial-content-wrapper">
                    <div class="testimonial-content-carousel">
                        @foreach ($tests as $test)
                        <div class="testimonial-content">
                            <p>{!! $test->pro_detail !!}</p>
                            <div class="ratings">
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <h5 class="testimonial-author">{{ $test->person_name }}</h5>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection