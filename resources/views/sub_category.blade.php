@extends('layouts.app')


	
@push('css')

 <link href="{{asset('/admin-template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
 <link href="{{asset('/admin-template/css/category-page.css')}}" rel="stylesheet">

@endpush





@section('content')
	

 <!-- Begin Page Content -->
        <div class="container-fluid">

        
        <div class="col-md-12 add_buttons_div" align="center">
        	
        	
				

				<BUTTON class="btn btn-primary btn-lg add_button" data-toggle="modal" data-target="#subCatModal">Add Sub Category</BUTTON>


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
                      <th>Main Category</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>                      
                      <th>#</th>	
                      <th>Name</th>
                      <th>Main Category</th>
                      <th>Description</th>
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
                      <td>{{$data->maincategories->name}}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->created_at}}</td>
                      <td>
                        


                         &nbsp;

                          
                          <button class="btn btn-warning btn-sm" onclick="update_sub_cat(<?php echo $data->id; ?>,<?php echo $data->main_category_id; ?>,'<?php echo $data->name; ?>','<?php echo $data->description; ?>')"><i class="fa fa-edit"></i> </button>  



                          &nbsp;

                           <button class="btn btn-danger btn-sm" onclick="delete_sub_cat(<?php echo $data->id; ?>)"><i class="fa fa-trash"></i> </button>



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


       
		    @include('sub_cat_popup.add_sub_cat_popup')
        
        @include('sub_cat_popup.delete_sub_cat_popup')

        @include('sub_cat_popup.update_sub_cat_popup')



@endsection


@push('js')

			  <!-- Page level plugins -->
			  <script src="{{asset('/admin-template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
			  <script src="{{asset('/admin-template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

			  <!-- Page level custom scripts -->
			  <script src="{{asset('/admin-template/js/demo/datatables-demo.js')}}"></script>
			  

        <script src="{{asset('/admin-template/js/add_sub_categories.js')}}"></script>
        <script src="{{asset('/admin-template/js/check_sub_category.js')}}"></script>
       
        <script src="{{asset('/admin-template/js/modify_sub_cat.js')}}"></script>
       
@endpush