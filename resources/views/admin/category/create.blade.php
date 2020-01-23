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
                                <h4 class="h3">Create Category</h4>
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
                            <a href="{{ route('category.index') }}" class="btn btn-danger waves-effect waves-light"><i class="ti-angle-double-left"></i> All Category</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ route('category.store') }}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label class="col-md-4 control-label">Select Parent</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-chevrons-down"></i></span>
                                        </div>
                                        <select name="parent" class="selectpicker form-control" data-style="btn-outline-primary">
                                            <option>--Select One--</option>
                                            @if(!empty($headers))
                                            @foreach($headers as $header)
                                            <option value="{{ $header->id }}">{{ $header->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-group position-relative mb-3">
                                <label for="">Category Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="category" id="" placeholder="" required>                                   
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
    </div> <!-- end row -->
</div><!-- end content-page -->
@endsection
