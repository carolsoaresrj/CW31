    <!-- Page -->
    <div class="page">
      <div class="page-content">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body">
            <form class="page-search-form" role="search">
              <div class="input-search input-search-dark">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Pesquisar Aluno" onkeyup="buscarAlunos(this.value)">
                <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
              </div>
            </form>
         
            <nav>
              <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
            </nav>
          </div>
		   <!-- Contacts Content -->
        <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">

          <!-- Actions 
          <div class="page-content-actions">
          
            <div class="btn-group">
         
          
            </div>
          </div>-->
			<div id="resultado">

          <!-- Contacts -->
       <!-- <table id="tblAlunos "class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
            <thead>
              <tr>
                <th class="pre-cell"></th>
                <th class="cell-30" scope="col">
                
                </th>
                <th class="cell-300" scope="col">Aluno(s)</th>
               
              </tr>
            </thead>
            <tbody>
             <tr style="height:60px" data-url="panel.tpl" data-toggle="slidePanel" >
                <td class="pre-cell"></td>
                <td class="cell-30">
                  
                </td>
                <td style="width:40%">
                  <a href="javascript:void(0)">
                    <img class="img-fluid fotoMini" src="Fotos/amanda_araujo.jpg" alt="...">
                  </a>
                  <b>AMANDA</b> PAIVA DE <b>ARAUJO</b>
                </td>
                <td style="vertical-align: inherit;" class="" >3º Pelotão 2ª cia</td>
                <td class="suf-cell"></td>
              </tr>
			  
              <tr data-url="principal2.php" data-toggle="slidePanel" onclick="location.href = 'fhd.php';"   >
			
            <td class="pre-cell"></td>
                <td class="cell-30">
                 
                </td>
                <td style="width:40%">
                    <img class="img-fluid fotoMini"  src="Fotos/amanda_machado.jpg" alt="...">
                  <b>AMANDA</b> ABNADER <b>MACHADO</b> SODRÉ
                <td class="" style="vertical-align: inherit;">3º Pelotão 2ª cia</td>
                </td>
                <td class="suf-cell"></td>
				 </tr>
            
            </tbody>
          </table> -->
		  
		  </div>

          <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
        </div>
        </div>
        <!-- End Panel -->
      </div>
    </div>