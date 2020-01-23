<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap select css -->
        <link href="{{ asset('admin/assets/libs/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Tables css -->
        <link href="{{ asset('admin/assets/css/bootstrap-table.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Plugins css-->
        <link href="{{ asset('admin/assets/libs/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/libs/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/libs/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <link href="{{ asset('admin/assets/libs/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    
    </head>

    <body class="left-side-menu-dark">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            {{-- @yield('header') --}}
            @include('admin.pages.header')
            <!-- end Topbar -->  

            <!-- ========== Left Sidebar Start ========== -->
            {{-- @yield('left') --}}
            @include('admin.pages.left-side')
            <!-- Left Sidebar End -->


            {{-- @if(Session::has('success'))
            <div class="alert alert-success" role="alert" style="background:#004d40;color:#fff;text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong>{{ Session::get('success') }}!
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-success" role="alert" style="background:#f44336;color:#fff;text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong>{{ Session::get('error') }}!
            </div>
            @endif --}}

            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->

            <!-- Start Page footer here -->
            <!-- ============================================================== -->
            {{-- @yield('footer') --}}
            @include('admin.pages.footer')
            <!-- ============================================================== -->
            <!-- End footer content -->
            <!-- ============================================================== -->
        </div>
        
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        @include('admin.pages.right-side')
        <!-- END Right Sidebar -->
        
        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

        {{-- <!-- Plugins js -->
        <script src="{{ asset('admin/assets/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/raphael.min.js') }}"></script>
        <!-- Dashboard init-->
        <script src="{{ asset('admin/assets/js/dashboard-4.init.js') }}"></script> --}}
        
        <!-- Bootstrap Select js -->
        <script src="{{ asset('admin/assets/libs/bootstrap-select.min.js') }}"></script>

        <!-- Summernote js -->
        <script src="{{ asset('admin/assets/libs/summernote-bs4.min.js') }}"></script>

        <!-- Select2 js-->
        <script src="{{ asset('admin/assets/libs/select2.min.js') }}"></script>

        <!-- Dropzone file uploads-->
        <script src="{{ asset('admin/assets/libs/dropzone.min.js') }}"></script>

        <!-- Plugins js-->
        {{-- <script src="{{ asset('admin/assets/libs/jquery.bootstrap.wizard.min.js') }}"></script> --}}
        
        <!-- Bootstrap Tables js -->
        <script src="{{ asset('admin/assets/js/bootstrap-table.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('admin/assets/js/bootstrap-tables.init.js') }}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('admin/assets/libs/sweetalert2.min.js') }}"></script>

        <script src="{{ asset('admin/assets/js/sweetalert2.all.min.js') }} "></script>

        <!-- Sweet alert init js-->
        <script src="{{ asset('admin/assets/js/sweet-alerts.init.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('admin/assets/js/add-product.init.js') }}"></script>
        {{-- <script src="{{ asset('admin/assets/js/form-wizard.init.js') }}"></script> --}}

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

        <!-- Alert Time For Any Thing Insert/Update   -->
        <script type="text/javascript">
            window.setTimeout(function() {
              $(".alert").fadeTo(500, 0).slideUp(500, function(){
                  $(this).remove();
              });
          }, 4000);
        </script>

        <script>
            $(document).ready(function (){
            $('.edit_link').click(function(){
                var redirect_link = $(this).val();
                Swal.fire({
                title: 'Are you sure?',
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Edit it!'
                }).then((result) => {
                if (result.value) {
                    window.location.href =""+ redirect_link;
                }
                });
            });
            });
        </script>

    </body>
</html>