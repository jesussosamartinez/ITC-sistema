

const iconEye = document.querySelector(".eye-icon");

iconEye.addEventListener("click", function (){
    const icon = this.querySelector("i");

    if(this.previousElementSibling.type == 'password'){
        this.previousElementSibling.type = 'text';
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
        
    }else{
        this.previousElementSibling.type = 'password';
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
})



function mostrarform(){
    const form = document.getElementById("login-form");
    const image = document.getElementById("back");

    if ( form.style.visibility == "hidden") {
        form.style.visibility = "visible";
        image.style.opacity = "0.5";
    } else {
        form.style.visibility = "hidden";
        image.style.opacity ="1";
    }    
    
}


