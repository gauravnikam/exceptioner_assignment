
/*
* This function will check main category is present or not (Unique name for main category)
*/

function check_subcategory_name(){

	var cat_name=document.getElementById("sub_cat_name").value;
	var token=document.getElementById("csrf").value;
	var main_cat=document.getElementById('main_cat_lst').value;
	$.ajax({
               type:'POST',
               url:'check_sub_cat_record',
               data:{'_token' : token ,'name':cat_name,'main_cat':main_cat},
               success:function(data) {
                 
                        
               		if(data==1){

               			document.getElementById("sub_cat_add_btn").disabled=true;
               			document.getElementById("sub_cat_present_msg").style.display="block";

               		}else{

               			document.getElementById("sub_cat_add_btn").disabled=false;
               			document.getElementById("sub_cat_present_msg").style.display="none";

               		}


               }
    });

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
                              document.getElementById("sub_cat_present_msg").style.display="block";

                         }else{

                              document.getElementById("update_sub_cat_btn").disabled=false;
                              document.getElementById("sub_cat_present_msg").style.display="none";

                         }


               }
    });

}



