@extends('admin.pages.dash')
@section('content')
<div class="content-page">
    <!-- Start Content-->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-4">
                        <form class="form-inline">
                            <div class="form-group">
                                <h4 class="h3">All Product</h4>
                            </div>
                            
                        </form>
                        
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="text-lg-right mt-3 mt-lg-0">    
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id=""><i class="fe-chevrons-down"></i></span>
                                </div>
                                <select name="parent" class="selectpicker form-control" data-style="btn-outline-primary">
                                    <option>--Search Category--</option>
                                    <option>Category</option>
                                    <option>Search Category</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-4">
                        <div class="text-lg-right mt-3 mt-lg-0">
                            <button type="button" class="btn btn-warning waves-effect waves-light mr-1"><i class="mdi mdi-spin mdi-star"></i></button>
                            <a href="{{ route('product.create') }}" class="btn btn-danger waves-effect waves-light"><i class="dripicons-export"></i> Add New Product</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-6 col-xl-3">
            <div class="card-box product-box">

                <div class="product-action">
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                </div>

                <div>
                    <img src="{{ asset('admin/assets/images/products/product-6.jpg') }}" alt="product-pic" class="img-fluid" />
                </div>

                <div class="product-info">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="font-16 mt-0 sp-line-1"><a href="{{ route('product.show',$product->id) }}" class="text-light">{{ $product->product_name }}</a> </h5>
                            <div class="text-warning mb-2 font-13">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stocks : {{ $product->product_quantity }} pcs</span></h5>
                        </div>
                        <div class="col-auto">
                            <div class="product-price-tag">
                                ${{ $product->regular_price }}
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end product info-->
            </div> <!-- end card-box-->  
        </div> <!-- end col-->
        @empty
           <div class="col-md-6">
            <h1>There Is No Product</h1>
           </div>
           
        @endforelse
    </div>
    <!-- end row--> 
</div><!-- end content-page -->
@endsection
