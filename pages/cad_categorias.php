<?php require_once('controller/categorias_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/cad_campos.js"></script>






<div id="page-wrapper"><br>
    <h1 class="page-header"><i class="fa fa-list-ul fa-fw"></i> Cadastro de categorias
	         <a href="categorias.php"><span class="pull-right text-muted small"><button class="btn btn-success">Exibir categorias</button></span></a>
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                          Preencha os campos abaixo
                   </div>

                    <?PHP if($error){ ?>
                    <div class="alert alert-danger">
                        	<?PHP echo $mensagem; ?>
    				        </div>
                    <?PHP } ?>

                    <?PHP if($success){ ?>
                      <div class="alert alert-success">
                          <?PHP echo $mensagem; ?>
                      </div>
                    <?PHP } ?>
                    
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="cad_categorias.php" method="post">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Categoria" name="nome" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva essa categoria" name="descricao"  required></textarea>
                                        </div>
                                        
	                                	    <div class="form-group">
	                                        <label> Principal ? </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="principal" id="principal" value="S" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="principal" id="principal" value="N" checked>Não
	                                        </label>
                                       	</div>

	                                      <div class="form-group">
	                                        <label>Borda recheada?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="borda" id="borda_categoria" value="S" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="borda" id="borda1_categoria" value="N" checked>Não
	                                        </label>
                                        </div>

  	                                   	<div class="form-group input-group" style="display: none" id="input_valor">
  	                                        <span class="input-group-addon">R$</span>
  	                                        <input type="text" class="form-control" name="valor_borda" value="00.00" >
  	                                    </div>

  	                                    
  	                                    
                                        <!--
                                        <div class="form-group">
                                              <label>Coloque uma imagem dessa categoria</label>
                                              <input type="file" name="img">
                                        </div>
                                        -->
                                        
                                        <div align="center">
  	                                       <br><br>
                                           <button type="submit" class="btn btn-success" name="btn_cadastrar_categoria" value="cadastrar">Cadastrar categoria</button>
  	                                       <button type="reset" class="btn btn-danger">Limpar campos</button>
  	                                    </div>

                                      
                               		</form>
                            </div>		
                        </div>
                    </div>
                </div>
            </div>
      	</div>
</div>







<?php require_once('footer.php'); ?>