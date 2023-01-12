import './bootstrap';
import '../css/app.css'; 



// add project form popup form
const addProducttForm = document.querySelector('#addproduct_btn');
const addProductBtn = document.querySelector('#addProductBtn');
const closeProductForm = document.querySelector('#closeProductForm');

addProductBtn.onclick = function(){
    
     addProducttForm.style.display = 'flex' 
}

closeProductForm.onclick = function(){
      
    addProducttForm.style.display ='none'
}