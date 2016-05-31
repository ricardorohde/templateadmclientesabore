<?php require_once('controller/produtos_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/cad_campos.js"></script>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-edit fa-fw"></i> Cadastrar Produtos
	    	    <a href="produtos.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir Produtos</button></a>
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
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
                                    <form role="form" action="cad_produtos.php" method="post">
                                    	<div class="form-group">
										    <select class="form-control" required="required" name="categoria_id">
											<option value="" style="display:none">Escolha uma categoria</option>
											<option value="1" id="1">Pizza</option>
											<option value="2" id="2">Bebida</option>
											<option value="3" id="3">Doces</option>
										    </select>
									    </div> 


                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Produto" name="nome" required>
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva esse produto" name="descricao" required></textarea>
                                        </div>



                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor desse produto (EX :58.40) " name="valor" required> 
	                                    </div>



	                                    <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Este produto terá desconto? Digite aqui (EX :05.40)" name="desconto" required>
	                                    </div>



	                                	<div class="form-group">
	                                        <label>Destaque?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="destaque" id="destaque" value="S" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="destaque" id="destaque" value="N" checked>Não
	                                        </label>
                                       	</div>



	                                    <div class="form-group">
	                                        <label>Broto?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="mini" id="broto_produto" value="S" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="mini" id="broto1_produto" value="N" checked>Não
	                                        </label>
                                        </div>



	                                   	<div class="form-group input-group" style="display: none;" id="input_valor_broto_produto">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_mini" value="00.00">
	                                    </div>



	                                    <div class="form-group">
	                                        <label>Metade?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="metade" id="metade_produto" value="S" >Sim
	                                        </label>
	                                      	<label class="radio-inline">
	                                            <input type="radio" name="metade" id="metade1_produto" value="N" checked>Não
	                                        </label>
                                       	</div>



	                                    <div class="form-group input-group" id="input_valor_metade_produto" style="display: none;">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_metade" value="00.00">
	                                    </div>

	                                    <div class="form-group">
	                                        <label>Meia no broto?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="meiabroto" id="metade_broto_produto" value="S" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="meiabroto" id="metade1_broto_produto" value="N" checked>Não
	                                        </label>
                                       	</div> 
	                                    <div class="form-group input-group" id="input_valor_metade_broto_produto" style="display: none;">
	                                       <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" name="valor_mini_metade" value="00.00" >
	                                    </div>
	                                    <br>

	                                    <div class="form-group">
                                            <label>Coloque uma imagem desse produto</label>
                                            <input type="file" name="img">
                                       	</div>


                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success"  name="btn_cadastrar_produtos" value="cadastrar">Registrar produto</button>
	                                    <button type="reset" class="btn btn-danger">Limpar campos</button>
	                                    </div>
										
                               		</form>
                               		
                        </div>
                    </div>
                </div>
            </div>
      	</div>
</div>







<?php require_once('footer.php'); ?>