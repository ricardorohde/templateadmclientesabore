<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"><i class="fa fa-list-ul fa-fw"></i> Cadastro de categorias
	         <a href="categorias.php"><span class="pull-right text-muted small"><button class="btn btn-success">Exibir categorias</button></span></a>
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	Complete todos os campos para completar o cadastro desta categoria  
				        </div>

                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Categoria" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva essa categoria" required></textarea>
                                        </div>
                                        
	                                	    <div class="form-group">
	                                        <label> Principal ? </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="principal" id="principal" value="principalsim" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="principal" id="principal" value="principalnao" checked>Não
	                                        </label>
                                       	</div>

	                                      <div class="form-group">
	                                        <label>Borda recheada?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="borda" id="borda" value="bordasim" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="borda" id="borda" value="bordanao" checked>Não
	                                        </label>
                                        </div>

  	                                   	<div class="form-group input-group">
  	                                        <span class="input-group-addon">R$</span>
  	                                        <input type="text" class="form-control" placeholder="Qual o valor da borda recheada? (EX : 30.40)">
  	                                    </div>

  	                                    <br>
  	                                    
                                        <div class="form-group">
                                              <label>Coloque uma imagem dessa categoria</label>
                                              <input type="file">
                                        </div>
                                        
                                        <div align="center">
  	                                       <br><br>
                                           <button type="submit" class="btn btn-success">Cadastrar categoria</button>
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