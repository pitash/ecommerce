<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{ url('/home') }}">
                        <i class="fas fa-stroopwafel fa-spin"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-home"></i>
                        <span> Header </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('header.index') }}">Parent</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}">Categories </a>
                        </li>
                        <li>
                            <a href="{{ route('sub_category.index') }}">Subcategory </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('product.index') }}">
                        <i class="fe-shopping-cart"></i>
                        <span> Product </span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);">
                            <i class="fe-server"></i>
                        <span> Card </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('top_card.index') }}">Top Card</a>
                        </li>
                        <li>
                            <a href="{{ route('center_card.index') }}">Mid Card </a>
                        </li>
                        <li>
                            <a href="#">Below Card </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                            <i class="fe-cpu"></i>
                        <span> Short List </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('new.index') }}">New Arival</a>
                        </li>
                        <li>
                            <a href="{{ route('center_card.index') }}">Best Seller </a>
                        </li>
                        <li>
                            <a href="#">On Sale </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('testimonial.index') }}">
                        <i class="dripicons-crosshair"></i>
                        <span> Testimonial </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                            <i class="fas fa-cog fa-spin fa-1x"></i>
                        <span> Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('general.index') }}">General</a>
                        </li>
                        <li>
                            <a href="{{ route('service.index') }}">Service </a>
                        </li>
                        <li>
                            <a href="ecommerce-products.html">Subcategory </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="menu-title mt-2">Components</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-folder-plus"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>  
                        </li>
                        <li>
                            <a>Level 1.2
                                <span class="menu-arrow"></span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
