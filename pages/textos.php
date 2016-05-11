<?php require_once('header.php'); ?>
<script type="text/javascript" src="../js/validatequemsomos.js"></script>


<div id="page-wrapper"><br>
    <h1 class="page-header">Cadastro de informações</h1>
	    <div class="row">
	        <div class="col-lg-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                 Complete todos os campos para completar o cadastro de suas informações  
					</div>

	                <div class="panel-body">
	                    <div class="row">
	                        <div class="col-lg-6">
	                        <form role="form" method="post" name="formquemsomos" onSubmit="return enviardados();">
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
			                <br><br>
			                    <diV align="center">
			                        <button type="submit" class="btn btn-success" onclick="valida1()">Cadastrar informações</button>
		                            <button type="reset" class="btn btn-danger">Limpar campos</button>
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