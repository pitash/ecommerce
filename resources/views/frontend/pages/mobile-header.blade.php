@extends('frontend.pages.index')
@section('m-header')
<aside class="off-canvas-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
            <i class="pe-7s-close"></i>
        </div>

        <div class="off-canvas-inner">
            <!-- search box start -->
            <div class="search-box-offcanvas">
                <form>
                    <input type="text" placeholder="Search Here...">
                    <button class="search-btn"><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- search box end -->

            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                            
                        </li>
                        <li class="menu-item-has-children"><a href="#">Category</a>
                            <ul class="megamenu dropdown">
                                <li class="mega-title menu-item-has-children"><a href="#">ladies</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">Diamonds</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">Cosmetics</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Bags</a></li>
                                        <li><a href="shop-list-right-sidebar.html">footwear</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Watch</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">gents</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">trimmer</a></li>
                                        <li><a href="product-details-affiliate.html">Watch</a></li>
                                        <li><a href="product-details-variable.html">T-shirt</a></li>
                                        <li><a href="product-details-group.html">glasses</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">Childs</a>
                                    <ul class="dropdown">
                                        <li><a href="cart.html">Feeding</a></li>
                                        <li><a href="checkout.html">Diapering & Potty</a></li>
                                        <li><a href="compare.html">Clothing</a></li>
                                        <li><a href="wishlist.html">Toys & Games</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">Organic</a>
                                    <ul class="dropdown">
                                        <li><a href="my-account.html">Fish</a></li>
                                        <li><a href="login-register.html">Sauce</a></li>
                                        <li><a href="about-us.html">Oil</a></li>
                                        <li><a href="contact-us.html">Food</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Electronic</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><a href="#">Mobiles</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">Xiaomi</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">Samsung</a></li>
                                        <li><a href="shop-grid-full-3-col.html">Huawei</a></li>
                                        <li><a href="shop-grid-full-4-col.html">Apple</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Computer</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-list-left-sidebar.html">Laptops</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Desktops</a></li>
                                        <li><a href="shop-list-full-width.html">Monitors</a></li>
                                        <li><a href="shop-list-full-width.html">Keyboards</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Cameras</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">DSLR</a></li>
                                        <li><a href="product-details-affiliate.html">Lenses</a></li>
                                        <li><a href="product-details-variable.html">Security Cameras</a></li>
                                        <li><a href="product-details-group.html">Memory Cards</a></li>
                                        <li><a href="product-details-group.html">Tripods & Monopods</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Kitchen Appliances</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Rice Cookers</a></li>
                                        <li><a href="product-details-affiliate.html">Kettles</a></li>
                                        <li><a href="product-details-variable.html">Coffee Machines</a></li>
                                        <li><a href="product-details-group.html">Sandwich Makers</a></li>
                                        <li><a href="product-details-group.html">Filters</a></li>
                                        <li><a href="product-details-group.html">Irons</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Televisions</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Xiaomi</a></li>
                                        <li><a href="product-details-affiliate.html">Samsung</a></li>
                                        <li><a href="product-details-variable.html">Huawei</a></li>
                                        <li><a href="product-details-group.html">Sony</a></li>
                                        <li><a href="product-details-group.html">Walton</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Software</a>
                            <ul class="dropdown">
                                <li><a href="blog-left-sidebar.html">ERP</a></li>
                                <li><a href="blog-list-left-sidebar.html">HRM</a></li>
                                <li><a href="blog-right-sidebar.html">Billing</a></li>
                                <li><a href="blog-list-right-sidebar.html">Accoungting</a></li>
                                <li><a href="blog-grid-full-width.html">POS</a></li>
                                <li><a href="blog-details.html">E-commerce</a></li>
                                <li><a href="blog-details-left-sidebar.html">Earning</a></li>
                                <li><a href="blog-details-audio.html">School Management</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <div class="mobile-settings">
                <ul class="nav">
                    <li>
                        <div class="dropdown mobile-top-dropdown">
                            <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Currency
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="currency">
                                <a class="dropdown-item" href="#">$ USD</a>
                                <a class="dropdown-item" href="#">$ EURO</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown mobile-top-dropdown">
                            <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="myaccount">
                                <a class="dropdown-item" href="my-account.html">my account</a>
                                <a class="dropdown-item" href="login-register.html"> login</a>
                                <a class="dropdown-item" href="login-register.html">register</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- offcanvas widget area start -->
            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <ul>
                        <li><i class="fa fa-mobile"></i>
                            <a href="#">01521473703</a>
                        </li>
                        <li><i class="fa fa-envelope-o"></i>
                            <a href="#">info@yourdomain.com</a>
                        </li>
                    </ul>
                </div>
                <div class="off-canvas-social-widget">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
            <!-- offcanvas widget area end -->
        </div>
    </div>
</aside> 
@endsection