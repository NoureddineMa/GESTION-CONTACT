let Fname = document.getElementById("Fname");
let Erreur_Fname = document.getElementById("erreur-Fname");

let Email = document.getElementById("email");
let Erreur_email = document.getElementById("erreur-email")

let Phone = document.getElementById("phone");
let Erreur_phone = document.getElementById("erreur-Phone");

let Adresse = document.getElementById("adresse");
let Erreur_adresse = document.getElementById("erreur-adresse");


let Submit = document.getElementById("insert");

// name : 
Submit.addEventListener("click",(e) =>{
    if(Fname.value == ""){
        e.preventDefault();
        Fname.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_Fname.innerText = "Name is required";
        Erreur_Fname.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Fname.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_Fname.innerText = "";
    }
})
// --------------------

// function Name  (Regex): 

function ValidationName(){
    if(!(/^[a-zA-Z ]{3,10}$/).test(Fname.value)){
        Fname.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_Fname.setAttribute("style" , "color:red;");
        Erreur_Fname.innerText = "veuillez entrer un nom valid";
        }
    else{ 
        Erreur_Fname.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreur_Fname.innerText = ""

    }
}



// email : 
Submit.addEventListener("click",(e) =>{
    if(Email.value == ""){
        e.preventDefault();
        Email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_email.innerText = "Email is required";
        Erreur_email.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Email.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_email.innerText = "";
    }
})


// function email  : 

function ValidateEmail(){
    if(!(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(Email.value)){
        Email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_email.setAttribute("style" , "color:red;");
        Erreur_email.innerText = "veuillez entrer un email valid";
        }
    else{ 
        Email.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreur_email.innerText = "";

    }
}




// Phone : 
Submit.addEventListener("click",(e) =>{
    if(Phone.value == ""){
        e.preventDefault();
        Phone.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_phone.innerText = "Phone Number is required";
        Erreur_phone.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Phone.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_phone.innerText = "";
    }
})

// function Phone : 

function ValidatePhone(){
    if(!(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/).test(phone.value)){
        Phone.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreur_phone.setAttribute("style" , "color:red;");
        Erreur_phone.innerText = "veuillez entrer un Numero valid !";
        }
    else{ 
        Phone.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreur_phone.innerText = "";
    }
}

// Adresse : 
Submit.addEventListener("click",(e) =>{
    if(Adresse.value == ""){
        e.preventDefault();
        Adresse.setAttribute("style" , "color:red; border: 1px red solid ;");
        Erreur_adresse.innerText = "Adresse Cant be blank";
        Erreur_adresse.setAttribute("style" , "color:red;font-size: 9px;");
    }
    else{
        Adresse.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreur_adresse.innerText = "";
    }
})




