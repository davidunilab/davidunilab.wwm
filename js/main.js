document.querySelector(".fa-bars").addEventListener("click", function(){
   let x = document.querySelector("nav ul")

    if (window.getComputedStyle(x).display == "none" ){
        x.style.display = "block"
    }else{
        x.style.display = "none"
    }
})