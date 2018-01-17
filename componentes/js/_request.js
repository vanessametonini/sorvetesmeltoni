function getHTTPObject() {
	var req;

	try {
		if (window.XMLHttpRequest) {
			var req = new XMLHttpRequest();

			if (req.readyState == null) {
				req.readyState = 1;
				req.addEventListener("load", function () {
					req.readyState = 4;
					if (typeof req.onReadyStateChange == "function")
						req.onReadyStateChange();
				}, false)
			}
			return req;
		}

 		if (window.ActiveXObject) {
			var prefixes = ["MSXML2", "Microsoft", "MSXML", "MSXML3"];

			for (var i = 0; i < prefixes.length; i++) {
			try {
			    req = new ActiveXObject(prefixes[i] + ".XmlHttp");
			    return req;
				} catch (ex) {}
			}
		}
	} catch (ex) {}
}

var http = getHTTPObject();

function trim(valor){
	valor = valor.replace(/^\s+/, '');
	valor = valor.replace(/\s+$/, '');
	return valor;
}

function selecionaCidade(estado) {
	http.open("PUT", "_requestCidade.cfm?estado=" + estado, true);
	http.onreadystatechange = function() {retorna('cidade', 'Selecione', 'Nenhuma cidade encontrada');};
	http.send(null);
}

function selecionaGaleriaFotos(categoria) {
	http.open("PUT", "_requestGaleriaFotos.cfm?categoria=" + categoria, true);
	http.onreadystatechange = function() {retorna('galeria', 'Selecione', 'Nenhuma galeria encontrada');};
	http.send(null);
}

function retorna(alvo, msgSelect, msgSemDados) {
	msgSelect = typeof(msgSelect) != 'undefined' ? msgSelect : 'Selecione';
	msgSemDados = typeof(msgSemDados) != 'undefined' ? msgSemDados : 'Nenhum item encontrado';

	// Coloca a reticencias
	campo_select = eval("document.getElementById('"+alvo+"')");
	campo_select.options.length = 0;
	
	campo_select.options[0] = new Option("Carregando...","");
	if (http.readyState == 4) {
		campo_select.options.length = 0;
		results = http.responseText.split("$|");
		
		if(http.responseText.length > 0) {
			campo_select.options[0] = new Option(msgSelect,"0");
			
			for(i = 1; i < results.length+1; i++) {
				string = results[i-1].split("|$");
				campo_select.options[i] = new Option(string[1], string[0]);
			}
		} else {
			campo_select.options[0] = new Option(msgSemDados,"");
		}
	}
}
