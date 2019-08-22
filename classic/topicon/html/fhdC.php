<?php

// Incluir aquivo de conexão
require_once("../config/config.php");
 
// Recebe a id enviada no método GET
$id = $_GET['id'];
 
// Recupera do banco de dados o aluno que o ID recebido e suas anotações

$sql = mysqli_query($conn,"SELECT * FROM TB_ALUNO WHERE ID = '".$id."'");
$sqlAnotacoesP = mysqli_query($conn,"SELECT * FROM TB_ANOTACOES WHERE ID_ALUNO = '".$id."' AND TIPO='P' order by DATA");
$sqlAnotacoesN = mysqli_query($conn,"SELECT * FROM TB_ANOTACOES WHERE ID_ALUNO = '".$id."' AND TIPO='N' order by DATA");
$sqlAnotacoesO = mysqli_query($conn,"SELECT * FROM TB_ANOTACOES WHERE ID_ALUNO = '".$id."' AND TIPO='O' order by DATA");

 
// Pega os dados e armazena na variável $aluno
$aluno = mysqli_fetch_object($sql);

// Dados do Aluno que estarão no cabeçalho da FHD
$nome=utf8_encode($aluno->NOME);
$nomeG=utf8_encode($aluno-> NOME_GUERRA);
$nip = $aluno-> NIP;
$posto = utf8_encode($aluno->POSTO);
$quadro = utf8_encode($aluno->QUADRO);
$cia = $aluno-> CIA ;
$cia .="ª";
$pelotao = $aluno->PELOTAO;
$pelotao .="º";
$foto = utf8_encode($aluno-> FOTO);


// ANOTAÇÕES

//Criar um campo escondido que irá armazernar o ID do Aluno
	$htmlAnotacoes="<input type=\"hidden\" name=\"id\" value=\"" . $id . "\"/>";

//Criar um campo escondido que irá armazernar o ID das anotações excluídas
	$htmlAnotacoes.="<input type=\"hidden\" name=\"exclusoes\" id=\"exclusoes\"  value=\"\"/>";
	
///////////////////////////////////////Anotações Positivas/////////////////////////////////////////
$anotacoesP = array();
	$i=0;
	
if($sqlAnotacoesP->num_rows<>0){	
  
while ($anotacaoP = mysqli_fetch_object($sqlAnotacoesP)) {
	array_push($anotacoesP, array('id' => $anotacaoP->ID, 'anotacao' =>  $anotacaoP->ANOTACAO, 'oficial' =>  $anotacaoP->OFICIAL, 'data' =>  $anotacaoP->DATA, 'tipo' =>  $anotacaoP->TIPO));

	$htmlAnotacoes.="<tr >
				<td class=\"td\" ><input name=\"ap". $i . "1\" id=\"ap". $i . "1\" class=\"input existenteAP\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(ap" . $i . "1)\" value=\"" . date('d/m/Y',strtotime(($anotacoesP[$i]["data"]))).  "\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"ap". $i . "2\" class=\"input existenteAP\"onchange=\"inputEditado(ap" . $i . "2)\"  value=\"".$anotacoesP[$i]["oficial"]. "\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input existenteAP \" name=\"ap". $i . "3\" onchange=\"inputEditado(ap" . $i . "3)\"  value=\"" .  $anotacoesP[$i]["anotacao"]. "\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\" value=\"".$anotacoesP[$i]["id"]."\" /><input type=\"hidden\" name=\"acao_ap". $i . "\" id=\"acao_ap". $i . "\" value=\"\"/><input type=\"hidden\" name=\"tipo_ap". $i . "\" id=\"tipo_ap". $i . "\" value=\"P\"/><input type=\"hidden\" name=\"id_anotacao_ap". $i . "\"  value=\"".$anotacoesP[$i]["id"]."\"/></td>
				</tr>";
		$i=$i +1;	
}
}
else{	

	$htmlAnotacoes.="<tr >
				<td class=\"td\" ><input name=\"ap01\" class=\"input novaAP\" onkeyup=\"makeDate(this)\" onchange=\"inputEditado(ap01)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"ap02\" class=\"input novaAP\" onchange=\"inputEditado(ap02)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input novaAP\" name=\"ap03\" onchange=\"inputEditado(ap03)\" value=\"\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\"  /> <input type=\"hidden\" name=\"acao_ap0\" id=\"acao_ap0\" value=\"\"/><input type=\"hidden\" name=\"tipo_ap0\" id=\"tipo_ap0\" value=\"P\"/><input type=\"hidden\" name=\"id_anotacao_ap0\" value=\"\"/></td>
				</tr>";
}

