<?php

// Incluir aquivo de conexão
//require_once("../config/config.php");
 

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
                  <img id="apsFoto" src="Fotos/foto.jpg" style="width:100%" alt="...">
                </a>
              <form autocomplete="off" action="cadastrarAluno.php" method="post" enctype="multipart/form-data">  
        <div class="">
                  <div class="example">
                    <input style="font-size: 12px;" id="foto" name="foto" type="file" id="input-file-now"  onchange="exibeFoto()" data-plugin="dropify" data-default-file="" />
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
                          <input type="text" class="form-control" id="nip" name="nip"
                             autocomplete="off" style="width: 80%;" />
                        </div>
						    <div class="form-group col-md-4">
                        <label class="form-control-label">Sexo</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputMasculino" value="M" name="inputSexo" checked />
                            <label for="inputMascuino">Masculino</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputFemino"  value="F" name="inputSexo"  />
                            <label for="inputfeminino">Feminino</label>
                          </div>
                        </div>
                      </div>
					   <div class="form-group col-md-4">
                        <label class="form-control-label">Curso</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputCFO" name="inputCurso" value="CFO" checked />
                            <label for="inputCFO">CFO</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputSMV"  value="SMV" name="inputCurso"  />
                            <label for="inputSMV">SMV</label>
                          </div>
						   <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputSMO"  value="SMO" name="inputCurso"  />
                            <label for="inputSMO">SMO</label>
                          </div>
                        </div>
                      </div>
						</div>
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Nome Completo</label>
                          <input type="text" class="form-control" id="nome" name="nome"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Nome de Guerra</label>
                          <input type="text" class="form-control" id="nome_guerra" name="nome_guerra"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Data de Apresentação</label>
                          <input type="text" class="form-control" id="dt_aps" name="dt_aps"
                           autocomplete="off" />
                        </div>
                      </div>
					  <div class="row">
                        <div class="form-group col-md-4">
						<label class="form-control-label" for="inputBasicLastName">Posto</label>
                           <select class="form-control" name="posto">
						<option value="GM" >GM</option>
						<option value="1T">1T</option>
						<option value="2T">2T</option>
						</select>
                        </div>
					 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Quadro</label>
                           
                    <select class="form-control" name="quadro">
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
               
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Especialidade</label>
                          <select class="form-control" name="especialidade">
                      <option value="Informática">Informática</option>
						<option value="Biologia">Biologia</option>
						<option value="Direito">Direito</option>
						<option  value="Geologia" >Geologia</option>
                    </select>
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">CIA</label>
                          <input type="text" class="form-control" id="cia" name="cia"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Pelotão</label>
                          <input type="text" class="form-control" id="pelotao" name="pelotao"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Turma</label>
                          <input type="text" class="form-control" id="turma" name="turma"
                           autocomplete="off" />
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Cama</label>
                          <input type="text" class="form-control" id="cama" name="cama"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Armário</label>
                          <input type="text" class="form-control" id="armario" name="armario"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Alojamento</label>
                          <input type="text" class="form-control" id="alojamento" name="alojamento"
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
                          <input type="text" class="form-control" id="cpf" name="cpf"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">RG</label>
                          <input type="text" class="form-control" id="rg" name="rg"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Identidade Militar</label>
                          <input type="text" class="form-control" id="id_militar" name="id_militar"
                           autocomplete="off" />
                        </div>
                      </div>
					 
					    <div class="row">
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">CEP</label>
                          <input type="text" class="form-control" id="cep" name="cep"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Rua</label>
                          <input type="text" class="form-control" id="rua" name="rua"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-2">
                          <label class="form-control-label" for="inputBasicLastName">Número</label>
                          <input type="text" class="form-control" id="numero" name="numero"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-2">
                          <label class="form-control-label" for="inputBasicLastName">Complemento</label>
                          <input type="text" class="form-control" id="complemento" name="complemento"
                           autocomplete="off" />
                        </div>
                      </div>
					    <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicFirstName">Bairro</label>
                          <input type="text" class="form-control" id="bairro" name="bairro"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Cidade</label>
                          <input type="text" class="form-control" id="cidade" name="cidade"
                            autocomplete="off" />
                        </div>
						 <div class="form-group col-md-4">
                          <label class="form-control-label" for="inputBasicLastName">Estado</label>
                          <input type="text" class="form-control" id="estado" name="estado"
                           autocomplete="off" />
                        </div>
                      </div>
                     <center> <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
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
      
       