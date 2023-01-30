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
