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
                                <h4 class="h3">New Arrivals</h4>
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
                            <a href="{{ route('new.index') }}" class="btn btn-danger waves-effect waves-light"><i class="ti-angle-double-left"></i> All Card</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ route('new.store') }}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="product-category">Parent <span class="text-danger">*</span></label>
                                <select name="parent" class="selectpicker form-control" data-style="btn-outline-success">
                                    <option>Select One</option>
                                    @if(!empty($parent))
                                    @foreach($parent as $prnt)
                                    <option value="{{ $prnt->id }}">{{ $prnt->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group mb-3">
                                <label for="product-category">Categories <span class="text-danger">*</span></label>
                                <select name="category" class="selectpicker form-control" data-style="btn-outline-primary">
                                    <option>Select One</option>
                                    @if(!empty($cates))
                                    @foreach($cates as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->category }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="product-category">Sub Categories <span class="text-danger">*</span></label>
                                <select name="sub_cate" class="selectpicker form-control" data-style="btn-outline-warning">
                                    <option>Select One</option>
                                    @if(!empty($sub_cats))
                                    @foreach($sub_cats as $sub_cat)
                                    <option value="{{ $sub_cat->id }}">{{ $sub_cat->sub_category }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Attractive Titles <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="att_title" class="form-control" id="product-price" placeholder="">
                                    <div class="invalid-tooltip">
                                        Choose a Attractive Titles.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="product-name">Product Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="product_name" id="product-name" class="form-control" placeholder="Apple iMac">
                                    <div class="invalid-tooltip">
                                        Choose a unique Product Name.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Slug <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="slug" class="form-control" id="product-price" placeholder="">
                                    <div class="invalid-tooltip">
                                        Choose a unique Slug.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Regular Price <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="regular_price" class="form-control" id="product-price" placeholder="400">
                                    <div class="invalid-tooltip">
                                        Choose a unique Regular Price.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Old Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="old_price" class="form-control" id="product-price" placeholder="500">
                                    <div class="invalid-tooltip">
                                        Choose an Old Price.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Discount Percent </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" name="discount_percent" class="form-control" id="product-price" placeholder="10">
                                    <div class="invalid-tooltip">
                                        Choose a Discount Percent.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="product-price">Product Quantity <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="double" name="product_quantity" class="form-control" id="product-price" placeholder="4">
                                    <div class="invalid-tooltip">
                                        Choose a unique Product Quantity.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="product-description">Product Details <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" name="pro_detail" id="product-description" rows="5" placeholder="Please enter Details"></textarea>
                                    <div class="invalid-tooltip">
                                        Choose a unique Product.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card-box">
                            <h5 class="text-uppercase mt-0 mb-3">Product Images</h5>
                                <div class="fallback">
                                    <input name="pro_image" type="file" multiple />
                                </div>
                                <div class="dz-message needsclick">
                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                    <h3>Drop files here or click to upload.</h3>
                                </div>
                            </div> <!-- end col-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="product-meta-keywords">Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" class="form-control"name="color" id="product-meta-keywords" placeholder="Blue, Red">
                                    <div class="invalid-tooltip">
                                        Choose a unique Color.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="">Size <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="size" id="" placeholder="L, M, XL" required>                                   
                                    <div class="invalid-tooltip">
                                        Choose a unique Category.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-2"><i class="fe-send"></i> Save</button>
                    </div>
                </form>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- col-xl -->
</div><!-- end row -->

</div><!-- end content-page -->
@endsection
