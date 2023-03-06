<?php

namespace App\Helpers;


class CategoryHelper {
    
    public  $categoryName ;
    public  $categoryId ;
     
    public function setCategoryName(String $value){
        $this->categoryName = $value;
    }
    public function setCategoryId(Int $value){
        $this->categoryId = $value;
        
    }
    public function getCategoryName(){
            return $this->categoryName;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }


  }