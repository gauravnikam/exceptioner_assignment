<!-- Modal -->
<div class="modal fade" id="subCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="post" action="subcategories">

        @csrf

        <input type="hidden" id="csrf" value="{{ csrf_token() }}" name="_token">


        <div class="modal-body">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Select Main Category</label>
              <select id="main_cat_lst" onchange="check_subcategory_name()" name="main_cat_id" required class="form-control">
                  
                 
                @foreach(App\Http\Controllers\MainCategoryController::categories() as $data)
                  <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach

              </select>          
            </div>  

            
          <hr> 


            <div class="row col-md-12">             
            
              <input type="text"  class="form-control col-md-4" id="sub_cat_name" name="sub_cat_name2"  placeholder="Enter Name" id="sub_cat_name" onkeyup="check_subcategory_name()"> &nbsp;&nbsp;


              <input type="text"  class="form-control col-md-6" id="sub_cat_desc" name="sub_cat_desc2"  placeholder="Enter Description" id="sub_cat_desc">&nbsp;&nbsp;

              <button type="button" id="sub_cat_add_btn" class="btn btn-primary col-md-1" onclick="add_sub_categories()">+</button>  

               <span style="color: red;display: none" id="sub_cat_present_msg">
                  Sub Category Is Already Present.
               </span>               
            

            </div>


            <hr> 


            <div class="row col-md-12" id="subcategory_records">
             
            
             
            </div>
          



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary" id="submit_btn" disabled="">Add</button>
        </div>

      </form>  

    </div>
  </div>
</div>