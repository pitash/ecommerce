@extends('frontend.pages.index')
@section('related_product')
<section class="related-products section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Related Products</h2>
                    <p class="sub-title">Add related products to weekly lineup</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                    <!-- product item start -->
                    <div class="product-item">
                        <figure class="product-thumb">
                            <a href="product-details.html">
                                <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-11.jpg') }}" alt="product">
                                <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-8.jpg') }}" alt="product">
                            </a>
                            <div class="product-badge">
                                <div class="product-label new">
                                    <span>new</span>
                                </div>
                                <div class="product-label discount">
                                    <span>10%</span>
                                </div>
                            </div>
                            <div class="button-group">
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                                <button class="btn btn-cart">add to cart</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <div class="product-identity">
                                <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                            </div>
                            <ul class="color-categories">
                                <li>
                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                </li>
                                <li>
                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                </li>
                                <li>
                                    <a class="c-grey" href="#" title="Grey"></a>
                                </li>
                                <li>
                                    <a class="c-brown" href="#" title="Brown"></a>
                                </li>
                            </ul>
                            <h6 class="product-name">
                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                            </h6>
                            <div class="price-box">
                                <span class="price-regular">$60.00</span>
                                <span class="price-old"><del>$70.00</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- product item end -->

                    <!-- product item start -->
                    <div class="product-item">
                        <figure class="product-thumb">
                            <a href="product-details.html">
                                <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-12.jpg') }}" alt="product">
                                <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-7.jpg') }}" alt="product">
                            </a>
                            <div class="product-badge">
                                <div class="product-label new">
                                    <span>sale</span>
                                </div>
                                <div class="product-label discount">
                                    <span>new</span>
                                </div>
                            </div>
                            <div class="button-group">
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                                <button class="btn btn-cart">add to cart</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <div class="product-identity">
                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                            </div>
                            <ul class="color-categories">
                                <li>
                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                </li>
                                <li>
                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                </li>
                                <li>
                                    <a class="c-grey" href="#" title="Grey"></a>
                                </li>
                                <li>
                                    <a class="c-brown" href="#" title="Brown"></a>
                                </li>
                            </ul>
                            <h6 class="product-name">
                                <a href="product-details.html">Handmade Golden Necklace</a>
                            </h6>
                            <div class="price-box">
                                <span class="price-regular">$50.00</span>
                                <span class="price-old"><del>$80.00</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- product item end -->

                    <!-- product item start -->
                    <div class="product-item">
                        <figure class="product-thumb">
                            <a href="product-details.html">
                                <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-13.jpg') }}" alt="product">
                                <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-6.jpg') }}" alt="product">
                            </a>
                            <div class="product-badge">
                                <div class="product-label new">
                                    <span>new</span>
                                </div>
                            </div>
                            <div class="button-group">
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                                <button class="btn btn-cart">add to cart</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <div class="product-identity">
                                <p class="manufacturer-name"><a href="product-details.html">Diamond</a></p>
                            </div>
                            <ul class="color-categories">
                                <li>
                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                </li>
                                <li>
                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                </li>
                                <li>
                                    <a class="c-grey" href="#" title="Grey"></a>
                                </li>
                                <li>
                                    <a class="c-brown" href="#" title="Brown"></a>
                                </li>
                            </ul>
                            <h6 class="product-name">
                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                            </h6>
                            <div class="price-box">
                                <span class="price-regular">$99.00</span>
                                <span class="price-old"><del></del></span>
                            </div>
                        </div>
                    </div>
                    <!-- product item end -->

                    <!-- product item start -->
                    <div class="product-item">
                        <figure class="product-thumb">
                            <a href="product-details.html">
                                <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-14.jpg') }}" alt="product">
                                <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-5.jpg') }}" alt="product">
                            </a>
                            <div class="product-badge">
                                <div class="product-label new">
                                    <span>sale</span>
                                </div>
                                <div class="product-label discount">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="button-group">
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                                <button class="btn btn-cart">add to cart</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <div class="product-identity">
                                <p class="manufacturer-name"><a href="product-details.html">silver</a></p>
                            </div>
                            <ul class="color-categories">
                                <li>
                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                </li>
                                <li>
                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                </li>
                                <li>
                                    <a class="c-grey" href="#" title="Grey"></a>
                                </li>
                                <li>
                                    <a class="c-brown" href="#" title="Brown"></a>
                                </li>
                            </ul>
                            <h6 class="product-name">
                                <a href="product-details.html">Diamond Exclusive Ornament</a>
                            </h6>
                            <div class="price-box">
                                <span class="price-regular">$55.00</span>
                                <span class="price-old"><del>$75.00</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- product item end -->

                    <!-- product item start -->
                    <div class="product-item">
                        <figure class="product-thumb">
                            <a href="product-details.html">
                                <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-15.jpg') }}" alt="product">
                                <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-4.jpg') }}" alt="product">
                            </a>
                            <div class="product-badge">
                                <div class="product-label new">
                                    <span>new</span>
                                </div>
                                <div class="product-label discount">
                                    <span>20%</span>
                                </div>
                            </div>
                            <div class="button-group">
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>
                            <div class="cart-hover">
                                <button class="btn btn-cart">add to cart</button>
                            </div>
                        </figure>
                        <div class="product-caption text-center">
                            <div class="product-identity">
                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                            </div>
                            <ul class="color-categories">
                                <li>
                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                </li>
                                <li>
                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                </li>
                                <li>
                                    <a class="c-grey" href="#" title="Grey"></a>
                                </li>
                                <li>
                                    <a class="c-brown" href="#" title="Brown"></a>
                                </li>
                            </ul>
                            <h6 class="product-name">
                                <a href="product-details.html">Citygold Exclusive Ring</a>
                            </h6>
                            <div class="price-box">
                                <span class="price-regular">$60.00</span>
                                <span class="price-old"><del>$70.00</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- product item end -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection