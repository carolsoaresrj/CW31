<?php

// Incluir aquivo de conexão
require_once("../config/config.php");
 
// Recebe a id enviada no método GET
$id = $_GET['id'];
 
// Recupera do banco de dados o aluno que tem esse ID e suas anotações

$sql = mysqli_query($conn,"SELECT * FROM TB_ALUNO WHERE ID = '".$id."'");
$sqlAnotacoesP = mysqli_query($conn,"SELECT * FROM TB_ANOTACOES WHERE ID_ALUNO = '".$id."' AND TIPO='P'");

 
// Pega os dados e armazena na variável $aluno
$aluno = mysqli_fetch_object($sql);
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

$anotacoesP = array();
/*$htmlAnotacoes="<tr >
				<td class=\"td\" ><input name=\"ap11\" class=\"input\" value=\"<?php echo date('d/m/Y',strtotime(($anotacoesP[0][\"data\"])));?>\" style=\"width:100%; text-align:center\"/></td>
				<td class=\"td\" ><input name=\"ap12\" class=\"input\" value=\"<?php echo utf8_encode($anotacoesP[0][\"oficial\"])?>\" style=\"width:100%; text-align:center\"/></td>
				<td  style=\"width:90%\" class=\"td\" ><input class=\"input\" name=\"ap13\" value=\"<?php echo utf8_encode($anotacoesP[0][\"anotacao\"])?>\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\"  /></td>
				</tr>";
*/
	//print_r($myArray[]);
	
	$htmlAnotacoes="";
	$i=0;
	
if($sqlAnotacoesP->num_rows<>0){	
  
while ($anotacaoP = mysqli_fetch_object($sqlAnotacoesP)) {
	
	 
	array_push($anotacoesP, array('id' => $anotacaoP->ID, 'anotacao' =>  $anotacaoP->ANOTACAO, 'oficial' =>  $anotacaoP->OFICIAL, 'data' =>  $anotacaoP->DATA, 'tipo' =>  $anotacaoP->TIPO));

	$htmlAnotacoes.="<tr >
				<td class=\"td\" ><input name=\"ap". $i . "1\" class=\"input\" value=\"" . date('d/m/Y',strtotime(($anotacoesP[$i]["data"]))).  "\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"ap". $i . "2\" class=\"input\" value=\"".  utf8_encode($anotacoesP[$i]["oficial"]). "\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input\" name=\"ap". $i . "3\" value=\"" .  utf8_encode($anotacoesP[$i]["anotacao"]). "\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\"  /></td>
				</tr>";
	
	$i=$i +1;
	
	
	//print_r ("oi") ; 
}
}
else{	

	$htmlAnotacoes.="<tr >
				<td class=\"td\" ><input name=\"ap01\" class=\"input\" value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td class=\"td\" ><input name=\"ap02\" class=\"input\" value=\"\" style=\"width:100%; text-align:center\"/></td>
				
				<td  style=\"width:90%;\" class=\"td\" ><input class=\"input\" name=\"ap03\" value=\"\" style=\"width:100%; text-align:center\"/></td>
				<td><img class=\"removerAP btnExcluir\"  /></td>
				</tr>";
	
	
}
 //print_r($anotacoesP[0]["oficial"]);
 //print_r(array_values ($anotacoesP));
 



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
				<tr >
				<td class="td"><input class="input" value="" style="width:100%; text-align:center"/></td>
				<td class="td"><input class="input" value="" style="width:100%; text-align:center"/></td>
				<td  style="width:90%" class="td"><input class="input" value="" style="width:100%; text-align:center"/></td>
				<td><img class="removerAP btnExcluir"  /></td> 
				</tr> 
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
				<td colspan="2" style="text-align: left;"><b> &nbsp; 3. OBSERVAÇÕES RELEVANTES<b></td>
				</tr>
				<tr>
				<td  style="width:98%"  class="td"><input value="" class="input" style="width:100%"/></td>
				<td><img class="removerAP btnExcluir"  /></td>
				
				</tr>
			
				</table>
			<button id="btnAdicionarOBS" type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" 
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


   