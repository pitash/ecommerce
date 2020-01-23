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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ route('general.store') }}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Company Name' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $generals->com_name }}" name="com_name" id="" placeholder="Company Name" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Name.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Header Title' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $generals->header_title }}" name="header_title" id="" placeholder="Header Title" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Header Title.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Company Address' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $generals->com_addres }}" name="com_addres" id="" placeholder="Company Address" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Address.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Company Phone' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $generals->com_phone }}" name="com_phone" id="" placeholder="Company Phone" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Phone.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Copyright' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->copyright }}" type="text" class="form-control" name="copyright" id="" placeholder="Company Copyright" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Copyright.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Company Logo' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input  type="file" class="form-control" name="com_logo" id="" placeholder="" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Logo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Company Details' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->com_details }}" type="text" class="form-control" name="com_details" id="" placeholder="Company Details" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Details.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Linkedin' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input type="text" value="{{ $generals->linkedin }}" class="form-control" name="linkedin" id="" placeholder="Company Linkedin" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Linkedin.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Facebook ' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->facebook }}" type="text" class="form-control" name="facebook" id="" placeholder="Company Facebook" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Facebook.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Twitter' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->twitter }}" type="text" class="form-control" name="twitter" id="" placeholder="Company Twitter" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Twitter.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Instragram ' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->instragram }}" type="text" class="form-control" name="instragram" id="" placeholder="Company Instragram" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Instragram.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group position-relative mb-3">
                                <label for="">{{ 'Youtube' }}</label>
                                <div class="col-md-10 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id=""><i class="fe-grid"></i></span>
                                        </div>
                                        <input value="{{ $generals->youtube }}" type="text" class="form-control" name="youtube" id="" placeholder="Youtube" required>                                   
                                        <div class="invalid-tooltip">
                                            Choose a unique Company Youtube.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-2"><i class="fe-send"></i> Update</button>
                    </div>
                </form>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- end content-page -->
@endsection
