<?php
// Incluir aquivo de conex�o
require_once("../config/config.php");
 
// Recebe a id enviada no m�todo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysqli_query($conn,"SELECT * FROM TB_ALUNO WHERE ID = '".$id."'");
 
// Pega os dados e armazena em uma vari�vel
$aluno = mysqli_fetch_object($sql);
 
// Exibe o conte�do da notica
//echo $aluno->NOME;
 
 
// Acentua��o
header("Content-Type: text/html; charset=ISO-8859-1",true);


require_once 'header.php';

?>
    <!-- Page -->
    <div class="page">
	<form action="atualizarAluno.php" method="post" enctype="multipart/form-data">
      <div class="page-content container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center">
              <div class="card-block">
              
			  
			  <div class="example-wrap">
                  <div class="example">
                    <input name="foto" type="file" id="input-file-now" data-plugin="dropify" data-default-file=""
                    />
					
                  </div>
                </div>
               <!-- <h4 class="profile-user" id="nome" value="<?php echo $aluno->NOME; ?>"> </h4>-->
			   
      
         
              </div>
          
            </div>
            <!-- End Page Widget -->
          </div>

          <div class="col-lg-9">
            <!-- Panel -->
            <div class="panel">
			
              <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
               </div>
			 <input name="nome" value="<?php echo $aluno->NOME; $_POST['ID']= $id;?>" type="text" name="nome" class="form-control">
			 <input type="hidden" name="id" value="<?php echo $id; ?>">
			 <button type="submit" class="btn btn-success">Salvar</button>
            <!-- End Panel -->
		
          </div>
        </div>
      </div>
    </div>
		</form>
		</div>
    <!-- End Page -->


   
<?php

require_once 'footer.php';

?>