<?php require_once('controller/textos_controller.php'); ?>
<?php require_once('header.php'); ?>


<div id="page-wrapper"><br>
    <h1 class="page-header"><i class="fa fa-font fa-fw"></i> Textos</h1>

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
	                        <form role="form" method="post" action="textos.php" method="post">
	                        	<div class="form-group">
                                        <label>Situação:</label>
                                          <select class="form-control" required="required" name="situacao_id">
                                            <option value="1" id="1" selected>Ativo</option>
                                            <option value="2" id="2">Bloqueado</option>
                                            <option value="3" id="3">Cancelado</option>
                                            <option value="4" id="4">Aguardando Confirmação</option>
                                          </select>
                                        </div>
			                    <div class="form-group">
		                            <label><i class="fa fa-globe fa-fw"></i> CEP</label>
		                            <input class="form-control" placeholder="Digite aqui o CEP" name="cep" id="cep"required >
		                        </div>
			                    <div class="form-group">
		                            <label><i class="fa fa-flag-o fa-fw"></i> Estado</label>
		                            <input class="form-control" placeholder="Digite aqui o Estado" name="estado" id="estado"required >
		                        </div>
			                    <div class="form-group">
		                            <label><i class="fa fa-home fa-fw"></i> Cidade</label>
		                            <input class="form-control" placeholder="Digite aqui a Cidade" name="cidade" id="cidade"required >
		                        </div>
			                    <div class="form-group">
		                            <label><i class="fa fa-thumb-tack fa-fw"></i> Bairro</label>
		                            <input class="form-control" placeholder="Digite aqui o Bairro" name="bairro" id="bairro"required >
		                        </div>
		                        <div class="form-group">
		                            <label><i class="fa fa-thumb-tack fa-fw"></i> Endereço</label>
		                            <input class="form-control" placeholder="Digite aqui o Endereço (Rua)" name="endereco" id="endereco" required>
		                        </div>
		                        <div class="form-group">
		                            <label><i class="fa fa-slack fa-fw"></i> Número</label>
		                            <input class="form-control" placeholder="Digite aqui o Número" name="numero" id="numero" type="number" required >
		                        </div>
			                    <div class="form-group">
			                    	<label for="nome"><i class="fa fa-question-circle fa-fw"></i> Quem somos</label>
			                   		<textarea class="form-control" rows="3" placeholder="Digite aqui..." name="quem_somos" required></textarea>
			                    </div>
		                        <div class="form-group">
		                            <label><i class="fa fa-facebook-square fa-fw"></i> Link Facebook</label>
		                            <input class="form-control" placeholder="Digite aqui o Facebook" name="facebook" >
		                        </div>
	                            <div class="form-group">
		                            <label><i class="fa fa-twitter-square fa-fw"></i> Link twitter</label>
		                            <input class="form-control" placeholder="Digite aqui o Twitter" name="twitter" id="twitter" >
		                        </div>
		                        <div class="form-group">
		                            <label><i class="fa fa-camera fa-fw"></i> Link Instagram</label>
		                            <input class="form-control" placeholder="Digite aqui o Instagram" name="instagram" id="instagram" >
		                        </div>
		                        <div class="form-group">
			                        <label><i class="fa fa-automobile fa-fw"></i> Delivery</label>
			                        <textarea class="form-control" rows="3" placeholder="Digite sobre o seu delivery" name="delivery" id="delivery" required></textarea>
			                    </div>
			                    <div class="form-group">
		                            <label><i class="fa fa-calendar fa-fw"></i> Horário Funcionamento 1</label>
		                            <input class="form-control" placeholder="Digite aqui o horário de funcionamento" name="funcionamento" id="funcionamento" required>
		                        </div>
		                        <div class="form-group">
		                            <label><i class="fa fa-calendar fa-fw"></i> Horário Funcionamento 2</label>
		                            <input class="form-control" placeholder="Digite aqui outro horário de funcionamento" name="funcionamento1" id="funcionamento1" required >
		                        </div>
			                    <br>
			                    <div class="form-group">
                                            <label>Coloque uma imagem para a página quem somos</label>
                                            <input type="file" required name="img">
                                </div>
			                <br><br>
			                    <diV align="center">
			                        <button type="submit" class="btn btn-success" name="btn_cadastrar_textos" value="cadastrar" >Cadastrar informações</button>
		                            <button type="reset" class="btn btn-danger">Limpar campos acima. </button>
		                        </diV>
	                        </form>
	                   		</div>
	                   	</div>
	               	</div>
	           </div>
	      </div>
	</div>
</div>









<?php require_once('footer.php'); ?>