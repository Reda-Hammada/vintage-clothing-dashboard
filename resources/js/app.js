import "./bootstrap";
import "../css/app.css";

// add project form popup form
const parentPopup = document.querySelector("#parent_popup");
const addForm = document.querySelector("#form");
const addBtn = document.querySelector("#addBtn");
const closeForm = document.querySelector("#closeForm");

addBtn.onclick = function () {
    parentPopup.style.display = "flex";
    addForm.style.display = "flex";
};

closeForm.onclick = function () {
    parentPopup.style.display = "none";
    addForm.style.display = "none";
};

closeForm.addEventListener("click", () => {
    const success = document.querySelector("#successMessage");
    success.style.transition = "opacity 1s";
    setTimeout(function () {
        success.style.opacity = "0";
    }, 50);
});

// toggle setting category
const settingCategory = document.querySelectorAll(".settingCategory");
settingCategory.forEach((settingCategory) => {
    const editDeleteContainer = settingCategory.nextElementSibling;
    settingCategory.addEventListener("click", function () {
        if (editDeleteContainer.style.display == "block") {
            editDeleteContainer.style.display = "none";
        } else {
            editDeleteContainer.style.display = "block";
        }
    });
});

//update form
const updatePopUpUltimateContainer = document.querySelector(
    "#editUltimate_container"
);
const updatePopUpContainer = document.querySelector("#edit_container");
// open form
const editButton = document.querySelectorAll("#editButton");
editButton.forEach((editButton) => {
    editButton.addEventListener("click", function () {
        updatePopUpContainer.style.display = "block";
        updatePopUpUltimateContainer.style.display = "block";
    });
});

//close form
const closeFormEdit = document.querySelector("#closeFormEdit");
closeFormEdit.addEventListener("click", function () {
    updatePopUpUltimateContainer.style.display = "none";
    updatePopUpContainer.style.display = "none";
});
