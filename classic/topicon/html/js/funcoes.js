$(function(){
	function AdicionarAP(){
		var linhas= $("#tblAnotacoesPositivas tr").length-2;
		$("#tblAnotacoesPositivas tbody").append(
			"<tr style=\"height:20px\">"+
			"<td class=\"td\" ><input class=\"input novaAP\" style=\"width:100%;text-align:center\" name=\"ap" +linhas+"1\" id=\"ap" +linhas+"1\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(ap" +linhas + "1)\"/></td>"+
			"<td class=\"td\" ><input class=\"input novaAP\" style=\"width:100%;text-align:center\"name=\"ap" +linhas+"2\" id=\"ap" +linhas+"2\" onchange=\"inputEditado(ap" +linhas + "2)\"/></td>"+
			"<td  class=\"td\" style=\"width:90%\" \"><input class=\"input novaAP\" style=\"width:100%;text-align:center\" name=\"ap" +linhas+"3\" id=\"ap" +linhas+"3\" onchange=\"inputEditado(ap" +linhas + "3)\"/></td>"+
			"<td><img  class='removerAP btnExcluir'/><input type=\"hidden\" name=\"acao_ap" +linhas+"\" id=\"acao_ap" +linhas+"\" value=\"\"/><input type=\"hidden\" name=\"tipo_ap" +linhas+"\" id=\"tipo_ap" +linhas+"\" value=\"P\"/><input type=\"hidden\" name=\"id_anotacao_ap"+linhas+"\" value=\"\"/></td>"+
			"</tr>");

					
		//$(".btnSalvar").bind("click", Salvar);     
		$(".btnExcluir").bind("click", Excluir);
	};

	function AdicionarAN(){
		var linhas= $("#tblAnotacoesNegativas tr").length-2;
		$("#tblAnotacoesNegativas tbody").append(
			"<tr style=\"height:20px\">"+
			"<td class=\"td\" ><input class=\"input novaAN\" style=\"width:100%;text-align:center\" name=\"an" +linhas+"1\" id=\"an" +linhas+"1\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(an" +linhas + "1)\"/></td>"+
			"<td class=\"td\" ><input class=\"input novaAN\" style=\"width:100%;text-align:center\"name=\"an" +linhas+"2\" id=\"an" +linhas+"2\" onchange=\"inputEditado(an" +linhas + "2)\"/></td>"+
			"<td  class=\"td\" style=\"width:90%\" \"><input class=\"input novaAN\" style=\"width:100%;text-align:center\" name=\"an" +linhas+"3\" id=\"an" +linhas+"3\" onchange=\"inputEditado(an" +linhas + "3)\"/></td>"+
			"<td><img  class='removerAP btnExcluir'/><input type=\"hidden\" name=\"acao_an" +linhas+"\" id=\"acao_an" +linhas+"\" value=\"\"/><input type=\"hidden\" name=\"tipo_an" +linhas+"\" id=\"tipo_an" +linhas+"\" value=\"N\"/><input type=\"hidden\" name=\"id_anotacao_an"+linhas+"\" value=\"\"/></td>"+
			"</tr>");

		//$(".btnSalvar").bind("click", Salvar);     
		$(".btnExcluir").bind("click", Excluir);
	};
	
	function AdicionarAO(){
		var linhas= $("#tblObservacoes tr").length-2;
		$("#tblObservacoes tbody").append(
			"<tr style=\"height:20px\">"+
			"<td class=\"td\" ><input class=\"input novaAO\" style=\"width:100%;text-align:center\" name=\"ao" +linhas+"1\" id=\"ao" +linhas+"1\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(ao" +linhas + "1)\"/></td>"+
			"<td  class=\"td\" ><input class=\"input novaAO\" style=\"width:100%;text-align:center\" name=\"ao" +linhas+"3\" id=\"ao" +linhas+"3\" onchange=\"inputEditado(ao" +linhas + "3)\"/></td>"+
			"<td><img  class='removerAP btnExcluir'/><input type=\"hidden\" name=\"acao_ao" +linhas+"\" id=\"acao_ao" +linhas+"\" value=\"\"/><input type=\"hidden\" name=\"tipo_ao" +linhas+"\" id=\"tipo_ao" +linhas+"\" value=\"O\"/><input type=\"hidden\" name=\"id_anotacao_ao"+linhas+"\" value=\"\"/><input type=\"hidden\" name=\"ao02\" id=\"ao02\"/></td>"+
			"</tr>");

		//$(".btnSalvar").bind("click", Salvar);     
		$(".btnExcluir").bind("click", Excluir);
	};
	
	function Salvar(){
		var par = $(this).parent().parent(); //tr
		var tdNome = par.children("td:nth-child(1)");
		var tdTelefone = par.children("td:nth-child(2)");
		var tdEmail = par.children("td:nth-child(3)");
		var tdBotoes = par.children("td:nth-child(4)");

		tdNome.html(tdNome.children("input[type=text]").val());
		tdTelefone.html(tdTelefone.children("input[type=text]").val());
		tdEmail.html(tdEmail.children("input[type=text]").val());
		tdBotoes.html("<img src='images/delete.png'class='btnExcluir'/><img src='images/pencil.png' class='btnEditar'/>");

		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};

	function Editar(){
		var par = $(this).parent().parent(); //tr
		var tdNome = par.children("td:nth-child(1)");
		var tdTelefone = par.children("td:nth-child(2)");
		var tdEmail = par.children("td:nth-child(3)");
		var tdBotoes = par.children("td:nth-child(4)");

		tdNome.html("<input type='text' id='txtNome' value='"+tdNome.html()+"'/>");
		tdTelefone.html("<input type='text'id='txtTelefone' value='"+tdTelefone.html()+"'/>");
		tdEmail.html("<input type='text' id='txtEmail' value='"+tdEmail.html()+"'/>");
		tdBotoes.html("<img src='images/disk.png' class='btnSalvar'/>");

		$(".btnSalvar").bind("click", Salvar);
		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};

	function Excluir(){
	    var par = $(this).parent().parent(); //tr
	    par.remove();
		//alert($(this).attr('value'));
		var valor=$(this).attr('value');
		if(valor!=null){
//$("#exclusoes").val($("#exclusoes").attr('value')+";"+$(this).attr('value'));
 // $("#exclusoes").attr('value')+=";"+=$(this).attr('value');

		//alert(document.getElementById('exclusoes').value +=$(this).attr('value'));
		document.getElementById('exclusoes').value +=$(this).attr('value')
		document.getElementById('exclusoes').value+=";" ;
	//alert($("#exclusoes").attr('value'));
	}
	
	};

	
	$(".btnEditar").bind("click", Editar);
	$(".btnExcluir").bind("click", Excluir);
	$("#btnAdicionarAP").bind("click", AdicionarAP); 
	$("#btnAdicionarAN").bind("click", AdicionarAN); 
		$("#btnAdicionarAO").bind("click", AdicionarAO); 
		
		if(document.getElementById("filtros")!=null){
					document.getElementById("filtros").style.display = 'none';

		}
	
	//$("ap01")onchange = "myFunction()"
//});


  

});
