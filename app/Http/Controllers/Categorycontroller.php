<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Category;
use App\Models\Product;

class Categorycontroller extends Controller
{
    //

    protected $categoryModel;

    public function __construct(Category $categoryModel){
 
      $this->categoryModel = $categoryModel;
      $this->middleware('auth');

    }

    private function clearCache():void
    {
      
         // Invalidate cache key 
         Cache::forget('categories');
         // fetch categories  and store them in the cache again
         $categories =  $this->categoryModel->all();
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
        
        
        $this->categoryModel->category_name = $request['categoryname'];
        $this->categoryModel->save();

         $this->clearCache();
         
         session()->flash('success', 'Category added successfully!');

        return redirect()->back();
        
    }

    /**
     * delete category
     * 
     * @param int $id
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response 
     * 
     */ 

     public function deleteCategory(int $id, Request $request)
     {
         
            
        $this->categoryModel->where('id', $id)->delete();
                
        $this->clearCache();

        session()->flash('success', 'Category deleted successfully!');

        return redirect()->back();         
      
     }


     /**
      * update a category
      *
      * @param int $id
      * @param Illuminate\Http\Request $request
      * @return Illuminate\Http\Response
      *
      */

      public function updateCategory(int $id, Request $request)
      {
        
        if(isset($id)):
            $this->categoryModel->where('id', $id)->first();

            return view('categories.categories',compact('categoryEdit'));
            
        endif;

        
        if($request):
            $request->validate([
              'category_name'=>'string|required',
            
            ]);

        endif;
      }

      /**
       * @param string $categoryName 
       * @return Illuminate\Http\Respone
       *
       */
      
       // fetch products by category 
       public function fetchProductsByCategoryName(String $categoryName){
          
          $productModel = new Product();
          $products = $productModedl->where('category_name',$categoryName)
                      ->get();

          return view('admin.categories.productByCategory',['products'=> $products]);
          
       }
   
}