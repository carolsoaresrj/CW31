var req;
 
// FUNÇÃO PARA BUSCA ALUNO
function buscarAlunos(valor) {
 
// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
 
// Arquivo PHP juntamente com o valor digitado no campo (método GET)
var url = "busca.php?valor="+valor;
 
// Chamada do método open para processar a requisição
req.open("Get", url, true); 
 
// Quando o objeto recebe o retorno, chamamos a seguinte função;
req.onreadystatechange = function() {
 
	// Exibe a mensagem "Buscando Noticias..." enquanto carrega
	//if(req.readyState == 1) {
	//	document.getElementById('resultado').innerHTML = 'Buscando Alunos...';
	//}
 
	// Verifica se o Ajax realizou todas as operações corretamente
	if(req.readyState == 4 && req.status == 200) {
 
	// Resposta retornada pelo busca.php
	var resposta = req.responseText;
 
	// Abaixo colocamos a(s) resposta(s) na div resultado
	document.getElementById('resultado').innerHTML = resposta;
	}
}
req.send(null);
}


// FUNÇÃO PARA EXIBIR ALUNO
function exibirConteudo(id) {
	/*
// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}

// Arquivo PHP juntamento com a id do aluno (método GET)
var url = "exibirAluno.php?id="+id;
 
// Chamada do método open para processar a requisição
req.open("Get", url, true); 
 
// Quando o objeto recebe o retorno, chamamos a seguinte função;
req.onreadystatechange = function() {
 
	// Exibe a mensagem "Aguarde..." enquanto carrega
	//if(req.readyState == 1) {
		//document.getElementById('conteudo').innerHTML = 'Aguarde...';
	//}
 
	// Verifica se o Ajax realizou todas as operações corretamente
	if(req.readyState == 4 && req.status == 200) {
 
	// Resposta retornada pelo exibirAluno.php
	var resposta = req.responseText;

	// Abaixo colocamos a resposta na div conteudo
	
	//document.getElementById('conteudo').innerHTML = resposta;
	}
}


req.send(null);

*/

}

function inputEditado(elemento){
$(elemento).css({'color': 'red'});  

if($(elemento).hasClass('existenteAP')){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_ap"+linha;
document.getElementById(acao).value = "update";

}
if($(elemento).hasClass('existenteAN')){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_an"+linha;
document.getElementById(acao).value = "update";

}
if($(elemento).hasClass('existenteAO')){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_ao"+linha;
document.getElementById(acao).value = "update";

}
if(($(elemento).hasClass('novaAP')) ){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_ap"+linha;

document.getElementById(acao).value = "insert";

}if(($(elemento).hasClass('novaAN')) ){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_an"+linha;

document.getElementById(acao).value = "insert";

}
if(($(elemento).hasClass('novaAO')) ){
	
	var linha =$(elemento).attr('name');
	
	linha= linha.substr(2,1);

var acao= "acao_ao"+linha;

document.getElementById(acao).value = "insert";

}
}

function exibeFoto(){
	//document.getElementById("apsFoto").src = document.getElementById("foto").value ;
	var input = document.getElementById("foto");
var fReader = new FileReader();
fReader.readAsDataURL(input.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById("apsFoto");
    img.src = event.target.result;
	
	document.getElementById("hidden").value =event.target.result;

}
}

function exibeFiltros(){
	
        var display = document.getElementById("filtros").style.display;
        if(display == "none")
            document.getElementById("filtros").style.display = 'block';
        else
            document.getElementById("filtros").style.display = 'none';
    
}
 function makeDate(elemento){
	obj = document.getElementById(elemento.id);
vl = obj.value;
l = vl.toString().length;
switch(l){
case 2:
obj.value = vl + "/";
break;
case 5:
obj.value = vl + "/";
break;
}
}

function editarAluno(){
	
	$('#nome').removeAttr('disabled');
	
	$('#foto').removeAttr('disabled');

$('#nome_guerra').removeAttr('disabled');
$('#nip').removeAttr('disabled');
$('#posto').removeAttr('disabled');
$('#quadro').removeAttr('disabled');
$('#sexo').removeAttr('disabled');
$('#curso').removeAttr('disabled');
$('#dt_aps').removeAttr('disabled');
$('#especialidade').removeAttr('disabled');

$('#cia').removeAttr('disabled');
$('#pelotao').removeAttr('disabled');
$('#turma').removeAttr('disabled');
$('#cama').removeAttr('disabled');
$('#armario').removeAttr('disabled');
$('#alojamento').removeAttr('disabled');

$('#cpf').removeAttr('disabled');
$('#rg').removeAttr('disabled');
$('#id_militar').removeAttr('disabled');
$('#cep').removeAttr('disabled');
$('#rua').removeAttr('disabled');
$('#numero').removeAttr('disabled');
$('#complemento').removeAttr('disabled');
$('#bairro').removeAttr('disabled');
$('#cidade').removeAttr('disabled');
$('#estado').removeAttr('disabled');


$('#inputCFO').removeAttr('disabled');
$('#inputSMV').removeAttr('disabled');
$('#inputSMO').removeAttr('disabled');
$('#inputMasculino').removeAttr('disabled');
$('#inputFeminino').removeAttr('disabled');

$('#btnEditar').val('Salvar');
$("#btnEditar").attr("onclick", "enviaForm();");


}

function enviaForm(){
	$("#form").submit();
	}


