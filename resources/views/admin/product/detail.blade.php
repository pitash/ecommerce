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
                                <h4 class="h3">Product Detail</h4>
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
                            <a href="{{ route('product.index') }}" class="btn btn-danger waves-effect waves-light"><i class="ti-angle-double-left"></i> All Category</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->
    
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-xl-5">

                        <div class="tab-content pt-0">
                            <div class="tab-pane active show" id="product-1-item">
                                <img src="{{ asset('admin/assets/images/products/product-9.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                            <div class="tab-pane" id="product-2-item">
                                <img src="{{ asset('admin/assets/images/products/product-10.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                            <div class="tab-pane" id="product-3-item">
                                <img src="{{ asset('admin/assets/images/products/product-11.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                            <div class="tab-pane" id="product-4-item">
                                <img src="{{ asset('admin/assets/images/products/product-12.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </div>

                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#product-1-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb active show">
                                    <img src="{{ asset('admin/assets/images/products/product-9.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-2-item" data-toggle="tab" aria-expanded="true" class="nav-link product-thumb">
                                    <img src="{{ asset('admin/assets/images/products/product-10.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-3-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb">
                                    <img src="{{ asset('admin/assets/images/products/product-11.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-4-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb">
                                    <img src="{{ asset('admin/assets/images/products/product-12.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                                </a>
                            </li>
                        </ul>
                    </div> <!-- end col -->
                    <div class="col-xl-7">
                        <div class="pl-xl-3 mt-3 mt-xl-0">
                            {{-- <a href="#" class="text-primary">Jack & Jones</a> --}}
                            <h4 class="mb-3">{{ $products->product_name }}</h4>
                            <p class="text-muted float-left mr-3">
                                <span class="mdi mdi-star text-warning"></span>
                                <span class="mdi mdi-star text-warning"></span>
                                <span class="mdi mdi-star text-warning"></span>
                                <span class="mdi mdi-star text-warning"></span>
                                <span class="mdi mdi-star"></span>
                            </p>
                            <p class="mb-4"><a href="#" class="text-muted">( 36 Customer Reviews )</a></p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity" class="col-form-label">Category</label>
                                    <input type="text" class="form-control" value="{{ $products->category }}" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState" class="col-form-label">Sub Category</label>
                                    <input type="text" class="form-control" value="{{ $products->sub_cate }}" id="inputZip">
                                </div>
                                {{-- <div class="form-group col-md-4">
                                    <label for="inputZip" class="col-form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div> --}}
                            </div> <br>
                            <h6 class="text-danger text-uppercase">{{ $products->discount_percent }} % Off</h6>
                            <h4 class="mb-4">Price : <span class="text-muted mr-2"><del>${{ $products->old_price }} USD</del></span> <b>${{ $products->regular_price }} USD</b></h4>
                            {{-- <h4><span class="badge bg-soft-success text-success mb-4">Instock</span></h4> --}}
                            <p class="text-muted mb-4">{!! $products->pro_detail !!}</p>
                             <!-- Form row --> 
                             

                            {{-- <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i> Sed ut perspiciatis unde</p>
                                        <p class="text-muted"><i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i> Nemo enim ipsam voluptatem</p>
                                        <p class="text-muted"><i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i> Temporibus autem quibusdam et</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i> Itaque earum rerum hic</p>
                                        <p class="text-muted"><i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i> Donec quam felis ultricies nec</p>
                                    </div>
                                </div>
                            </div> --}}
                             
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div><!-- end row-->  
</div><!-- end content-page -->
@endsection
