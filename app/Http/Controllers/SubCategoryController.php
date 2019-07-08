<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\SubCategory AS SubCat;
use DB;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subCategory=new SubCat();        
        return view('sub_category')->with('records',$subCategory->get());
 
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
        //
        $mainCatId=$request->main_cat_id;
        $subCategory=array();
        $time=new \DateTime();

        //for ($i=0; $i < count($request->data); $i++) { 
            
         foreach($request->data as $data){  

               $subCategory[] = [

                'main_category_id'=>$mainCatId,
                'name' => $data['name'],
                'description' =>$data['description'],
                'created_at' => $time,
                'updated_at' => $time,


            ];

           


        }

       // dd($subCategory);
        
         if(SubCat::insert($subCategory)){
                return redirect('subcategories?status=1');
         }
            
            return redirect('subcategories?status=0');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
         try{

            $subCategory=SubCat::find($request->id);
            $subCategory->name=$request->name;
            $subCategory->description=$request->description;

            if($subCategory->save()){
                return redirect('subcategories?update_status=1');
            }
            
            return redirect('subcategories?update_status=0');

        }catch(\Exception $E){

            return redirect('subcategories?update_status=0');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $subCategory = SubCat::find($request->id);
        
        
        if($subCategory->delete()){
                return redirect('subcategories?delete_status=1');
        }

        return redirect('subcategories?delete_status=0');
    }



     /**
     * Cehck record into table
     *   
     */
    public function checkRecord(Request $request){


         if(DB::table('sub_categories')->where('name','=',trim($request->name))->where('main_category_id','=',$request->main_cat)->count()>0){

            return 1;

         }  

         return 0;

    }//End of function







    
}
