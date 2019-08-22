<?php

// Inclui aquivo de conexão
require_once("../config/config.php");

if($_GET){
$id=$_GET['id'];


$_SESSION['id_aluno'] = $id;

// Se for um cadastro novo recebe do parâmetro 'id' o valor 0
if($id==0){
	
$foto="Fotos/foto.jpg";
$foto_img="<img id='apsFoto' src='". $foto."'  alt='...'>";
$nip="";
$sexo="";
$curso="";
$nome="";
$nome_guerra="";
$dt_aps="";

$posto ="";
$quadro="";
$especialidade="";

$cia ="";
$pelotao ="";
$turma =""; 
$cama ="";
$armario="";
$alojamento ="";

$cpf=""; 
$rg="";
$id_militar="";
$cep="";
$rua="";
$numero="";
$complemento="";
$bairro="";
$cidade="";
$estado="";

$ano_curso="";
$checkCursoCFO="";	 
$checkCursoSMV="";	
$checkCursoSMO="";	
$checkSexoF="";	
$checkSexoM="";
$habilita="";
$submit=" <button type='submit' class=\"btn btn-primary\">Cadastrar</button> ";
$selectQuadro="";
$selectEspecialidade="";
$selectPosto="";
$selectEspecialidadeL="";

}else if($id!=0){
$query="SELECT * FROM TB_ALUNO WHERE ID=".$id; 
$sql =  mysqli_query($conn, $query);

$aluno = mysqli_fetch_object($sql);

// Dados cadastrais do Aluno 

$foto= $aluno->FOTO_IMG;
$foto_img='<img  id="apsFoto" src="data:image/png;base64,'.base64_encode($foto).'">'; 
$nome=utf8_encode($aluno->NOME);
$nome_guerra=utf8_encode($aluno-> NOME_GUERRA);
$nip = $aluno->NIP;
$posto = utf8_encode($aluno->POSTO);
$quadro = utf8_encode($aluno->QUADRO);
$sexo=$aluno->SEXO;
$curso=utf8_encode($aluno->CURSO);
if($aluno->APS!=""){$dt_aps=date('d/m/Y',strtotime($aluno->APS)); }

$especialidade= utf8_encode($aluno->ESPECIALIDADE);

$cia =utf8_encode($aluno->CIA);
$pelotao =utf8_encode($aluno->PELOTAO);
$turma =utf8_encode($aluno->TURMA);
$cama =utf8_encode($aluno->CAMA);
$armario=utf8_encode($aluno->ARMARIO);
$alojamento =utf8_encode($aluno->ALOJAMENTO);

$cpf=$aluno->CPF;
$rg=$aluno->RG;
$id_militar=$aluno->ID_MILITAR;
$cep=$aluno->CEP;
$rua=utf8_encode($aluno->RUA);
$numero=utf8_encode($aluno->NUMERO);
$complemento=utf8_encode($aluno->COMPLEMENTO);
$bairro=utf8_encode($aluno->BAIRRO);
$cidade=utf8_encode($aluno->CIDADE);
$estado=utf8_encode($aluno->ESTADO);

$ano_curso=$aluno-> ANO_CURSO;	
$habilita="disabled";
$submit="<input  id='btnEditar' onclick='editarAluno();' class='btn btn-primary' type='button' value='Editar'></input>";


// Seleciona o Quadro no comboBox///////////////////////////////////////
$selectQuadro="<script>


( function (){ 
                      var selectQ=document.getElementById(\"quadro\");
					 
					for(var i = 0;i<selectQ.options.length ;i++){
						
					if(selectQ.options[i].value==='".$quadro."'){
							
                    selectQ.options[i].selected=true;
}
}
})();
               </script>	";
			   

// Seleciona a Especialidade no comboBox///////////////////////
$selectEspecialidade="<script>


( function (){ 
                      var selectE=document.getElementById(\"especialidade\");
					 
					for(var i = 0;i<selectE.options.length ;i++){
						
					if(selectE.options[i].value==='".$especialidade."'){
							
                    selectE.options[i].selected=true;
}
}
})();
               </script>	";	


// Seleciona a Posto no comboBox/////////////////////////
$selectPosto="<script>


( function (){ 
                      var selectP=document.getElementById(\"posto\");
					 
					for(var i = 0;i<selectP.options.length ;i++){
						
					if(selectP.options[i].value==='".$posto."'){
							
                    selectP.options[i].selected=true;
}
}
})();
               </script>	";				   
					
						



// Seleciona o sexo no radio	
$checkSexoF="";	
$checkSexoM="";
if($sexo=='F'){
	
$checkSexoF='checked';	

}else{
$checkSexoM='checked';	
	
}
////////////////////////////////////

// Seleciona o curso no radio
$checkCursoCFO="";	 
$checkCursoSMV="";	
$checkCursoSMO="";	
if($curso=="CFO"){	
$checkCursoCFO='checked';	
}
if($curso=="SMV"){
$checkCursoSMV='checked';	
}
if($curso=="SMO"){
$checkCursoSMO='checked';	
}

////////////////////////////////////
// Seleciona a especialidade no comboBox///////



$selectEspecialidadeL="<script>


( function (){ 
                      var selectP=document.getElementById(\"posto\");
					 
					for(var i = 0;i<selectP.options.length ;i++){
						
					if(selectP.options[i].value==='".$posto."'){
							
                    selectP.options[i].selected=true;
}
}
})();
               </script>	";				   
					
						

}
// alimenta o comboBox de especialidade

$query="SELECT * FROM TB_ESPECIALIDADE"; 
$sql =  mysqli_query($conn, $query);
$selectEsp="";

while ($especialidades = mysqli_fetch_object($sql)) {
	$selectEsp.= "<option value='".$especialidades->ID."'>".utf8_encode($especialidades->ESPECIALIDADE)."</option>  </br>";
}

////////////////////////////////////////

}
 



	mysqli_close($conn);
	
	
?>


    <!-- Page -->
    <div class="page">
     <div class="page-content container-fluid">
	   <div class="row">
	   
	   
		<div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center">
              <div class="card-block">
                <a class="" href="javascript:void(0)">
                  <?php echo $foto_img ?>
				 
                </a>
            <form autocomplete="off" id="form" action="cadastrarAluno.php" method="post" enctype="multipart/form-data">  
        <div class="">
                  <div class="example">
                    <input style="font-size: 12px;" id="foto" name="foto" type="file" id="input-file-now"  onchange="exibeFoto()" data-plugin="dropify" data-default-file="" <?php echo $habilita?>/>
                    <input type="hidden" id="hidden" name="caminhoFoto" />
                  </div>
                </div>
         
              </div>
          
            </div>
            <!-- End Page Widget -->
          </div>
		 <div class="col-lg-8">
        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-12">
                <!-- Dados Funcionais -->
                <div class="example-wrap">
                  <h3 class="example-title">Dados Funcionais</h3> 
                  <div class="example">
                   
					 <div class="row">
					<div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">NIP</label>
                          <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nip?>" <?php echo $habilita?>
                             autocomplete="off" style="width: 80%;" />
                        </div>
						    <div class="form-group col-md-4">
                        <label class="form-control-label">Sexo</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputMasculino" value="M" name="inputSexo" <?php echo $checkSexoM ?> <?php echo $habilita?>/>
                            <label for="inputMascuino">Masculino</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputFeminino"  value="F" name="inputSexo"  <?php echo $checkSexoF ?> <?php echo $habilita?>/>
                            <label for="inputfeminino">Feminino</label>
                          </div>
                        </div>
                      </div>
					   <div class="form-group col-md-4">
                        <label class="form-control-label">Curso</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputCFO" name="inputCurso" value="CFO" <?php echo $checkCursoCFO ?> <?php echo $habilita?>/>
                            <label for="inputCFO">CFO</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputSMV"  value="SMV" name="inputCurso"  <?php echo $checkCursoSMV ?> <?php echo $habilita?>/>
                            <label for="inputSMV">SMV</label>
                          </div>
						   <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputSMO"  value="SMO" name="inputCurso"  <?php echo $checkCursoSMO ?> <?php echo $habilita?>/>
                            <label for="inputSMO">SMO</label>
                          </div>
                        </div>
                      </div>
						</div>
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Nome Completo</label>
                          <input type="text" class="form-control" id="nome" name="nome" <?php echo $habilita?>
                            autocomplete="off" value="<?php echo $nome ?>" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Nome de Guerra</label>
                          <input type="text" class="form-control" value="<?php echo $nome_guerra ?>" id="nome_guerra" name="nome_guerra" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Data de Apresentação</label>
                          <input type="text" class="form-control" for="" id="dt_aps" value="<?php echo $dt_aps ?>" onkeyup="makeDate(this)" name="dt_aps" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
					  <div class="row">
                        <div class="form-group col-md-4" >
						<label class="form-control-label" for="inputBasicLastName">Posto</label>
                           <select class="form-control" name="posto"  id="posto"  <?php echo $habilita?>>
						<option value="GM" >GM</option>
						<option value="1T">1T</option>
						<option value="2T">2T</option>
						</select>
							<?php echo $selectPosto ?>
                        </div>
					 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Quadro</label>
                           
                    <select class="form-control" name="quadro" id="quadro" <?php echo $habilita?> value="T">
                      <option value="AA">AA</option>
						<option value="AFN">AFN</option>
						<option value="CD">CD</option>
						<option  value="CN" >CN</option>
						<option value="EN">EN</option>
						<option value="MD">MD</option>
						<option value="QC-CA">QC-CA</option>
						<option value="QC-FN">QC-FN</option>
						<option value="QC-IM" >QC-IM</option>
						<option value="S" >S</option>
						<option value="T">T</option>
                    </select>
					<?php echo $selectQuadro ?>
               
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Especialidade</label>
                          <select class="form-control" id="especialidade" name="especialidade" <?php echo $habilita?>>
                     <?php echo $selectEsp ?>
                    </select>
						<?php echo $selectEspecialidadeL ?>
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">CIA</label>
                          <input type="text" class="form-control" value="<?php echo $cia ?>" id="cia" name="cia" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Pelotão</label>
                          <input type="text" class="form-control" id="pelotao" value="<?php echo $pelotao ?>" name="pelotao" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Turma</label>
                          <input type="text" class="form-control" id="turma" value="<?php echo $turma ?>" name="turma" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Cama</label>
                          <input type="text" class="form-control" id="cama" name="cama" value="<?php echo $cama ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Armário</label>
                          <input type="text" class="form-control" id="armario" name="armario" value="<?php echo $armario ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Alojamento</label>
                          <input type="text" class="form-control" id="alojamento" name="alojamento" value="<?php echo $alojamento ?>" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
                   
                  
                  </div>
                </div>
                <!-- End Dados Funcionais -->
			    <!--  Dados Pessoais -->
				  <div class="example-wrap">
                  <h3 class="example-title">Dados Pessoais</h3> 
                  <div class="example">
                   
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">CPF</label>
                          <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">RG</label>
                          <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $rg ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Identidade Militar</label>
                          <input type="text" class="form-control" id="id_militar" name="id_militar" value="<?php echo $id_militar ?>" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
					 
					    <div class="row">
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">CEP</label>
                          <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Rua</label>
                          <input type="text" class="form-control" id="rua" name="rua" value="<?php echo $rua ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-2">
                          <label class="form-control-label" for="inputBasicLastName">Número</label>
                          <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $numero ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-2">
                          <label class="form-control-label" for="inputBasicLastName">Complemento</label>
                          <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $complemento ?>" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Bairro</label>
                          <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Cidade</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade ?>" <?php echo $habilita?>
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Estado</label>
                          <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $estado ?>" <?php echo $habilita?>
                           autocomplete="off" />
                        </div>
                      </div>
                     <center> <div class="form-group">
                       <?php  echo $submit ?>


                      </div></center>
                    </form> 
                  </div>
                </div>
				    <!-- End Dados Pessoais -->
              </div>
			  </div>
            </div>
          </div>
		  </div>
		  </div>
		  </div>
            </div>
           </div>
		  
		   
      
       