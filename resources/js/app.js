import './bootstrap';
import '../css/app.css'; 



// add project form popup form
const parentPopup = document.querySelector('#parent_popup');
const addProducttForm = document.querySelector('#addproduct_btn');
const addProductBtn = document.querySelector('#addProductBtn');
const closeProductForm = document.querySelector('#closeProductForm');

addProductBtn.onclick = function(){
    
     parentPopup.style.display = 'flex'
     addProducttForm.style.display = 'flex' 
}

closeProductForm.onclick = function(){
    
    parentPopup.style.display = 'none'
    addProducttForm.style.display ='none'
}