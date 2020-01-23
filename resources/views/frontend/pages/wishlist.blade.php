@extends('frontend.pages.index')
@section('wishlist')
<div class="wishlist-main-wrapper section-padding">
    <div class="container">
        <!-- Wishlist Page Content Start -->
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Wishlist Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Stock Status</th>
                                    <th class="pro-subtotal">Add to Cart</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/img/product/product-5.jpg') }}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">Diamond Exclusive Ornament</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="btn btn-sqr">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/img/product/product-6.jpg') }}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">Perfect Diamond Jewellery</a></td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="btn btn-sqr">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/img/product/product-7.jpg') }}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">Handmade Golden Necklace</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity"><span class="text-danger">Stock Out</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="btn btn-sqr disabled">Add
                                            to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/img/product/product-8.jpg') }}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">Diamond Exclusive Ornament</a></td>
                                    <td class="pro-price"><span>$110.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="btn btn-sqr">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Page Content End -->
    </div>
</div>
@endsection