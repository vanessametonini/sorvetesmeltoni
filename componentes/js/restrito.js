// JavaScript Document

// Valida os campos do formul�rio login da extranet
function verifica() {
    var camposInvalidos = ""; // Guarda os nomes dos campos inv�lidos
    if (document.getElementById('login').value.trim() == "") // N�o pode ser vazio.
        camposInvalidos = "\r\nNome";
    if (document.getElementById('senha').value.trim() == "") // N�o pode ser vazio.
         camposInvalidos += "\r\nSenha";
  
    if (camposInvalidos != "") {
        alert("Preencha o campo:\r\n" + camposInvalidos);
        return false;
    }
    return true; // Valida��o ok.
}

// extens�o do string para trim()
String.prototype.trim = function() {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}
