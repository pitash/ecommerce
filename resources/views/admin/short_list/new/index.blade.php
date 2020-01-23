@extends('admin.pages.dash')
@section('content')
<div class="content-page">
    <!-- Start Content-->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-inline">
                            <div class="form-group">
                                <h4 class="h3">New Arrival</h4>
                            </div>
                            <div class="form-group mx-sm-3">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                        <li class="breadcrumb-item active">Products</li>
                                    </ol>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-right mt-3 mt-lg-0">
                                <button type="button" class="btn btn-warning waves-effect waves-light mr-1"><i class="mdi mdi-spin mdi-star"></i></button>
                            <a href="{{ route('new.create') }}" class="btn btn-danger waves-effect waves-light"><i class="dripicons-export"></i> Add New Arrival</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
        </div><!-- end row -->

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert" style="background:#2EBBDB;color:#FFFFFF;text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success !!</strong>{{ Session::get('success') }}!
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-success" role="alert" style="background:#f44336;color:#fff;text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong>{{ Session::get('error') }}!
            </div>
            @endif

    <div class="row">
        @forelse ($nws as $product)
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
                            <h5 class="font-16 mt-0 sp-line-1"><a href="{{ route('new.show',$product->id) }}" class="text-light">{{ $product->product_name }}</a> </h5>
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
            <h1>There Is No New Arrival</h1>
            </div>
            
        @endforelse
    </div>
</div><!-- end content-page -->
@endsection
