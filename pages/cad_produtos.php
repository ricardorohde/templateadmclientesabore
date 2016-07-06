<?php require_once('controller/produtos_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/cad_campos.js"></script> 
<script>
    $(function(){
        $("#valor, #desconto, #valor_mini, #valor_metade, #valor_mini_metade").maskMoney({symbol:'R$ ', 
          showSymbol:true, thousands:'.', decimal:',', symbolStay: false});
      });

</script>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-edit fa-fw"></i> Cadastrar Produtos
	    	    <a href="produtos.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir Produtos</button></a>
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2c3e50; color: white;">
                          Cadastro de Produtos
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
                                    <form role="form" action="cad_produtos.php" method="post" enctype="multipart/form-data">
                                    	<div class="form-group">
                                        <label>Situação:</label>
                                          <select class="form-control" required="required" name="situacao_id">
                                            <option value="1" id="1" 
                                              <?PHP 
                                                  if($editar)
                                                  {
                                                    if($produtos['dados']['Produto']['situacao_id'] == 1) 
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
                                                   if($produtos['dados']['Produto']['situacao_id'] == 2) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Bloqueado</option>
                                            <option value="3" id="3"
                                            <?PHP 
                                                if($editar)
                                                {
                                                   if($produtos['dados']['Produto']['situacao_id'] == 3) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Cancelado</option>
                                            <option value="4" id="4"
                                            <?PHP 
                                                if($editar)
                                                {
                                                   if($produtos['dados']['Produto']['situacao_id'] == 4) 
                                                      echo "selected";

                                                }
                                              ?>
                                            >Aguardando Confirmação</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                        	<select class="form-control" required="required" name="categoria_id">
                                        		<option value="" style="display:none">Categoria deste produto</option>
                                        		<?PHP foreach($listaCat['dados'] as $listaCat){?>
                                        		<option value= <?PHP echo $listaCat['Categoria']['id']; ?>     
                                        			<?php if ($editar)
                                        			{
                                        				if ($produtos['dados']['Produto']['categoria_id'] == $listaCat['Categoria']['id'])
                                        				{
                                        					echo "selected";

                                        				} ?>>
                                        				<?PHP echo $listaCat['Categoria']['nome']; } ?> 
                                        			</option> 
                                        			<?PHP  echo $listaCat['Categoria']['nome'];}  ?>  
                                        		</select>
                                        	</div>
					              	
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Produto" name="nome" required  <?PHP if($editar){ ?>
                                                  value="<?PHP echo $produtos['dados']['Produto']['nome']; ?>"
                                                <?PHP } ?>>
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva esse produto" name="descricao" required><?PHP if($editar){?><?PHP echo $produtos['dados']['Produto']['descricao']; ?><?PHP } ?></textarea>
                                        </div>

                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" id="valor" placeholder="Valor desse produto (EX :58.40) " name="valor" required <?PHP if($editar){ ?>
                                                  value="<?PHP echo $produtos['dados']['Produto']['valor']; ?>"
                                                <?PHP } ?>>
	                                    </div>

	                                    <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Este produto terá desconto? Digite aqui (EX :05.40)" name="desconto" id="desconto" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $produtos['dados']['Produto']['desconto']; ?>"
                                                <?PHP } ?> >
                                                
	                                    </div>

	                                	<div class="form-group">
	                                        <label>Destaque?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="destaque" id="destaque" value="S" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                    if($produtos['dados']['Produto']['destaque'] == 'S') 
                                                      echo "checked"; 
                                                }                                                  
                                                ?>
                                               >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="destaque" id="destaque" value="N" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                    if($produtos['dados']['Produto']['destaque'] == 'N') 
                                                      echo "checked"; 
                                                }  
                                                else{
                                                  echo "checked";
                                                }                                                
                                                ?>
                                               >Não
	                                        </label>
                                       	</div>



	                                    <div class="form-group">
	                                        <label>Broto?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="mini" id="broto_produto" value="S"
                                               <?PHP 
                                                if($editar)
                                                { 
                                                    if($produtos['dados']['Produto']['mini'] == 'S') 
                                                      echo "checked"; 
                                                }                                                  
                                                ?>>Sim
                                               
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="mini" id="broto1_produto" value="N" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                if($produtos['dados']['Produto']['mini'] == 'N') 
                                                  echo "checked"; 
                                                }     
                                                else
                                                {
                                                  echo "checked";
                                                }                                             
                                                ?>>Não
	                                        </label>
                                        </div>



	                                   	<div class="form-group input-group" style="display: <?PHP echo $style; ?>" id="input_valor_broto_produto">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_mini" id="valor_mini" placeholder="Valor do broto" value =
                                                <?PHP if($editar){ ?>
                                                  <?PHP echo  $produtos["dados"]["Produto"]["valor_mini"]; ?>
                                                <?PHP } ?>>
	                                    </div>



	                                    <div class="form-group">
	                                        <label>Metade?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="metade" id="metade_produto" value="S" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                    if($produtos['dados']['Produto']['metade'] == 'S') 
                                                      echo "checked"; 
                                                }                                                  
                                                ?>
                                               >Sim
	                                        </label>
	                                      	<label class="radio-inline">
	                                            <input type="radio" name="metade" id="metade1_produto" value="N" 
                                              <?PHP 
                                                if($editar)
                                                { 
                                                    if($produtos['dados']['Produto']['metade'] == 'N') 
                                                      echo "checked"; 
                                                }              
                                                else {
                                                  echo "checked";
                                                }                                    
                                                ?>>Não
	                                        </label>
                                       	</div>



	                                    <div class="form-group input-group" id="input_valor_metade_produto"  style="display: <?PHP echo $style; ?>">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_metade" id="valor_metade" placeholder="Valor da meia" value =
                                                <?PHP if($editar){ ?>
                                                  <?PHP echo  $produtos["dados"]["Produto"]["valor_metade"]; ?>
                                                <?PHP } ?>>
	                                    </div>
                                    

	                                    <div class="form-group input-group" id="input_valor_metade_broto_produto" style="display: <?PHP echo $style; ?>">
	                                       <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_mini_metade" placeholder="Valor da meia no broto" id="valor_mini_metade" value =
                                                <?PHP if($editar){ ?>
                                                  <?PHP echo  $produtos["dados"]["Produto"]["valor_mini_metade"]; ?>
                                                <?PHP } ?>> 
	                                    </div>
	                                    <br>
	                                    <div class="form-group">
                                            <label>Coloque uma imagem desse produto</label>
                                            <input type="file" name="img">
                                       	</div>
                                        
                                        <?PHP if($editar){ ?>
                                          <img src="<?PHP echo $produtos['dados']['Produto']['img']; ?>" width="100" height="75">
                                        <?PHP } ?>

                                        <?PHP if($editar){ ?>
                                            <input type="hidden" name="editar" value="editar">
                                            <input type="hidden" name="id" 
                                              value="<?PHP echo $produtos['dados']['Produto']['id'];?>">
                                          <?PHP } ?>

                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success"  name="btn_cadastrar_produtos" value="cadastrar"><?PHP if($editar){ echo 'Editar'; ?><?PHP } else {echo 'Cadastrar';} ?></button>
	                                    <button type="reset" class="btn btn-danger">Limpar</button>
	                                    </div>
										
                               		</form>
                               		
                        </div>
                    </div>
                </div>
            </div>
      	</div>
</div>







<?php require_once('footer.php'); ?>