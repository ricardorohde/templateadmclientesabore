<?php require_once('header.php'); ?>

<div id="page-wrapper">
    <div class="col-lg-12">
    <h1 class="page-header">Cadastrar Produtos
	    
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Complete todos os campos para completar o registro de sua pizza
                    </div>
                    <div class="form-group" style="width: 30%; float: center;"><br>
					    <select class="form-control">
					    <option>Selecione a categoria</option>
					    <option>Pizzas</option>
					    <option>Bebidas</option>
					    <option>Doces</option>
					    <option>Salgados</option>
					    </select>
				    </div>     
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="O que tem nessa pizza?"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Broto?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="broto" id="broto" value="option1" checked>Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="broto" id="broto" value="option2">Não
                                            </label>
                                        </div>
                                           	<div class="form-group">
                                            <label>Metade?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meia" id="meia" value="option1" checked>Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meia" id="meia" value="option2">Não
                                            </label>
                                        </div>
                                           	<div class="form-group">
                                            <label>Meia no broto?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meiabroto" id="meiabroto" value="option1" checked>Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meiabroto" id="meiabroto" value="option2">Não
                                            </label>
                                        </div>                                        
										<div class="form-group">
                                            <label>Coloque uma imagem dessa pizza</label>
                                            <input type="file">
                                        </div>
                                </div>

	                                <div class="col-lg-6">
	                                    
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor dessa pizza (EX :58.40)"> 
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Esta pizza terá desconto? Digite aqui (EX :05.40)">
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Qual o valor do broto dessa pizza? (EX : 30.40)">
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor meia (EX : 20.40)">
	                                        </div>
	                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor Meia broto (EX : 10.40)">
	                                        </div>
	                                    <br>
										<button type="submit" class="btn btn-default">Registrar pizza</button>
	                                    <button type="reset" class="btn btn-default">Limpar campos</button>
                               		</form>
                               		</div>
                        </div>
                    </div>
                </div>
            </div>
      	</div>
    </div>
</div>







<?php require_once('footer.php'); ?>