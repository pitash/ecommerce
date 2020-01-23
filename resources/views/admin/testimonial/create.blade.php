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
                                <h4 class="h3">Create Testimonial</h4>
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
                            <a href="{{ route('testimonial.index') }}" class="btn btn-danger waves-effect waves-light"><i class="ti-angle-double-left"></i> All Card</a>
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
                <div class="card-body offset-1">
                    <form class="needs-validation" novalidate action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="">Person Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="person_name" id="" placeholder="Lindsy Niloms" required>                                   
                                    <div class="invalid-tooltip">
                                        Choose a unique Name.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="">Image</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="file" class="form-control" name="image" id="" placeholder="" required> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="class row">
                        <div class="col-lg-12">
                            <div class="form-group position-relative mb-3">
                                <label for="product-description">Details <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" name="pro_detail" id="product-description" rows="5" placeholder="We are a team of designers ..."></textarea>
                                    <div class="invalid-tooltip">
                                        Choose a unique Details.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-2"><i class="fe-send"></i> Save</button>
                    </div>
                </form>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- end content-page -->
@endsection
