const appendItem = function(){
    let li = document.createElement("li");
    let form = document.createElement("form");
    let input = document.createElement("input");
    form.appendChild(input);
    let inputHidden = document.createElement("input");
    form.appendChild(inputHidden);
    let inputSubmit = document.createElement("input");
    form.appendChild(inputSubmit);
    li.appendChild(form);
    let btnSuppLine = document.createElement("button");
    li.appendChild(btnSuppLine);
    let ul = document.querySelector(".pres-console");
    ul.appendChild(li);

    let lastLi = document.querySelector(".pres-console").querySelectorAll("li");
    lastLi[lastLi.length-1].childNodes[0].setAttribute("action","admin.php");
    lastLi[lastLi.length-1].childNodes[0].setAttribute("method","post");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("type","text");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("name","text-a-add");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("placeholder","presente toi");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("type","hidden");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("value","1");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("name","hero-add-table");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("type","submit");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("value","Valider");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("class","decalle-droite");
    lastLi[lastLi.length-1].childNodes[1].setAttribute("class","supp-line");
    lastLi[lastLi.length-1].childNodes[1].innerHTML = "Supprimer";
    lastLi[lastLi.length-1].childNodes[1].addEventListener("click",function(){
        ul.removeChild(ul.lastChild);
    })
}

const appendItem2 = function(){
    let li = document.createElement("li");
    let form = document.createElement("form");
    let input = document.createElement("input");
    form.appendChild(input);
    let inputPourcentage = document.createElement("input");
    form.appendChild(inputPourcentage);
    let inputHidden = document.createElement("input");
    form.appendChild(inputHidden);
    let inputSubmit = document.createElement("input");
    form.appendChild(inputSubmit);
    li.appendChild(form);
    let btnSuppLine = document.createElement("button");
    li.appendChild(btnSuppLine);
    let ul = document.querySelector(".section-admin-skills").querySelector(".pres-console");
    ul.appendChild(li);

    let lastLi = document.querySelector(".section-admin-skills").querySelector(".pres-console").querySelectorAll("li");
    lastLi[lastLi.length-1].childNodes[0].setAttribute("action","admin.php#adminSkills");
    lastLi[lastLi.length-1].childNodes[0].setAttribute("method","post");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("type","text");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("name","text-a-add");
    lastLi[lastLi.length-1].childNodes[0][0].setAttribute("placeholder","competence");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("type","text");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("name","pourcentage-a-add");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("placeholder","pourcentage");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("value","0");
    lastLi[lastLi.length-1].childNodes[0][1].setAttribute("class","decalle-droite");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("type","hidden");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("value","1");
    lastLi[lastLi.length-1].childNodes[0][2].setAttribute("name","skills-add-table");
    lastLi[lastLi.length-1].childNodes[0][3].setAttribute("type","submit");
    lastLi[lastLi.length-1].childNodes[0][3].setAttribute("value","Valider");
    lastLi[lastLi.length-1].childNodes[0][3].setAttribute("class","decalle-droite");
    lastLi[lastLi.length-1].childNodes[1].setAttribute("class","supp-line");
    lastLi[lastLi.length-1].childNodes[1].innerHTML = "Supprimer";
    lastLi[lastLi.length-1].childNodes[1].addEventListener("click",function(){
        ul.removeChild(ul.lastChild);
    })
}


const addLineHero = document.querySelector(".add-line-hero");
const addLineSkills = document.querySelector(".add-line-skills");
addLineHero.addEventListener("click",appendItem);
addLineSkills.addEventListener("click",appendItem2);