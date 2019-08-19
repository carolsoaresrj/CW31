<?php
require_once("../config/config.php");
print_r($_POST);

$nip=$_POST['nip'];
$sexo=$_POST['inputSexo'];
$curso =$_POST['inputCurso'];
$nome =$_POST['nome'];
$nome_guerra =$_POST['nome_guerra'];
$dt_aps =$_POST['dt_aps'];
$dt_apsA = explode("/",$dt_aps);
$dt_aps=$dt_apsA[2]."-".$dt_apsA[1]."-".$dt_apsA[0];


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

$foto=$_FILES['foto']["name"];
print_r($foto=$_FILES['foto']);
//$foto = file_get_contents($_FILES['foto']['tmp_name']);
//print_r($_FILES['foto']["name"]);
//$foto=$_FILES['foto']["name"];


if (isset($_POST)) {

$query= "INSERT INTO TB_ALUNO(NIP,POSTO,QUADRO,NOME,NOME_GUERRA,ESPECIALIDADE, SEXO,CAMA, ARMARIO, ALOJAMENTO,CIA, PELOTAO,TURMA,APS,FOTO,CPF,RG, ID_MILITAR,CEP,RUA,NUMERO,COMPLEMENTO, BAIRRO,CIDADE, ESTADO, ANO_CURSO,CURSO) VALUES ('".$nip."','".$posto."','".$quadro."','".$nome."','".$nome_guerra."','".$especialidade."','".$sexo."','".$cama."','".$armario."','".$alojamento."','".$cia."','".$pelotao."','".$turma."','".$dt_aps."','".$foto."','".$cpf."','".$rg."','".$id_militar."','".$cep."','".$rua."','".$numero."','".$complemento."','".$bairro."','".$cidade."','".$estado."',".$ano_curso.",'".$curso."')";
		
 //print_r($query);
   
 $sql =  mysqli_query($conn, $query);
	
	mysqli_close($conn);

/*
	
     $query2= "SELECT FOTO FROM TB_ALUNO  where ID='".$id. "'" or
        die("O sistema não foi capaz de executar a query");
		
		
    $sql2 =  mysqli_query($conn, $query2);
	
	// $row=mysqli_fetch_object($query2); 
 //   Header( "Content-type: image/gif"); 
  //  echo $row->FOTO; 
   while ($alunos = mysqli_fetch_object($sql2)) {
	  

 header('Content-Type: image/jpg');

     //   echo $alunos->FOTO;
		echo " $alunos->FOTO ";

   }*/
   
//$tipo = $row["tipo"]; 
//$bytes = $row["foto"];


//header("Content-type: ".$tipo."");

//echo $bytes;



	
	

}
		


?>
