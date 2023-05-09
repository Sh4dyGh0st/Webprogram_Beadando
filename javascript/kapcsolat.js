window.onload = function() {
    var kuld = document.getElementById("kuld");
    if (kuld) {
    kuld.disabled = true;
    }
    };
    // kliens oldali ellenőrzés
    function ellenoriz() { 
    var rendben = true; 
    var fokusz = null; 
    
    //E-mail cím ellenőrzés
    var email = document.getElementById("email");
    if (email) { 
    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!checkPattern.test(email.value)) { 
    rendben = false;
    email.style.background = '#f99';
    fokusz = email;
    } else {
    email.style.background = '#9f9';
    }
    }
    //Üzenetellenőrzés
    var nev = document.getElementById("nev");
    if (nev) {
    if (nev.value.length<5) { 
    rendben = false;
    nev.style.background = '#f99';
    fokusz = nev;
    } else {
    nev.style.background = '#9f9';
    }
    }
    if (fokusz) { 
    fokusz.focus();
    }
    //Küld gomb
    var kuld = document.getElementById("kuld");
    if (kuld) {
    kuld.disabled = !rendben;
    }
    return rendben;
    }