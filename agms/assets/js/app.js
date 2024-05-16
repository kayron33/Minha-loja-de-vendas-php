
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const menuCeluar = document.querySelector("[data-overlay]");


const king = [navCloseBtn, menuCeluar, navOpenBtn];


for(let i = 0; i < king.length; i++){
    king[i].addEventListener("click", function(){
        navbar.classList.toggle("active");
        menuCeluar.classList.toogle("active");
    });
}



var kayrton = document.querySelector("#text");

var intervalo =70;

function EscreverTexto(kayrton, text, intervalo){
    var char = text.split("").reverse();

    var tipo = setInterval(function() {
        if(!char.length){
            return clearInterval(tipo)
        }

        var next = char.pop();

        kayrton.innerHTML += next;
    }, intervalo);

}

EscreverTexto(kayrton, text, intervalo);



const goTOpBtn=document.querySelector("[data-go-top]");


window.addEventListener("scroll",function(){
    if(this.window.scrollY >=400){
        goTOpBtn.classList.add("active");
    }else{
        goTOpBtn.classList.remove("active");
    }
});
