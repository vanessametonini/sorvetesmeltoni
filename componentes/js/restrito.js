// JavaScript Document

// Valida os campos do formulário login da extranet
function verifica() {
    var camposInvalidos = ""; // Guarda os nomes dos campos inválidos
    if (document.getElementById('login').value.trim() == "") // Não pode ser vazio.
        camposInvalidos = "\r\nNome";
    if (document.getElementById('senha').value.trim() == "") // Não pode ser vazio.
         camposInvalidos += "\r\nSenha";
  
    if (camposInvalidos != "") {
        alert("Preencha o campo:\r\n" + camposInvalidos);
        return false;
    }
    return true; // Validação ok.
}

// extensão do string para trim()
String.prototype.trim = function() {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}
