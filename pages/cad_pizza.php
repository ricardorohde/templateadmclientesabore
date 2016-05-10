<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header">Cadastrar Produtos
	    
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	Complete todos os campos para completar o registro de seu produto  
				    </div>

                    <div class="panel-body">
                        <div class="row">

                                <div class="col-lg-6">
			                        <div class="form-group" style="width: 100%; float: center;"><br>
									    <select class="form-control">
									    <option>Selecione a categoria</option>
									    <option>Pizzas</option>
									    <option>Bebidas</option>
									    <option>Doces</option>
									    <option>Salgados</option>
									    </select>
								    </div> 
                                    <form role="form">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Produto">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Descreva esse produto"></textarea>
                                        </div>
                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor desse produto (EX :58.40)"> 
	                                    </div>
	                                    <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Este produto terá desconto? Digite aqui (EX :05.40)">
	                                    </div>
	                                	<div class="form-group">
	                                        <label>Destaque?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="destaque" id="destaque" value="destaquesim" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                        <input type="radio" name="destaque" id="destaque" value="destaquenao" checked>Não
	                                        </label>
                                       	</div>
	                                    <div class="form-group">
	                                        <label>Broto?</label>
	                                        <label class="radio-inline">
	                                             <input type="radio" name="broto" id="broto" value="brotosim" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="broto" id="broto" value="brotonao" checked>Não
	                                        </label>
                                        </div>
	                                   	<div class="form-group input-group">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" placeholder="Qual o valor do broto dessa pizza? (EX : 30.40)">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Metade?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="meia" id="meia" value="meiasim" >Sim
	                                        </label>
	                                      	<label class="radio-inline">
	                                            <input type="radio" name="meia" id="meia" value="meianao" checked>Não
	                                        </label>
                                       	</div>
	                                    <div class="form-group input-group">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" placeholder="Valor meia (EX : 20.40)">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Meia no broto?</label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="meiabroto" id="meiabroto" value="meiabrotosim" >Sim
	                                        </label>
	                                        <label class="radio-inline">
	                                            <input type="radio" name="meiabroto" id="meiabroto" value="meiabrotonao" checked>Não
	                                        </label>
                                       	</div> 
	                                    <div class="form-group input-group">
	                                        <span class="input-group-addon">R$</span>
	                                        <input type="text" class="form-control" placeholder="Valor Meia broto (EX : 10.40)">
	                                    </div>
	                                    <br>
	                                    <div class="form-group">
                                            <label>Coloque uma imagem desse produto</label>
                                            <input type="file">
                                       	</div>
                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success">Registrar produto</button>
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