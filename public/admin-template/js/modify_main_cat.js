

function delete_main_cat(id){


	document.getElementById('delete_main_cat_record_id').value=id;
	
	$('#deleteMainCatModal').modal('show');

}


var update_name="";

function update_main_cat(id,name,description){

	update_name=name;
	document.getElementById('update_main_cat_id').value=id;
	document.getElementById('update_main_cat_name').value=name;
	document.getElementById('update_main_cat_description').value=description;

	$('#updateMainCatModal').modal('show');

}



function check_update_category_name(){

     var cat_name=document.getElementById("update_main_cat_name").value;

     if(cat_name==update_name){
     	return;
     }

     var token=document.getElementById("csrf").value;
     
     $.ajax({
               type:'POST',
               url:'check_record',
               data:{'_token' : token ,'name':cat_name},
               success:function(data) {
                 
                         if(data==1){

                              document.getElementById("update_main_cat_btn").disabled=true;
                              document.getElementById("update_main_cat_present_msg").style.display="block";

                         }else{

                              document.getElementById("update_main_cat_btn").disabled=false;
                              document.getElementById("update_main_cat_present_msg").style.display="none";

                         }


               }
    });

}