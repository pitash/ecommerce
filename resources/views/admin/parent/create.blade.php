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
                                <h4 class="h3">Create Header</h4>
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
                            <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                            <a href="{{ route('header.index') }}" class="btn btn-danger waves-effect waves-light"><i class="ti-angle-double-left"></i> All Header</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="card-box">
                            

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end card-box -->
                            </div> <!-- end col -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <form>
                    <div class="form-group mb-3">
                            <label for="validationCustomUsername">Header Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="mdi mdi-settings"></i></span>
                                </div>
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"
                                    required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                    </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- end content-page -->
@endsection
