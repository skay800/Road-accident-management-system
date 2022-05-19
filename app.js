const inputs = document.querySelectorAll(".input");

function focusFunc(){
let prent= this.parentNode;
parent.classList.add("focus");
}

function blurFunc(){
    let prent= this.parentNode;
    if(this.value=="")
    {
        parent.classList.remove("focus");
    }
  
    }

inputs.forEach(input=>{
    input.addEventListener("focus",focusFunc);
    input.addEventListener("focus",focusFunc);
});