<?php require_once('header.php'); ?>


<div id="page-wrapper"><br>
    <h1 class="page-header"><i class="fa fa-font fa-fw"></i> Textos</h1>

	    <div class="row">
	        <div class="col-lg-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                 Complete todos os campos para completar o cadastro de suas informações  
					</div>

	                <div class="panel-body">
	                    <div class="row">
	                        <div class="col-lg-6">
	                        <form role="form" method="post">
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
			                        <label><i class="fa fa-home fa-fw"></i> Endereço da pizzaria :</label>
			                        <textarea class="form-control" rows="3" placeholder="Digite o endereço da pizzaria" name="endereco" id="endereco" required></textarea>
			                    </div>
			                    <div class="form-group">
			                        <label><i class="fa fa-calendar fa-fw"></i> Horário de funcionamento :</label>
			                        <textarea class="form-control" rows="5" placeholder="Insira aqui, os dias a horarios de funcionamento de sua pizzaria" name="horario" id="horario" required></textarea>
			                    </div>
			                    <br>
			                    <div class="form-group">
                                            <label>Coloque uma imagem para a página quem somos</label>
                                            <input type="file" required>
                                </div>
			                <br><br>
			                    <diV align="center">
			                        <button type="submit" class="btn btn-success" >Cadastrar informações</button>
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