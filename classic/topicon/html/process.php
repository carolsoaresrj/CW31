<?php

//inicio da função de sessao 

 session_start();
 
//incluindo arquivo de conexao com o banco 

/*require_once("../config/config.php");*/


$nip = $_POST['nip'];
$senha = $_POST['senha'];


//verificando se houve falha na execucao da variavel $conn e imprimindo
/*if(!$conn)
{ 
	echo "Falha ao conectar com o banco ";
	die("Falha na conexao: " . mysqli_connect_error());
}

else 
{ // Caso nao haja erro executa instrucao.

    // Query do banco
		$query = "SELECT * FROM TB_USUARIO WHERE NIP='$nip' && SENHA='$senha'";

    
	$resultado_usuario = mysqli_query($conn, $query);
        $result= mysqli_fetch_assoc($resultado_usuario);

//verificando se houve falha na variavel $result 
	if(!$result)
	{
		echo "Falha no Select ";
	}

	// Efetua o select caso nao haja erro
	    else 
		{ 
	    
				//crio a sessao
				$_SESSION['nip'] = $nip;
				$_SESSION['senha'] = $senha;

	
			   // define o limitador de cache para 'private' 

				session_cache_limiter('private');
				$cache_limiter = session_cache_limiter();

				/// define o prazo do cache em 30 minutos 
				session_cache_expire(1);
				$cache_expire = session_cache_expire();
 
	*/


					header('Location: /CW31/classic/topicon/html/telaInicial.php');
			
				 
/*}
		


}

//finalizando a conexao com o banco 
	

        mysqli_close($conn)
   
*/



?>