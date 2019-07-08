<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //
    protected $timestamp=true;


    public function subcategories(){
    	return $this->hasMany('App\SubCategory');
    }

}
