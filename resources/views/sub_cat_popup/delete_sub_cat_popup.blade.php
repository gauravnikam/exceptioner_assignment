<!-- Modal -->
<div class="modal fade" id="deleteSubCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form  action="deletesubcategories" method="post" id="delete_main_cat_form">

        @csrf

        <div class="modal-body">
            
           Do you really want to delete this record ??

           <input type="hidden" id="csrf" value="{{ csrf_token() }}" name="_token">

           <input type="hidden" name="id" id="delete_sub_cat_record_id">



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary" id="add_main_cat_btn">Delete</button>
        </div>

      </form>  

    </div>
  </div>
</div>