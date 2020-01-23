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
                                <h4 class="h3">Top Card</h4>
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
                            <a href="{{ route('top_card.create') }}" class="btn btn-danger waves-effect waves-light"><i class="dripicons-export"></i> Add New Card</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <table data-toggle="table"
                    data-page-size="5"
                    data-buttons-class="xs btn-secondary"
                    data-pagination="true" class="table-bordered">
                <thead class="thead-light">
                <tr>
                    <th class="text-center" data-field="id" data-switchable="false">SL</th>
                    <th class="text-center" >Title</th>
                    <th class="text-center" >Product Name</th>
                    <th class="text-center" >Hover Text</th>
                    <th class="text-center" >Image</th>
                    <th class="text-center" >Created By</th>
                    <th class="text-center" >Action</th>
                </tr>
                </thead>
                    <tbody>
                        @foreach ($tops as $top)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $top->title }}</td>
                            <td>{{ $top->pro_name }}</td>
                            <td>{{ $top->hover_text }}</td>
                            {{-- <td> ll<img class="img-profile rounded-circle" width="40" src="{{ asset('public/storage/'. $top->img ) }}" alt="Photo Not Found"> </td> --}}
                            <td><img class="img-profile" width="95px" src="{{ asset('/storage') }}/{{ $top->img }}" alt="Photo Not Found"></td>
                            <td>{{ $top->user->name }}</td>
                            <td>
                                    
                                <form action="{{ route('top_card.destroy',$top->id) }}"method="POST">
  
                                {{-- <button type="button" data-toggle="tooltip" data-placement="top" title='Edit' class=" btn btn-sm btn-info edit_link" value="{{ route('top_card.edit',$top->id) }}" ><i class="fe-edit"> </i></button> --}}
                                  <button type="button" value="{{ route('top_card.edit',$top->id) }}" id="sa-params" onclick="return confirm('Are you sure to Edit this Card ?');" class="btn btn-blue waves-effect waves-light edit_link" title="Edit"><i class="fe-edit"></i></button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light" title="Delete" onclick="return confirm('Are you sure to delete this Card ?');"><i class="far fa-trash-alt"></i></button>
                                
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

@endsection
