let naam = document.getElementById('naam');
let naamWarn = document.getElementById('naam-warn');

let telefoon = document.getElementById('telefoon');
let telefoonWarn = document.getElementById('telefoon-warn');

let email = document.getElementById('email');
let emailWarn = document.getElementById('email-warn');

let verzend = document.getElementById('verzend');

let check = {naam:false, telefoon:false, email:false}

// Naam veld controle
function checkNaam(e) {
    let target = e.target;
    if (target.value.length <3 ) {
        check.naam = false;
        naam.classList.remove('uk-form-success');
        naam.classList.add('uk-form-danger');
        naamWarn.classList.remove('uk-hidden');
        UIkit.notification({message: '<div class="uk-alert-danger"><i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp;Naam moet minimaal 3 tekens bevatten</div>'})

    } else {
        naam.classList.remove('uk-form-danger');
        naam.classList.add('uk-form-success')
        naamWarn.classList.add('uk-hidden');
        check.naam = true;

    }
    validateVerzend();
}

// telefoon veld controle
function checkTelefoon(e) {
    let target = e.target;
    let regex = /^\d+-*\d+$/;
    let cijfers = regex.test(target.value);
    if (cijfers == false || target.value.length <10 ||  target.value.length >17) {
        check.telefoon = false;
        telefoon.classList.remove('uk-form-success');
        telefoon.classList.add('uk-form-danger');
        telefoonWarn.classList.remove('uk-hidden');
        validateVerzend();
        UIkit.notification({message: '<div class="uk-alert-danger"><i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp;Het telefoonnummer moet uit cijfers bestaan</div>'})
    } else    
    {
        check.telefoon = true;
        telefoon.classList.remove('uk-form-danger');
        telefoon.classList.add('uk-form-success')
        telefoonWarn.classList.add('uk-hidden');
    }
    validateVerzend();
}

// e-mailveld controle.
function validateEmail(e) 
    {
        //console.log(e.target.value);
        let value = e.target.value;
        let re = /\S+@\S+\.\S+/; // regex to check
        let result = re.test(value);

        if (result == true) {
            email.classList.remove('uk-form-danger');
            email.classList.add('uk-form-success')
            emailWarn.classList.add('uk-hidden');
            check.email = true;
            return true;
        } else {
            check.email = false;
            email.classList.add('uk-form-danger');
            email.classList.remove('uk-form-success')
            emailWarn.classList.remove('uk-hidden');
            UIkit.notification({message: '<div class="uk-alert-danger"><i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp;Controleer het e-mailadres</div>'})
            return false;
        }
    }

function allTrue(obj) {
    for(let o in obj)
          if(!obj[o]) return false;
        
      return true;
}

function validateVerzend(){
    if(allTrue(check)) {
        verzend.classList.remove('uk-disabled');
        verzend.classList.add('uk-button-primary');
    } else {
        verzend.classList.add('uk-disabled');
    }
}


let elNaam = document.getElementById('naam');
let elTelefoon = document.getElementById('telefoon');
let elEmail = document.getElementById('email');

elNaam.addEventListener('blur', checkNaam);
elTelefoon.addEventListener('blur', checkTelefoon);
elEmail.addEventListener('blur', validateEmail);
