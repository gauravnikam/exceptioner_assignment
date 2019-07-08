<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
     protected $timestamp=true;

    public function maincategories(){
    	return $this->belongsTo('App\MainCategory','main_category_id');
    }

    
}
