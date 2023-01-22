<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     
        return view('admin.products.products');
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
           $field= $request->validate([
            
            'productname'=>'required|string',
            'price'=>'required|numeric',
            'category'=>'required',
            'size'=>'required|string',
            'description'=>'required|string',
            'images'=>'required|image|mimes:jpe  g,png,jpg'
            
           ]);


            /* if all validate then insert data to the database fetch the latest 
               added product to set the relation between the images and the added product 
            */
           if($field):
            
                $Product  = new Product();
                $Product->product_name = $field['productname'];
                $Product->price = $field['price'];
                $Product->category_name = $field['category'];
                $Product->size = $field['size'];
                $Product->description = $field['description'];
                $Product->save();
                
                $latestProduct = $Product->select('id')->latest()->first();
                
                if($request->hasFile('images')):
                    foreach($request->file('images')  as $image):
                        $name = $image->getClientoriginalName();
                        $image->storeAs('public/images',$name);
                        $ImageModel = new Image();
                        $ImageModel->image_path	= $image;
                        $ImageModel->product_id = $latestProduct;
                        
                    endforeach;
        
                endif;
             
               return redirect()->route('products');  

           endif;
         
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