@extends('frontend.pages.index')
@section('container')
<div class="shop-main-wrapper section-padding">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                @yield('left')
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list wrapper start -->
                    <div class="shop-product-wrap grid-view row mbn-30">
                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{ url('product_details') }}">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-1.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-18.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">1</a></p>
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
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-1.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-18.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">2</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Perfect Diamond Jewelry</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-2.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-17.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">3</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-2.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-17.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">4</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Handmade Golden Necklace</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-3.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-16.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">5</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-3.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-16.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">6</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Diamond Exclusive Ornament</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-4.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-15.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">7</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-4.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-15.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">8</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Handmade Golden Necklace</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-5.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-14.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">9</a></p>
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
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-5.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-14.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">10</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Perfect Diamond Jewelry</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-6.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-13.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">11</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-6.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-13.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">12</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Diamond Exclusive Ornament</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-7.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-12.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">13</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-7.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-12.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">14</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Handmade Golden Necklace</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-8.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-11.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">15</a></p>
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
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-8.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-11.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">16</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Perfect Diamond Jewelry</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-9.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-10.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">17</a></p>
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
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-9.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-10.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">18</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Perfect Diamond Jewelry</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-10.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-9.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">19</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-10.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-9.jpg') }}" alt="product">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">20</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Handmade Golden Necklace</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
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
                                        <p class="manufacturer-name"><a href="product-details.html">21</a></p>
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
                                        <span class="price-regular">$60.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
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
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="product-details.html">22</a>
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

                                    <h5 class="product-name"><a href="product-details.html">Diamond Exclusive Ornament</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                        <span class="price-old"><del>$29.99</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                        quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                        rem, accusantium adipisci officia eaque.</p>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="{{ asset('frontend/assets/img/product/product-12.jpg') }}" alt="product">
                                        <img class="sec-img" src="{{ asset('frontend/assets/img/product/product-7.jpg') }}" alt="product">
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
                                        <p class="manufacturer-name"><a href="product-details.html">23</a></p>
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
                            <!-- product grid end -->
                        </div>
                        <!-- product single item start -->
                    </div>
                    <!-- product item list wrapper end -->

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <ul class="pagination-box">
                            <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>
@endsection