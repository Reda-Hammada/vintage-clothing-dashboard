<?php

if(!function_exists('getCategory')):
   function passCategory(String $categoyrName,Int $categoryId)
    {
        $ClassCategory  =  new App\Helpers\CategoryHelper();
        $ClassCategory->setCategoryName($categoyrName);
        $ClassCategory->setCategoryId($categoryId);
    }
endif;


if(!function_exists('categoryName')): 
     
    function CategoryName(){
        $ClassCategory  =  new App\Helpers\CategoryHelper();
        return $ClassCategory->getCategoryName();
    }
      
endif;


if(!function_exists('categoryId')):

    function categoryId(){
        
        $ClassCategory  =  new App\Helpers\CategoryHelper();
        return $ClassCategory->getCategoryId();    
    
    }

endif;