///////////////////////////////////////Anotações Negativas/////////////////////////////////////////
$anotacoesN = array();
$i=0;
$htmlAnotacoesN="";
if($sqlAnotacoesN->num_rows<>0){	
  
while ($anotacaoN = mysqli_fetch_object($sqlAnotacoesN)) {
	array_push($anotacoesN, array('id' => $anotacaoN->ID, 'anotacao' =>  $anotacaoN->ANOTACAO, 'oficial' =>  $anotacaoN->OFICIAL, 'data' =>  $anotacaoN->DATA, 'tipo' =>  $anotacaoN->TIPO));

	$htmlAnotacoesN.="<tr >
				<td class=\"td\" ><input name=\"an". $i . "1\" id=\"an". $i . "1\" class=\"input existenteAN\" onkeyup=\"makeDate(this)\" onchange=\"inputEditado(an" . $i . "1)\" value=\"" . date('d/m/Y',strtotime(($anotacoesN[$i]["data"]))).  "\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"an". $i . "2\" class=\"input existenteAN\"onchange=\"inputEditado(an" . $i . "2)\"  value=\"".$anotacoesN[$i]["oficial"]. "\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input existenteAN \" name=\"an". $i . "3\" onchange=\"inputEditado(an" . $i . "3)\"  value=\"" .  $anotacoesN[$i]["anotacao"]. "\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\" value=\"".$anotacoesN[$i]["id"]."\" /><input type=\"hidden\" name=\"acao_an". $i . "\" id=\"acao_an". $i . "\" value=\"\"/><input type=\"hidden\" name=\"tipo_an". $i . "\" id=\"tipo_an". $i . "\" value=\"N\"/><input type=\"hidden\" name=\"id_anotacao_an". $i . "\"  value=\"".$anotacoesN[$i]["id"]."\"/></td>
				</tr>";
		$i=$i +1;	
}
}
else{	

	$htmlAnotacoesN.="<tr >
				<td class=\"td\" ><input name=\"an01\" class=\"input novaAN\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(an01)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"an02\" class=\"input novaAN\" onchange=\"inputEditado(an02)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input novaAN\" name=\"an03\" onchange=\"inputEditado(an03)\" value=\"\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\"  /> <input type=\"hidden\" name=\"acao_an0\" id=\"acao_an0\" value=\"\"/><input type=\"hidden\" name=\"tipo_an0\" id=\"tipo_an0\" value=\"N\"/><input type=\"hidden\" name=\"id_anotacao_an0\" value=\"\"/></td>
				</tr>";
}


///////////////////////////////////////   OBSERVAÇÕESSS   /////////////////////////////////////////
$anotacoesO = array();
$i=0;
$htmlAnotacoesO="";
if($sqlAnotacoesO->num_rows<>0){	
  
while ($anotacaoO = mysqli_fetch_object($sqlAnotacoesO)) {
	array_push($anotacoesO, array('id' => $anotacaoO->ID, 'anotacao' =>  $anotacaoO->ANOTACAO, 'data' =>  $anotacaoO->DATA, 'tipo' =>  $anotacaoO->TIPO));

	$htmlAnotacoesO.="<tr >
				<td class=\"td\" ><input name=\"ao". $i . "1\" id=\"ao". $i . "1\" class=\"input existenteAO\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(ao" . $i . "1)\" value=\"" . date('d/m/Y',strtotime(($anotacoesO[$i]["data"]))).  "\" style=\"width:100%; text-align:center\"/></td>
				
				<td   class=\"td\" ><input class=\"input existenteAO \" name=\"ao". $i . "3\" onchange=\"inputEditado(ao" . $i . "3)\"  value=\"" .  $anotacoesO[$i]["anotacao"]. "\" style=\"width:100%; text-align:center\"/></td>
				
				<td><img class=\"removerAP btnExcluir\" value=\"".$anotacoesO[$i]["id"]."\" /><input type=\"hidden\" name=\"acao_ao". $i . "\" id=\"acao_ao". $i . "\" value=\"\"/><input type=\"hidden\" name=\"tipo_ao". $i . "\" id=\"tipo_ao". $i . "\" value=\"O\"/><input type=\"hidden\" name=\"id_anotacao_ao". $i . "\"  value=\"".$anotacoesO[$i]["id"]."\"/><input type=\"hidden\" name=\"ao02\" id=\"ao02\"/></td>
				</tr>";
		$i=$i +1;	
}
}
else{	

	$htmlAnotacoesO.="<tr >
				<td class=\"td\" ><input name=\"ao01\" class=\"input novaAO\" onkeyup=\"makeDate(this)\"  onchange=\"inputEditado(ao01)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"ao03\" class=\"input novaAO\" onchange=\"inputEditado(ao03)\"  value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td><img class=\"removerAP btnExcluir\"  /> <input type=\"hidden\" name=\"acao_ao0\" id=\"acao_ao0\" value=\"\"/><input type=\"hidden\" name=\"tipo_ao0\" id=\"tipo_ao0\" value=\"O\"/><input type=\"hidden\" name=\"id_anotacao_ao0\" value=\"\"/><input type=\"hidden\" name=\"ao02\" id=\"ao02\"/></td>
				</tr>";
}


	

