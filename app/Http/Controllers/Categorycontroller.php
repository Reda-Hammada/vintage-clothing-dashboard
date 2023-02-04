<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Category;

class Categorycontroller extends Controller
{
    //



    private function clearCache(){
          $categoryModel = new Category();
         // Invalidate cache key 
         Cache::forget('categories');
         // fetch categories  and store them in the cache again
         $categories = $categoryModel->all();
         cache::put('categories', $categories,  now()->addHours(24));
    }

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

         $this->clearCache();
         
         session()->flash('success', 'Category added successfully!');

        return redirect()->back();
        
    }

    /**
     * @param int $id
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response 
     * 
     */

     public function deleteCategory($id, Request $request){
         
                $categoryModel = new Category();
            
                $categoryModel->where('id', $id)->delete();
                
                $this->clearCache();

                session()->flash('success', 'Category deleted successfully!');

                return redirect()->back();

             
                
      
     }
}