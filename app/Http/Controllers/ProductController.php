<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

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
          //validate product data from the form 
           $request->validate([
            
            'productname'=>'required|string',
            'price'=>'required|numeric',
            'category'=>'required',
            'size'=>'required|string',
            'description'=>'required|string',
            'images.*'=>'image|array|',
            'images'=>'required'
            
           ]);
            /* if all validate then insert data to the database fetch the latest 
               added product to set the relation between the images and the added product 
            */
             
                $Product  = new Product();
                $Product->product_name = $request->productname;
                $Product->price = $request->price;
                $Product->category_name = $request->category;
                $Product->size = $request->size;
                $Product->description = $request->description;
                $Product->save();
                 
                $latestProductId = $Product->select('id')->latest()->first();
                if($request->hasFile('images')):
                    foreach($request->file('images')  as $imageFile):
                        

                        $path = $imageFile->store('images');
                        dd($path);
                        $ImageModel = new Image();
                        $ImageModel->image_path	= $path;
                        $ImageModel->product_id = $latestProductId;
                        $ImageModel->save();
                        
                    endforeach;
                    
                endif;

          

                return redirect()->route('products')->xc  ;  

             

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}