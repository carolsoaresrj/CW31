<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
// Incluir aquivo de conexão
require_once("../config/config.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];

$query= "select ID, NOME, NOME_GUERRA, FOTO_IMG FROM TB_ALUNO WHERE NOME LIKE '%".$valor."%'";
 
// Procura alunos no banco relacionados ao valor
$sql =  mysqli_query($conn, $query);

// Exibe todos os valores encontrados
if($valor<>""){
echo("  <table class=\"table is-indent\" data-plugin=\"animateList\" data-animate=\"fade\" data-child=\"tr\"
            data-selectable=\"selectable\">
            <thead>
              <tr>
                <th class=\"pre-cell\"></th>
                <!--<th class=\"cell-30\" scope=\"col\">
                
                </th> -->
             <th class=\"cell-300\" style=\"text-align: center;\" scope=\"col\">Aluno(s)</th>     
				<th>  
							<a style=\"
									float: right; \"
                                  href=\"\"> <img src=\"images/Excel-icon.png\" alt=\"Excel\" width=32 height=32>
								  
							</a>
                              
							<a style=\"
									float: right;padding-right:20px;\"
                                  href=\"\"> <img src=\"images/Adobe-PDF-Document-icon.png\" alt=\"Excel\" width=32 height=32>
								  
							</a>
                              </th>
              </tr>
            </thead>
            <tbody>");
			
		
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
				//print_r($alunos);
		  
				  echo (" <tr style=\"height:60px\" data-url=\"panel.tpl\" data-toggle=\"slidePanel\" >
                 <!-- <td class=\"pre-cell\"></td> -->
                 <td class=\"cell-30\">
                  
                </td>
                  <td style=\"width:40%\ colspan=\"3\">
                   <a href=\"fhd.php?id=$alunos->ID\" > ");
				   
				   
				   if($alunos->FOTO_IMG!=""){
				 echo ("  <img class=\"img-fluid fotoMini\"  src=\"data:image/png;base64,".base64_encode($alunos->FOTO_IMG)."\">"); }
                    echo ("</a>
                    </a>
                    <!--<b>AMANDA</b> PAIVA DE <b>ARAUJO</b>-->"
					 . $alunos->NOME .
                "  </td>
                <!-- <td style=\"vertical-align: inherit;\" class=\"\" >3º Pelotão 2ª cia</td>-->
                  <td class=\"suf-cell\" style=\"vertical-align: middle;\">  <a href=\"cadastroAluno.php?id=$alunos->ID\"><i class=\"icon wb-edit\" aria-hidden=\"true\" style=\"    padding-left: 50%; font-size: 24px; vertical-align: middle;\" ></i></a></td>
               </tr>
			   ");
			}
	 
 
	   
		};}
		
			

      echo("</tbody>
          </table>");
 
// Acentuação
//header("Content-Type: text/html; charset=ISO-8859-1",true);
?>