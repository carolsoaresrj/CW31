<?php
require_once("../config/config.php");

//print_r($_SESSION['anotaçãoPositivaAlt']);

print_r($_POST);
//$quantidadeAP =((count($_POST)-2)/6);
//print_r(count($_POST));
//print_r($quantidadeAnot);

$id=$_POST['id'];
$anotaçõesExcluidas=$_POST['exclusoes'];
$sql="";
$nroLinhas = array();


foreach ( array_keys($_POST) as $variavel_POST ){
if(strpos($variavel_POST,"acao")===0){

array_push($nroLinhas,substr($variavel_POST,5));

}
	 }
for($i = 0;$i<count($nroLinhas);$i++){
		 // Recebe a variável $ID da anotação
	$id_anotacao="id_anotacao_" . $nroLinhas[$i] ;
	$id_anotacao=$_POST[$id_anotacao];  
	
	
 // Recebe a variável $acao
	$acao="acao_" . $nroLinhas[$i];
	$acao=$_POST[$acao];
	
	 // Recebe a variável $tipo
	$tipo="tipo_" . $nroLinhas[$i] ;
	$tipo=$_POST[$tipo];
	
	 // Recebe a variável $data
	$data=$nroLinhas[$i] . "1";
	$data=$_POST[$data];
	$dataA = explode("/",$data);
	$data=$dataA[2]."-".$dataA[1]."-".$dataA[0];

	if($tipo != "O"){
	 // Recebe a variável $oficial
	$oficial=$nroLinhas[$i] . "2";
	$oficial=$_POST[$oficial];
	}else{
		$oficial="";
		
	}
		
		// Recebe a variável $anotação
	$anotacao=$nroLinhas[$i] . "3";
	$anotacao=$_POST[$anotacao];
	
	
		

if($acao==="update"){
		$sql=" UPDATE TB_ANOTACOES SET ANOTACAO ='".$anotacao."' , OFICIAL='".$oficial."' , DATA ='".$data."' WHERE ID=".$id_anotacao;
		//print_r($sql); 
		mysqli_query($conn,$sql);
		//print_r($data);
	}
	
	if($acao==="insert"){
	 $sql=" INSERT INTO TB_ANOTACOES (ID_ALUNO, ANOTACAO, OFICIAL, DATA, TIPO) VALUES (".$id.",'".$anotacao."','".$oficial."','".$data."','".$tipo."')";
	 mysqli_query($conn,$sql);
	print_r($sql."<br />");
	//print_r($data);
	}
		//print_r("<br />".$acao.$data.$oficial.$anotacao.$tipo);

}

//Exclusão de anotação

$anotacoesEx=explode(";",$anotaçõesExcluidas);
foreach ($anotacoesEx  as $NROanotacaoEx ){
	 $sql=" DELETE FROM TB_ANOTACOES WHERE ID=".$NROanotacaoEx;
	  mysqli_query($conn,$sql);
}

//print_r($sql);

/*
$nome=$_POST['nome'];
$id=($_POST["id"]);
print_r($_POST);
//$foto = file_get_contents($_FILES['foto']['tmp_name']);
//print_r($_FILES['foto']["name"]);
$foto=$_FILES['foto']["name"];

if (isset($_POST['nome'])) {

 

     $query= "UPDATE TB_ALUNO set FOTO='Fotos/S/".$foto. "' where ID='".$id. "'" or
        die("O sistema não foi capaz de executar a query");
		
 //print_r($query);
   
    $sql =  mysqli_query($conn, $query);
	



	
	

}
	
*/	
mysqli_close($conn);

?>
