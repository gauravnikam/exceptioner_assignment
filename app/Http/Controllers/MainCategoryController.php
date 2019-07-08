<?php

namespace App\Http\Controllers;

use App\MainCategory;
use Illuminate\Http\Request;
use App\MainCategory AS MainCat;
use DB;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mainCategory=new MainCat();        
        return view('main_category')->with('records',$mainCategory->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $mainCategory=new MainCat();
            $mainCategory->name=$request->name;
            $mainCategory->description=$request->description;
        
            if($mainCategory->save()){
                return redirect('maincategories?status=1');
            }
            
            return redirect('maincategories?status=0');

        }catch(\Exception $E){

            return redirect('maincategories?status=0');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         try{

            $mainCategory=MainCat::find($request->id);
            $mainCategory->name=$request->name;
            $mainCategory->description=$request->description;

            if($mainCategory->save()){
                return redirect('maincategories?update_status=1');
            }
            
            return redirect('maincategories?update_status=0');

        }catch(\Exception $E){

            return redirect('maincategories?update_status=0');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $mainCategory = MainCat::find($request->id);
        
        
        if($mainCategory->delete()){
                return redirect('maincategories?delete_status=1');
        }

        return redirect('maincategories?delete_status=0');

    }



     /**
     * Cehck record into table
     *   
     */
    public function checkRecord(Request $request){


         if(DB::table('main_categories')->where('name','=',trim($request->name))->count()>0){

            return 1;

         }  

         return 0;

    }//End of function



    public static function categories(){

        return DB::table('main_categories')->get();

    }


}
