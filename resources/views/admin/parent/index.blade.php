@extends('admin.pages.dash')
@section('content')
<div class="content-page">
    <!-- Start Content-->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <h4 class="h3">Main Header</h4>
                        </div>
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
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-sm-8">
            <div class="card-box">
                <table data-toggle="table"
                       data-page-size="5"
                       data-buttons-class="xs btn-secondary"
                       data-pagination="true" class="table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center" data-field="id" data-switchable="false">SL</th>
                        <th class="text-center" data-field="name">Name</th>
                        <th class="text-center" data-field="date">Created By</th>
                        <th class="text-center" data-field="amount">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($headers as $header)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $header->name }}</td>
                            <td>{{ $header->user->name }}</td>
                            <td>
                              <form action="{{ route('header.destroy',$header->id) }}"method="POST">

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
        <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="header-title">Create Header</h2>
                        <form class="needs-validation" novalidate action="{{ route('header.store') }}" method="post">
                            @csrf
                            <br>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltipUsername">Header Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="mdi mdi-zigbee"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="" placeholder="" aria-describedby="validationTooltipUsernamePrepend"
                                        required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique Header.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
    </div><!-- end row -->

    
</div><!-- end content-page -->
@endsection