require_once 'header.php';
?>


    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
	  <form action="atualizarFHD.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center">
              <div class="card-block">
                <a class="" href="javascript:void(0)">
                  <img src="<?php echo $foto; ?>" alt="...">
                </a>
                <h4 class="profile-user"> <?php echo $nomeG; ?> </h4>
      
         
              </div>
          
            </div>
            <!-- End Page Widget -->
          </div>

          <div class="col-lg-9">
            <!-- Panel -->
            <div class="panel">
              <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
               <div>
			<center> <h4> CENTRO DE INSTRUÇÃO ALMIRANTE WANDENKOLK </br>
				COMANDO DO CORPO DE ALUNOS</br>
				BATALHÃO DE ALUNOS DO CURSO DE FORMAÇÃO DE OFICIAIS</br></br>
				<u>FICHA HISTÓRICO-DISCIPLINAR</u></br></h4> </center>
			   </div>
			   <div>
			   <center>
			   <table  border="1"  style="
					width: 70%;
					align-content: center;
					text-align: center;
					color: black;">
				<tr>
				<td>1º Conceito</td>
				<td>2º Conceito</td>
				<td>3º Conceito</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				</table>
				</center>
				</div>
				
				
				<div>
				<center>
				<table  border="1"  style="
					width: 100%;
					color: black;
					margin-top: 40px;">
				<tr>
				<td>COMPANHIA: <?php echo $cia; ?></td>
				<td>PELOTÃO: <?php echo $pelotao; ?></td>
				<td>TURMA: </td>
				
				</tr>
				<tr>
				<td colspan="3">ALUNO: <?php echo $posto; ?> (<?php echo $quadro; ?>) <?php echo $nip; ?> <?php echo $nome; ?></td>
					</tr>
					<tr>
					</table>
					</center>
				</div>
				
				
				
					<!-- Tabela de Anotações positivas!! -->
					<div>	
					<center>					
					<table  id="tblAnotacoesPositivas" border="1"  style="
					width: 100%;
					color: black;
					margin-top: 40px;
					text-align: center;">
				<td colspan="4" style="text-align: left;"><b>&nbsp; 1. ANOTAÇÕES POSITIVAS<b></td>
				</tr>
				<tr>
				<td style="width:20%"><b>DATA<b></td>
				<td style="width:33%"><b>OFICIAL<b></td>
				<td style="width:47%"colspan="2"><b>ANOTAÇÃO<b></td>
				</tr>
				<?php echo($htmlAnotacoes); ?>
				</table>
			<button id="btnAdicionarAP" type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" 
				style="margin-top: 20px;
				width:40px;
				height: 40px;">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
      </button>
	     </center>
			   </div>
			   
			
					<!-- Tabela de Anotações Negativas!! -->
					<div>	
					<center>					
					<table  id="tblAnotacoesNegativas" border="1"  style="
					width: 100%;
					color: black;
					margin-top: 40px;
					text-align: center;">
				<td colspan="4" style="text-align: left;" ><b> &nbsp; 2. ANOTAÇÕES NEGATIVAS<b></td>
				</tr>
				<tr>
				<td style="width:20%"><b>DATA<b></td>
				<td style="width:33%"><b>OFICIAL<b></td>
				<td style="width:47%"colspan="2"><b>ANOTAÇÃO<b></td>
				</tr>
				<?php echo($htmlAnotacoesN); ?>
				</table>
			<button id="btnAdicionarAN" type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" 
				style="margin-top: 20px;
				width: 40px;
				height: 40px;">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
      </button>
	  

	     </center>
			   </div>
			   
			   <!-- Tabela de Observações!! -->
					<div>	
					<center>					
					<table  id="tblObservacoes" border="1"  style="
					width: 100%;
					color: black;
					margin-top: 40px;
					text-align: center;">
				<td colspan="3" style="text-align: left;"><b> &nbsp; 3. OBSERVAÇÕES RELEVANTES<b></td>
				</tr>
				<tr>
				<td style="width:20%"><b>DATA<b></td>
				<td colspan="2" style="width:100%"><b>OBSERVAÇÃO<b></td>
				</tr>
			<?php echo($htmlAnotacoesO); ?>
				</table>
			<button id="btnAdicionarAO" type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" 
				style="margin-top: 20px;
				width: 40px;
				height: 40px;">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
      </button>
	  

	     </center>
			   </div>
			   <div style="padding-top: 80px; "><center>
			    <button onClick="history.go(-1)" style="margin-right: 10%; " type="button" class="btn  btn-default botao">Voltar</button>
			   <button type="submit" class="btn btn-success btn-sm">
                            <i class="icon wb-check botao" aria-hidden="true"></i>Salvar
                          </button>
						  </center></div>
            </div>
			 
            <!-- End Panel -->
          </div>
        </div>
		</form>
      </div>
    </div>
    <!-- End Page -->


   