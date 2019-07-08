@extends('layouts.app')


	
@push('css')

 <link href="{{asset('/admin-template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
 <link href="{{asset('/admin-template/css/category-page.css')}}" rel="stylesheet">

@endpush





@section('content')
	

 <!-- Begin Page Content -->
        <div class="container-fluid">

        
        <div class="col-md-12 add_buttons_div" align="center">
        	
        		<BUTTON class="btn btn-primary btn-lg add_button" data-toggle="modal" data-target="#mainCatModal">Add Main Category</BUTTON>
				

        </div>	

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>	
                      <th>Name</th>
                      <th>Description</th>
                      <th>SubCategoris</th>
                      <th>Created At</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>                      
                      <th>#</th>	
                      <th>Name</th>
                      <th>Description</th>
                      <th>SubCategoris</th>
                      <th>Created At</th>
                      <th>Manage</th>
                    </tr>
                  </tfoot>
                  <tbody>                
                    
                   @php
                    $i=1;
                   @endphp 

                   @foreach($records as $data)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->subcategories->count()}}</td>
                      <td>{{$data->created_at}}</td>
                      <td>

                                                


                          &nbsp;

                          
                          <button class="btn btn-warning btn-sm" onclick="update_main_cat(<?php echo $data->id; ?>,'<?php echo $data->name; ?>','<?php echo $data->description; ?>')"><i class="fa fa-edit"></i> </button>  

                          &nbsp;

                          <button class="btn btn-danger btn-sm" onclick="delete_main_cat(<?php echo $data->id; ?>)"><i class="fa fa-trash"></i> </button>


                      </td>
                    </tr>
                   @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


        @include('main_cat_popup.add_main_cat_popup')
        
        @include('main_cat_popup.update_main_cat_popup')

        @include('main_cat_popup.delete_main_cat_popup')

		   

@endsection


@push('js')

			  <!-- Page level plugins -->
			  <script src="{{asset('/admin-template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
			  <script src="{{asset('/admin-template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

			  <!-- Page level custom scripts -->
			  <script src="{{asset('/admin-template/js/demo/datatables-demo.js')}}"></script>
			  

        <script src="{{asset('/admin-template/js/check_main_category.js')}}"></script>
        <script src="{{asset('/admin-template/js/modify_main_cat.js')}}"></script>

@endpush