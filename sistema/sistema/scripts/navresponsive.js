
function openNav(){
    const boton = document.querySelector("#bars");
    const nav = document.querySelector(".containes__menu");
    boton.addEventListener("click", function(evento){
        nav.style.display = "block";
    });
}