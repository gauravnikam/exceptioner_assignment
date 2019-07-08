<!-- Modal -->
<div class="modal fade" id="updateMainCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Main Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="updatemaincategories" method="post">

        @csrf;

        <div class="modal-body">
            
            <input type="hidden" id="csrf" value="{{ csrf_token() }}" name="_token">
            <input type="hidden" id="update_main_cat_id" name="id">


            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" required class="form-control" id="update_main_cat_name" name="name"  placeholder="Enter Name" onkeyup="check_update_category_name()">  
              
              <span style="color: red;display: none" id="update_main_cat_present_msg">
                  Category Is Already Present.
               </span>           
            </div>


           <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea class="form-control" id="update_main_cat_description" name="description"  placeholder="Enter Description"></textarea>             
            </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary" id="update_main_cat_btn">Add</button>
        </div>

      </form>  

    </div>
  </div>
</div>