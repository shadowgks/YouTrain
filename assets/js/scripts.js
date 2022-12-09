let form1             = document.getElementById("signin");
let form2             = document.getElementById("signup");
let btnsignup         = document.getElementById("btnup") ;
let btnsignin         = document.getElementById("btnin");


//function show sign_up

function show_Sign_up(e){
    e.preventDefault();
    form2.style.display       ="block";  
    form1.style.display       ="none";  
    btnsignin.style.display   ="block";
    btnsignup.style.display  ="none";
}
            
//function show sign_in
            
function show_Sign_in(e){
    e.preventDefault();
    form2.style.display       ="none";  
    form1.style.display       ="block";  
    btnsignin.style.display   ="none";
    btnsignup.style.display  ="block";
}
