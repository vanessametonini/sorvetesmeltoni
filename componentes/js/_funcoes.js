function verificaFonte(e){
	var targ;
	if (!e) var e = window.event;

	if (e.target) targ = e.target;
	else if (e.srcElement) targ = e.srcElement;

	if (targ.nodeType == 3) // defeat Safari bug
		targ = targ.parentNode;

	return  targ
}

function tpag(){
	var tam = document.getElementById('conteudoProdutos').scrollHeight + 239;
	if(tam > 800){
		document.getElementById('estruturaProdutos').style.height = tam;	
	} else {
		document.getElementById('estruturaProdutos').style.height = 736;	
	}
}

function tpag_(){
	var tam = document.getElementById('conteudoEmpresa').scrollHeight + 239;
	if(tam > 800){
		document.getElementById('estruturaEmpresa').style.height = tam;
	} else {
		document.getElementById('estruturaEmpresa').style.height = 736;
	}
}


function carregaAmpliada(src){
	mostra("imagemAmpliada");
	document.getElementById("imagemAmpliada").innerHTML = "<img src='"+src+"' width='200' height='192'>";
}

function abreImgGrande(imagem, legenda, tipo){
	if(tipo==0){
		document.getElementById('fotoG').innerHTML = "<img width='400' height='300' src='"+imagem+"' style='border:1px solid gray;'>";
		document.getElementById('legenda').innerHTML = legenda;
	} else {
		document.getElementById('fotoG').innerHTML = "<img width='300' height='400' src='"+imagem+"' style='border:1px solid gray;'>";
		document.getElementById('legenda').innerHTML = legenda;
	}
}

function alterna(objeto) { 
	for(i=1; i<=8; i++){
		objeto_n = objeto.slice(0,1)+i;
		elemento = 'document.getElementById(\'' + objeto_n + '\')';
		
		if(objeto_n == objeto){
			if(elemento) eval(elemento).style.display = 'block';
		} else {
			if(elemento) eval(elemento).style.display = 'none';
		}
	}
}

function alterna2(objeto) { 
	for(i=1; i<=4; i++){
		objeto_n = objeto.slice(0,1)+i;
		elemento = 'document.getElementById(\'' + objeto_n + '\')';
		
		if(objeto_n == objeto){
			if(elemento) eval(elemento).style.display = 'block';
		} else {
			if(elemento) eval(elemento).style.display = 'none';
		}
	}
}


// Funcao para gerar numero aleatorio
function rand(numero) {
	return Math.floor(Math.random()*numero);
}

function direcionar(arquivo) {
	document.location.href = arquivo;
}

