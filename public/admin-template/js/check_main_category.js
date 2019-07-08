
/*
* This function will check main category is present or not (Unique name for main category)
*/

function check_category_name(){

	var cat_name=document.getElementById("main_cat_name").value;
	var token=document.getElementById("csrf").value;
	
	$.ajax({
               type:'POST',
               url:'check_record',
               data:{'_token' : token ,'name':cat_name},
               success:function(data) {
                 
               		if(data==1){

               			document.getElementById("add_main_cat_btn").disabled=true;
               			document.getElementById("main_cat_present_msg").style.display="block";

               		}else{

               			document.getElementById("add_main_cat_btn").disabled=false;
               			document.getElementById("main_cat_present_msg").style.display="none";

               		}


               }
    });

}


