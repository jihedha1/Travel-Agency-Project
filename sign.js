function loadfonction() {
    alert("La page a été chargée avec succès.");
  }
  
  window.addEventListener("load", loadfonction);



function isValidPassword(password) {
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password); 
    const hasNumber = /[0-9]/.test(password);    

    return hasUpperCase && hasLowerCase && hasNumber; 
}


const passwordInput = document.getElementById("password");
passwordInput.addEventListener("blur",f1) 
function f1 () {
    const isValid = isValidPassword(passwordInput.value); 
    if (!isValid) {
        alert("Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, et un chiffre.");
    }
};


const submitButton = document.getElementById("submit");
submitButton.addEventListener("click", f2)
function f2 () {
    if (isValidPassword(passwordInput.value)){
        const confirmation = confirm("Souhaitez-vous confirmer la commande?");
            
        if (confirmation) {
            alert("Commande confirmée.");
        } else {
            
            alert("Commande annulée.");
        }
    }
    else
    alert("password n'est pas valide ");

};




  function verifierLettre(ch){
    const ExpReg=/^[a-zA-Z]+$/;
    return ExpReg.test(ch) ;
}

const nom=document.getElementById("fullname");
nom.addEventListener("blur", f3 )


function f3(){
    
    if  (verifierLettre( nom.value)==true) {
        nom.value =  nom.value.toUpperCase();
      
      
    } else {
        
        alert("Le nom doit contenir des lettre uniquement");
        nom.value="";
      
    }
    
  };