function abrirImagem (param) {
	novaJanela = window.open(param, 'Imagem', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=700,height=350,top=20'); 
	novaJanela.focus();
}

// Funcao para dimencionar a janela de acordo com o tamanho da imagem
function dimensionarJanela(){
	if ((screen.Width <= (document.images.imagem_selecionada.width)) && (screen.availHeight <= (document.images.imagem_selecionada.height))) {
		window.resizeTo(screen.Width, screen.availHeight);
	} else {
		window.resizeTo(document.images.imagem_selecionada.width+30,document.images.imagem_selecionada.height+120);
	}
}

function popup(arquivo, titulo, largura, altura, tipo) {
	
	w = screen.width;
	h = screen.height;
	
	meio_w = w/2;
	meio_h = h/2;
	
	altura2 = altura/2;
	largura2 = largura/2;
	meio1 = meio_h-altura2;
	meio2 = meio_w-largura2;

		
	if( typeof(tipo) == "undefined" ){
		novaJanela = window.open(arquivo, titulo, 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width='+largura+',height='+altura+',top='+meio1+',left='+meio2);
	} else if(tipo == "novo" || tipo == "nova") {
		novaJanela = window.open(arquivo, titulo, '');
	} else {
		novaJanela = window.open(arquivo, titulo, tipo);
	}

	// Verifica se abriu a janela
	if (!novaJanela) {

		elemento1 = 'document.getElementById("popupBloqueado")';
		elemento2 = 'document.getElementById("estrutura")';
		elemento3 = 'document.getElementById("bannerLateral")';

		// Verifica se existe o DIV
		if (eval(elemento1)) {
			eval(elemento1).style.display = 'block';
		}

		// Verifica se existe o DIV
		if (eval(elemento2)) {
			eval(elemento2).style.top = '42px';
		}

		// Verifica se existe o DIV
		if (eval(elemento3)) {
			eval(elemento3).style.top = '42px';
		}

	} else {
		novaJanela.focus();
	}
}

//Trocar a cor de fundo
function corFundo(objeto, cor) {
	elemento = 'document.getElementById(\''+objeto+'\')';
	eval(elemento).style.backgroundColor = cor;
}

// Funcoes para mostrar ou ocultar objetos
function mostra(objeto) {
	elemento = 'document.getElementById(\'' + objeto + '\')';
	if(elemento) eval(elemento).style.display = 'block';
	//if(elemento) eval(elemento).className = 'mostra';
}

function esconde(objeto) {
	elemento = 'document.getElementById(\'' + objeto + '\')';
	if(elemento) eval(elemento).style.display = 'none';
	//if(elemento) eval(elemento).className = 'esconde';
}

function escondeMostra(objeto) {
	var elemento = 'document.getElementById(\'' + objeto + '\')';
	/*if (eval(elemento).style.display == 'block' || eval(elemento).style.display == 'inline') {
		eval(elemento).style.display = 'none';
	} else {
		eval(elemento).style.display = 'block';
	}*/
	if (eval(elemento).className == 'mostra' || eval(elemento).style.display == 'esconde') {
		eval(elemento).className = 'esconde';
	} else {
		eval(elemento).className = 'mostra';
	}
}

function escondeMostraSubmenu(objeto) {
	var elemento = 'document.getElementById(\'' + objeto + '\')';
	/*if (eval(elemento).style.display == 'block' || eval(elemento).style.display == 'inline') {
		eval(elemento).style.display = 'none';
	} else {
		eval(elemento).style.display = 'block';
	}*/
	if (eval(elemento).className == 'submenu mostra' || eval(elemento).style.display == 'submenu esconde') {
		eval(elemento).className = 'submenu esconde';
	} else {
		eval(elemento).className = 'submenu mostra';
	}
}

function escondeSubmenu() {
	var elementoArray = new Array('submenu_parque', 'submenu_zoo', 'submenu_shows', 'submenu_fantasia');
	for(i=0; i<4; i++){
		elemento = "document.getElementById('"+elementoArray[i]+"')";
		eval(elemento).className = 'submenu esconde';
	}
}

// Função mostra e esconde na tabela.
function mostraEscondeAutomaticoBloco(objeto) {
	if(document.all) { // IE4+
		elemento = 'document.all[\'' + objeto + '\']';
	} else { // NS6+
		elemento = 'document.getElementById(\'' + objeto + '\')';
	}
	if (eval(elemento).style.display == 'block') {
		eval(elemento).style.display = 'none';
	} else {
		eval(elemento).style.display = 'block';
	}
}

//Funcao para marcar campo de erro
function campoErro(formulario, campo) {
	if (campo != undefined && formulario != undefined) {
	
		var campo = 'document.' + formulario + '.' + campo;
		eval(campo).focus();
		eval(campo).className = 'campoErro';
		/*eval(campo).style.border = '1px solid #CC3300';
		eval(campo).style.background = '#FFFFE5';*/
	}
}

//Funcao para desmarcar campo de erro
function campoErroDesmarca(formulario, campo) {
	if (campo != undefined && formulario != undefined) {
		var campo = 'document.' + formulario + '.' + campo;
		eval(campo).style.border = '1px solid #d2d2d2';
		eval(campo).style.background = '#FFFFFF';
	}
}


// Funcao que altera o valor caso de erro
function camposFile(nomeForm) {

	var campos = '';
	var separador = "/";
	var primeiro = 0;

	//Limpa marca de erro de todos os campos
	for(i=0; i<document.form1.length; i++) {
		if(document.form1[i].type == 'file') {
			if(primeiro == 0) {
				separador = "";
				primeiro = 1;
			} else {
				separador = "/";
			}
			campos += separador + document.form1[i].name;
		}
	}
	
	return campos;
}

function verificaTam(campo, tam, prox ,nomeForm){	
	str = "document." + nomeForm + "." + campo + ".value";
	obj = eval (str);
	if (obj.length == tam) {
	   str = "document."+ nomeForm + "." + prox + ".focus()";
	   eval (str);
	}
	return 1;    	    
}

function FormataData(Campo, teclapres) {
	var tecla = teclapres.keyCode;
	var vr = new String(Campo.value);
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	vr = vr.replace("/", "");
	tam = vr.length + 1;
	
	if (tecla != 9 && tecla != 8) {
		if (tam > 2 && tam < 5)
			Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, tam);
		if (tam >= 5 && tam <=10)
			Campo.value = vr.substr(0,2) + '/' + vr.substr(2,2) + '/' + vr.substr(4,4);
	}
}

function MascaraCPF(Campo, teclapres) {
	var tecla = teclapres.keyCode;
	var vr = new String(Campo.value);
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace(".", "");
	vr = vr.replace("-", "");
	vr = vr.replace("-", "");
	vr = vr.replace("-", "");
	vr = vr.replace("-", "");
	vr = vr.replace("-", "");
	tam = vr.length + 1;
	if (tecla != 9 && tecla != 8) {
	 	if(tam > 3 && tam < 5){
		Campo.value = vr.substr(0, 3) + '.' + vr.substr(3, tam);
	 	}
	 if(tam > 6 && tam < 8) {
	  		Campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(6, tam);
	 	}
	 if(tam > 9 && tam < 11) {
	  		Campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(6, 3) + '-' + vr.substr(9, 11);
	 	} 
	}
}

function limiteCampo(campo, limite) {
	if (campo.value.length > limite)
		campo.value = campo.value.substring(0, limite);
}				

//Funcoes para redimensionar objetos flash
function setFlashWidth(id,width) {
	//document.getElementById(id).style.width = width;
}

function setFlashHeight(id,height) {
	//document.getElementById(id).style.height = height;
}

// Funcao que formata campo de telefone
function formataTelefone(obj) {

	// Verificacao da string geral
	var checkstr = "0123456789() -";

	// Verificacao apenas dos numeros
	var checkstr2 = "0123456789";

	// Variavel temporaria para guardar
	var temp = '';
	
	// Loop por toda a string para verificar se e' valida e retorna apenas os itens validos
	for (i = 0; i < obj.value.length; i++) {
		if (checkstr.indexOf(obj.value.substr(i, 1)) >= 0) {
			temp = temp + obj.value.substr(i,1);
		}
	}
	
	// Salva a string valida no campo
	obj.value = temp;

	// Verifica o tamanho para formatar corretamente
	switch (obj.value.length) {
    	case 1:
	        obj.value = "(" + obj.value;
    	    break;
	    case 3:
    	    obj.value = obj.value + ") ";
        	break;
	    case 9:
    	    obj.value = obj.value + "-";
        	break;
	}

	// Limpa a variavel temporaria para fazer a verificacao final de validade, por posicoes
	temp = '';

	// Loop para verificar a validade de cada posicao
	for (i = 0; i < obj.value.length; i++) {
		if (i==0 && obj.value.substr(i, 1) == '(') {
			temp = temp + obj.value.substr(i,1);
		} else if (i==3 && obj.value.substr(i, 1) == ')') {
			temp = temp + obj.value.substr(i,1);
		} else if (i==4 && obj.value.substr(i, 1) == ' ') {
			temp = temp + obj.value.substr(i,1);
		} else if (i==9 && obj.value.substr(i, 1) == '-') {
			temp = temp + obj.value.substr(i,1);
		} else if (i!=3 && i!=4 && i!=9 && checkstr2.indexOf(obj.value.substr(i, 1)) >= 0) {
			temp = temp + obj.value.substr(i,1);
		}
	}

	// Salva no input
	obj.value = temp;
}

function mascarar(w,e,m,r,a) {
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;
	
	// Variáveis da função
	var txt = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
	var mask = (!r) ? m : m.reverse();
	var pre = (a ) ? a.pre : "";
	var pos = (a ) ? a.pos : "";
	var ret = "";
	
	// Cancela se o evento for Backspace
	//if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;

	// Loop na máscara para aplicar os caracteres
	for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
		if(mask.charAt(x)!='#'){
			ret += mask.charAt(x); x++;
		} else{
			ret += txt.charAt(y); y++; x++;
		}
	}

	// Retorno da função
	ret = (!r) ? ret : ret.reverse() 
	w.value = pre+ret+pos;
}

// Novo método para o objeto 'String'
String.prototype.reverse = function(){
	return this.split('').reverse().join('');
}



function escondeMostraBusca(objeto) {
	if (document.getElementById("campos").style.display == "block") {
		document.getElementById("campos").style.display = "none";
		document.getElementById("buscaRepresentante").className = "inativo";
	} else {
		document.getElementById("campos").style.display = "block";
		document.getElementById("buscaRepresentante").className = "ativo";
	}
}