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
                                <h4 class="h3">Testimonials</h4>
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
                            <a href="{{ route('testimonial.create') }}" class="btn btn-danger waves-effect waves-light"><i class="dripicons-export"></i> Add New Testimonial</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
        </div><!-- end row -->

    <div class="row">
        <div class="col-sm-12">
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
            <div class="card-box">
                <table data-toggle="table"
                    data-page-size="5"
                    data-buttons-class="xs btn-secondary"
                    data-pagination="true" class="table-bordered">
                <thead class="thead-light">
                <tr>
                    <th class="text-center" data-field="id" data-switchable="false">SL</th>
                    <th class="text-center" >Name</th>
                    <th class="text-center" >Details</th>
                    <th class="text-center" >Image</th>
                    <th class="text-center" >Created By</th>
                    <th class="text-center" >Action</th>
                </tr>
                </thead>
                    <tbody>
                        @foreach ($tests as $test)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $test->person_name }}</td>
                            <td style="width:140px;">{!! $test->pro_detail !!}</td>
                            <td><img class="img-profile" width="75px" src="{{ asset('/storage') }}/{{ $test->img }}" alt="Photo Not Found"></td>
                            <td>{{ $test->user->name }}</td>
                            <td>
                                <form action="{{ route('testimonial.destroy',$test->id) }}"method="POST">
    
                                    <button type="button" class="btn btn-blue waves-effect waves-light" title="Edit"><i class="fe-edit"></i></button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" title="Delete" onclick="return confirm('Are you sure to delete this Header ?');"><i class="far fa-trash-alt"></i></button>
                                
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div><!-- end row -->
</div><!-- end content-page -->
@endsection
