<?php

// Incluir aquivo de conexão
//require_once("../config/config.php");
 

?>


    <!-- Page -->
    <div class="page">
     
	   <div class="row">
	   
	   
		<div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center">
              <div class="card-block">
                <a class="" href="javascript:void(0)">
                  <img src="Fotos/foto.jpg" alt="...">
                </a>
              <form autocomplete="off" action="cadastrarAluno.php" method="post" enctype="multipart/form-data">  
        <div class="">
                  <div class="example">
                    <input style="font-size: 12px;" name="foto" type="file" id="input-file-now" data-plugin="dropify" data-default-file="" />
					
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
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                 <center> <h3 class="example-title">Cadastro de Aluno</h3> </center>
                  <div class="example">
                   
					 <div class="row">
					<div class="form-group col-md-5">
                          <label class="form-control-label" for="inputBasicFirstName">NIP</label>
                          <input type="text" class="form-control" id="nip" name="nip"
                             autocomplete="off" style="width: 80%;" />
                        </div>
						    <div class="form-group col-md-4">
                        <label class="form-control-label">Sexo</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputMasculino" name="inputSexo" checked />
                            <label for="inputMascuino">Masculino</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputFemino" name="inputSexo"  />
                            <label for="inputfeminino">Feminino</label>
                          </div>
                        </div>
                      </div>
					   <div class="form-group col-md-3">
                        <label class="form-control-label">Curso</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputCFO" name="inputCurso" checked />
                            <label for="inputCFO">CFO</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputRM2" name="inputCurso"  />
                            <label for="inputRM2">RM2</label>
                          </div>
                        </div>
                      </div>
						</div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label class="form-control-label" for="inputBasicFirstName">Nome</label>
                          <input type="text" class="form-control" id="nome" name="nome"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Nome de Guerra</label>
                          <input type="text" class="form-control" id="nome_guerra" name="nome_guerra"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-3">
                          <label class="form-control-label" for="inputBasicLastName">Data de Apresentação</label>
                          <input type="text" class="form-control" id="nome_guerra" name="nome_guerra"
                           autocomplete="off" />
                        </div>
                      </div>
					  <div class="row">
                        <div class="form-group col-md-5">
						<label class="form-control-label" for="inputBasicLastName">Posto</label>
                           <select class="form-control">
						<option>GM</option>
						<option>1TEN</option>
						<option>2TEN</option>
						</select>
                        </div>
					 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Quadro</label>
                           
                    <select class="form-control">
                      <option>AA</option>
						<option>AFN</option>
						<option>CD</option>
						<option>CN</option>
						<option>EN</option>
						<option>MD</option>
						<option>QC-CA</option>
						<option>QC-FN</option>
						<option>QC-IM</option>
						<option>S</option>
						<option>T</option>
                    </select>
               
                        </div>
						 <div class="form-group col-md-3">
                          <label class="form-control-label" for="inputBasicLastName">Especialidade</label>
                         <select class="form-control">
                  
                    </select>
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-5">
                          <label class="form-control-label" for="inputBasicFirstName">CIA</label>
                          <input type="text" class="form-control" id="cia" name="cia"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Pelotão</label>
                          <input type="text" class="form-control" id="pelotao" name="pelotao"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-3">
                          <label class="form-control-label" for="inputBasicLastName">Turma</label>
                          <input type="text" class="form-control" id="turma" name="turma"
                           autocomplete="off" />
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-5">
                          <label class="form-control-label" for="inputBasicFirstName">Cama</label>
                          <input type="text" class="form-control" id="cama" name="cama"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Armário</label>
                          <input type="text" class="form-control" id="armario" name="armario"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-3">
                          <label class="form-control-label" for="inputBasicLastName">Alojamento</label>
                          <input type="text" class="form-control" id="alojamento" name="alojamento"
                           autocomplete="off" />
                        </div>
                      </div>
                     <center> <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </div></center>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>
			  </div>
            </div>
          </div>
		  </div>
		  </div>
            </div>
           </div>
      
       