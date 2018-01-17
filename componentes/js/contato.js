// Vanessa Me Tonini

// Valida os campos do formulário de contato
function ValidaCampos() {
    var camposInvalidos = ""; // Guarda os nomes dos campos inválidos
    if (document.getElementById('nome').value.trim() == "") // Não pode ser vazio.
        camposInvalidos = "\r\nNome";
    if (!ValidaEmail(false)) // Valida com regex sem notificar o usuário
        camposInvalidos += "\r\nEmail";
    if (document.getElementById('mensagem').value.trim() == "") // Não vazio
        camposInvalidos += "\r\nMensagem";
    if (camposInvalidos != "") {
        alert("Preencha corretamente o campo:\r\n" + camposInvalidos);
        return false;
    }
    return true; // Validação ok.
}

// Valida endereço de e-mail com expressão regular
function ValidaEmail(doAlert) {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
        // Se doAlert for true, notifique o usuário
        if (doAlert) {
            alert('Endereço de e-mail inválido!');
            email.focus
        }
        return false;
    } else return true;
}

// extensão do string para trim()
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


