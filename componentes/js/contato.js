// Vanessa Me Tonini

// Valida os campos do formul�rio de contato
function ValidaCampos() {
    var camposInvalidos = ""; // Guarda os nomes dos campos inv�lidos
    if (document.getElementById('nome').value.trim() == "") // N�o pode ser vazio.
        camposInvalidos = "\r\nNome";
    if (!ValidaEmail(false)) // Valida com regex sem notificar o usu�rio
        camposInvalidos += "\r\nEmail";
    if (document.getElementById('mensagem').value.trim() == "") // N�o vazio
        camposInvalidos += "\r\nMensagem";
    if (camposInvalidos != "") {
        alert("Preencha corretamente o campo:\r\n" + camposInvalidos);
        return false;
    }
    return true; // Valida��o ok.
}

// Valida endere�o de e-mail com express�o regular
function ValidaEmail(doAlert) {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
        // Se doAlert for true, notifique o usu�rio
        if (doAlert) {
            alert('Endere�o de e-mail inv�lido!');
            email.focus
        }
        return false;
    } else return true;
}

// extens�o do string para trim()
String.prototype.trim = function() {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}

// copyright 1999 Idocs, Inc. http://www.idocs.com
// Distribute this script freely but keep this notice in place
function numbersonly(myfield, e, dec) {
    var key;
    var keychar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);

    // control keys
    if ((key == null) || (key == 0) || (key == 8) ||
    (key == 9) || (key == 13) || (key == 27))
        return true;

    // numbers
    else if ((("0123456789").indexOf(keychar) > -1))
        return true;

    // decimal point jump
    else if (dec && (keychar == ".")) {
        myfield.form.elements[dec].focus();
        return false;
    }
    else
        return false;
}


