const adminBtn = document.querySelector("#admin");
const passwordInput = document.querySelector(".secret-section");
const invisiDiv = document.querySelector(".invi-div");

adminBtn.addEventListener("click",function(){
    passwordInput.classList.remove("invisible");
})

invisiDiv.addEventListener("click",function(){
    passwordInput.classList.add("invisible");
})