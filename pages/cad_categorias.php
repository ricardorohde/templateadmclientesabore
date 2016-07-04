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
                    <div class="panel-heading" style="background-color: #2c3e50; color: white;">
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
                                        <label>Situação:</label>
                                          <select class="form-control" required="required" name="situacao_id">
                                            <option value="1" id="1" 
                                              <?PHP 
                                                  if($editar)
                                                  {
                                                    if($categoria['dados']['Categoria']['situacao_id'] == 1) 
                                                      echo "selected"; 
                                                  }
                                                  else
                                                  {
                                                    echo "selected";
                                                  }
                                                ?>
                                              >Ativo</option>
                                            <option value="2" id="2" 
                                              <?PHP 
                                                if($editar)
                                                {
                                                   if($categoria['dados']['Categoria']['situacao_id'] == 2) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Bloqueado</option>
                                            <option value="3" id="3"
                                            <?PHP 
                                                if($editar)
                                                {
                                                   if($categoria['dados']['Categoria']['situacao_id'] == 3) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Cancelado</option>
                                            <option value="4" id="4"
                                            <?PHP 
                                                if($editar)
                                                {
                                                   if($categoria['dados']['Categoria']['situacao_id'] == 4) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Aguardando Confirmação</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" 
                                              <?PHP if($editar){ ?>
                                                  value="<?PHP echo $categoria['dados']['Categoria']['nome']; ?>"
                                                <?PHP } ?> 
                                                placeholder="Nome Categoria" name="nome" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva essa categoria" name="descricao" required><?PHP if($editar){ ?><?PHP echo $categoria['dados']['Categoria']['descricao']; ?><?PHP } ?></textarea>
                                        </div>

	                                	    <div class="form-group">
	                                        <label> Principal ? </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="principal" id="principal" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                      if($categoria['dados']['Categoria']['principal'] == 'S') 
                                                        echo "checked"; 
                                                  }
                                                ?>
                                                value="S" >
                                              Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="principal" id="principal" value="N"
                                            <?PHP 
                                                if($editar)
                                                { 
                                                      if($categoria['dados']['Categoria']['principal'] == 'N') 
                                                        echo "checked"; 
                                                  }
                                                  else
                                                  {
                                                    echo "checked";
                                                  }
                                                ?>
                                          >Não
	                                        </label>
                                       	</div>

	                                      <div class="form-group">
	                                        <label>Borda recheada?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="borda" id="borda_categoria" value="S" 
                                               <?PHP 
                                                if($editar)
                                                { 
                                                    if($categoria['dados']['Categoria']['borda'] == 'S') 
                                                      echo "checked"; 
                                                }                                                  
                                                ?>
                                               >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="borda" id="borda1_categoria" value="N"
                                              <?PHP 
                                                if($editar)
                                                { 
                                                    if($categoria['dados']['Categoria']['borda'] != 'S') 
                                                      echo "checked"; 
                                                }
                                                else
                                                {
                                                  echo "checked";
                                                }
                                                ?>
                                              >Não
	                                        </label>
                                          <?PHP if($editar){ ?>
                                            <input type="hidden" name="editar" value="editar">
                                            <input type="hidden" name="id" 
                                              value="<?PHP echo $categoria['dados']['Categoria']['id'];?>">
                                          <?PHP } ?>
                                        </div>

  	                                   	<div class="form-group input-group" style="display: <?PHP echo $style; ?>" id="input_valor">
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