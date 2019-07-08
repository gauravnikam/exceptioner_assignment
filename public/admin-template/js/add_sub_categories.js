

var index=0;
var temp=0;




/*
*  This function will add new sub category
*
*/
function add_sub_categories(){

 	//Check value of name field. if it's empty then show alert and return back
 	var name=document.getElementById("sub_cat_name").value;
 	
 	if(name==""){

 		alert("Please Enter Name Of Subcategory");
 		document.getElementById("sub_cat_name").focus();
 		return;

 	}//End of if case


 	var description=document.getElementById("sub_cat_desc").value;

 	

 	//Create new element node
 	var element=document.getElementById("subcategory_records");
 	var div_id="cat_"+index;
 	var title_input='<input type="text" required class="form-control col-md-4" id="sub_cat_name" name="data['+index+'][name]" value="'+name+'"  placeholder="Enter Name" id="sub_cat_name"> &nbsp;&nbsp;';
	var desc_input='<input type="text" required class="form-control col-md-6" id="sub_cat_desc" name="data['+index+'][description]" value="'+description+'"   placeholder="Enter Description" id="sub_cat_desc">&nbsp;&nbsp;&nbsp;';
	var remove_btn='<button type="button" class="btn btn-primary col-md-1" onclick="remove_sub_categories('+index+')">X</button> ';
 
 	var new_element='<div class="row col-md-12 new_sub_cat_div" id="'+div_id+'">'+ title_input + desc_input + remove_btn+'</div>';
 

 	//Append element to the field 
 	element.innerHTML=element.innerHTML+new_element;

 	index++;
 	temp++;


 	//Set the value of name and description field to empty
 	document.getElementById("sub_cat_name").value="";
 	document.getElementById("sub_cat_desc").value="";

 	//Set cursor focus on name input field
    document.getElementById("sub_cat_name").focus();

    manageAddButton();

}//End of add function







/*
*  This function will remove subcategory from popup
*
*/
function remove_sub_categories(id){

	document.getElementById("cat_"+id).remove();
	temp--;
	manageAddButton();

}//End of remove function






/*
*  This function will enabled and disabled submit button
*
*/
function manageAddButton(){


	if(temp>0){

		document.getElementById("submit_btn").disabled=false;

	}else{

		document.getElementById("submit_btn").disabled=true;

	}


}
