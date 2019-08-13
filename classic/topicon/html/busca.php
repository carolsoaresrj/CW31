<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
// Incluir aquivo de conexão
require_once("../config/config.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];

$query= "select ID, NOME, NOME_GUERRA, FOTO FROM TB_ALUNO WHERE NOME LIKE '%".$valor."%'";
 
// Procura alunos no banco relacionados ao valor
$sql =  mysqli_query($conn, $query);

// Exibe todos os valores encontrados

echo("  <table class=\"table is-indent\" data-plugin=\"animateList\" data-animate=\"fade\" data-child=\"tr\"
            data-selectable=\"selectable\">
            <thead>
              <tr>
                <th class=\"pre-cell\"></th>
                <th class=\"cell-30\" scope=\"col\">
                
                </th>
                <th class=\"cell-300\" scope=\"col\">Aluno(s)</th>
               
              </tr>
            </thead>
            <tbody>");
			
		if($valor<>""){
while ($alunos = mysqli_fetch_object($sql)) {
	 //print_r($alunos->FOTO);
//	echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$alunos->ID."')\">" . $alunos->NOME . "</a><br />";
       
	   
	 $nomeArray = explode(" ",$alunos->NOME);
      $verificacao=0;
	  	 	

	 foreach ( $nomeArray as $valor_do_array ){
// print_r(strpos($valor_do_array,"ana"));

 //print_r($valor_do_array);
	//	  print_r("   ");
		//  print_r(strpos($valor_do_array,strtoupper($valor)));

//ADRIANA DE JESUS LIMA
	
	
	
	if(strpos($valor_do_array,strtoupper($valor))===0){
		
		$verificacao=1;
      
	}

            }
			if($verificacao==1){
				
		  
				  echo (" <tr style=\"height:60px\" data-url=\"panel.tpl\" data-toggle=\"slidePanel\" >
                 <!-- <td class=\"pre-cell\"></td> -->
                 <td class=\"cell-30\">
                  
                </td>
                  <td style=\"width:40%\">
                   <a href=\"fhd.php?id=$alunos->ID\" > 
                 <img class=\"img-fluid fotoMini\" src=\"$alunos->FOTO\" alt=\"...\">
                    </a>
                    <!--<b>AMANDA</b> PAIVA DE <b>ARAUJO</b>-->"
					 . $alunos->NOME .
                "  </td>
                <!-- <td style=\"vertical-align: inherit;\" class=\"\" >3º Pelotão 2ª cia</td>-->
                  <td class=\"suf-cell\"></td>
               </tr>
			   ");
			}
	 
 
	   
		};}
		
			

      echo("</tbody>
          </table>");
 
// Acentuação
//header("Content-Type: text/html; charset=ISO-8859-1",true);
?>