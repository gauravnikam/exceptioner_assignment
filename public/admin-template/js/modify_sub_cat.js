

function delete_sub_cat(id){


	document.getElementById('delete_sub_cat_record_id').value=id;
	
	$('#deleteSubCatModal').modal('show');

}


var update_name="";

function update_sub_cat(id,main_cat,name,description){

	update_name=name;
	document.getElementById('update_main_cat_id').value=main_cat;
     document.getElementById('update_sub_cat_id').value=id;
     document.getElementById('update_sub_cat_name').value=name;
	document.getElementById('update_sub_cat_description').value=description;

	$('#updateSubCatModal').modal('show');

}


function check_update_subcategory_name(){

     var cat_name=document.getElementById("update_sub_cat_name").value;
     var token=document.getElementById("csrf").value;
     var main_cat=document.getElementById('update_main_cat_id').value;
     $.ajax({
               type:'POST',
               url:'check_sub_cat_record',
               data:{'_token' : token ,'name':cat_name,'main_cat':main_cat},
               success:function(data) {
                 
                        
                         if(data==1){

                              document.getElementById("update_sub_cat_btn").disabled=true;
                              document.getElementById("update_sub_cat_present_msg").style.display="block";

                         }else{

                              document.getElementById("update_sub_cat_btn").disabled=false;
                              document.getElementById("update_sub_cat_present_msg").style.display="none";

                         }


               }
    });

}
