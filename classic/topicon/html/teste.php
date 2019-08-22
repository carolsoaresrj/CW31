<?php   
require_once("../config/config.php");


$query2= "SELECT * FROM tb_especialidade";

   
 $sql =  mysqli_query($conn, $query2);
 
while ($alunos = mysqli_fetch_object($sql)) {	
	print_r("update tb_aluno set espec =".$alunos->ID." where especialidade='".utf8_encode($alunos->ESPECIALIDADE)."'; </br> ");
}
	
	
	mysqli_close($conn);
			   
			   
?>