<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Categorycontroller extends Controller
{
    //


    /**
     * store category 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response 
     * 
     */
    public function storeCategory(Request $request){
          
      $category = $request->validate([
            'categoryname'=> 'required|string',
        ]);
        
         $categoryModel = new Category();
         $categoryModel->category_name = $request['categoryname'];
         $categoryModel->save();
         
         session()->flash('success', 'Category added successfully!');

        return redirect()->back();
        
    }
}