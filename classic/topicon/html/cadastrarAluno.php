<?php
require_once("../config/config.php");
//print_r($_POST);
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}
$id= $_SESSION['id_aluno'] ;
unset($_SESSION['id_aluno']);

$nip=$_POST['nip'];
$sexo=$_POST['inputSexo'];
$curso =$_POST['inputCurso'];
$nome =$_POST['nome'];
$nome_guerra =$_POST['nome_guerra'];
$dt_aps =$_POST['dt_aps'];
if($dt_aps!=""){
$dt_apsA = explode("/",$dt_aps);
$dt_aps=$dt_apsA[2]."-".$dt_apsA[1]."-".$dt_apsA[0];
}

$posto = $_POST['posto'];
$quadro=$_POST['quadro'];
$especialidade=$_POST['especialidade'];

$cia =$_POST['cia'];
$pelotao =$_POST['pelotao'];
$turma =$_POST['turma']; 
$cama =$_POST['cama'];
$armario=$_POST['armario'];
$alojamento =$_POST['alojamento'];


$cpf=$_POST['cpf']; 
$rg=$_POST['rg'];
$id_militar=$_POST['id_militar'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];



$ano_curso=date("Y");

$imagem = $_FILES["foto"];
if($imagem != NULL) { 

	$nomeFinal = time().'.jpg';

	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {

		$tamanhoImg = filesize($nomeFinal); 



		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
         //unlink($nomeFinal);
		 
		// echo $mysqlImg;
}}



if($id==0){
if (isset($_POST)) {

$query= "INSERT INTO TB_ALUNO(NIP,POSTO,QUADRO,NOME,NOME_GUERRA,ESPECIALIDADE, SEXO,CAMA, ARMARIO, ALOJAMENTO,CIA, PELOTAO,TURMA,APS,CPF,RG, ID_MILITAR,CEP,RUA,NUMERO,COMPLEMENTO, BAIRRO,CIDADE, ESTADO, ANO_CURSO,CURSO, FOTO_IMG) VALUES ('".$nip."','".$posto."','".$quadro."','".$nome."','".$nome_guerra."','".$especialidade."','".$sexo."','".$cama."','".$armario."','".$alojamento."','".$cia."','".$pelotao."','".$turma."','".$dt_aps."','".$cpf."','".$rg."','".$id_militar."','".$cep."','".$rua."','".$numero."','".$complemento."','".$bairro."','".$cidade."','".$estado."',".$ano_curso.",'".$curso."','".$mysqlImg."')";
		
 //print_r($query);
   
 $sql =  mysqli_query($conn, $query);
 
  print_r("Salvo com sucesso!");
}

}
if($id!=0){
if (isset($_POST)) {

$query= "Update TB_ALUNO SET NIP='".$nip."',POSTO='".$posto."', QUADRO='".$quadro."', NOME='".$nome."' ,NOME_GUERRA='".$nome_guerra."' ,ESPECIALIDADE='".$especialidade."' , SEXO= '".$sexo."',CAMA='".$cama."', ARMARIO='".$armario."', ALOJAMENTO='".$alojamento."',CIA='".$cia."', PELOTAO='".$pelotao."',TURMA='".$turma."',APS='".$dt_aps."',CPF='".$cpf."',RG='".$rg."', ID_MILITAR='".$id_militar."',CEP='".$cep."',RUA='".$rua."',NUMERO='".$numero."',COMPLEMENTO='".$complemento."', BAIRRO='".$bairro."',CIDADE='".$cidade."', ESTADO='".$estado."', ANO_CURSO=".$ano_curso.",CURSO='".$curso."', FOTO_IMG='".$mysqlImg."' WHERE ID=".$id;
		
 //print_r($query);
   
 $sql =  mysqli_query($conn, $query);
 print_r("Atualizado com sucesso!");
}

}

		
	mysqli_close($conn);

?>
