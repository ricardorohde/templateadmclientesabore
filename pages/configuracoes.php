<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-gear fa-fw"></i> Configurações
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"style="background-color: #2c3e50; color: white;">
                	Configurações do Site
				    </div>

                    <div class="panel-body">
                        <div class="row">

                                <div class="col-lg-6">
                                    <form role="form">
                                         <div class="form-group">
                                            <select class="form-control">
                                            <option value="" style="display:none">Tipo de documento</option>
                                            <option value="">Cnpj</option>
                                            <option value="" >Cnpj</option>
                                            <option value="" >Sei lá outro</option>
                                            </select>
                                         </div> 
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Documento" required id="documento">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Razão social ( Nome empresa ) " required id="razao_social">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Titular" required id="nome_titular">
                                        </div>
                                       <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Km de entrega Máxima" required id="km_max">
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" placeholder="Valor Cobrado por KM (EX :58.40) " required> 
                                        </div>    

                                        <div class="form-group">
                                            <label>Sistema de SMS ?</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="sms_sim" name="sms">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sms" value="sms_nao" checked>Não
                                            </label>
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>Banco de dados compartilhado?</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="bd_sim" name="bd">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="bd" value="bd_nao" checked>Não
                                            </label>
                                        </div>             

                                        <div class="form-group">
                                        <label> Toda vez que abrir Admin, abrir site? </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="site_sim" name="site">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="site" value="site_nao" checked>Não
                                            </label>
                                        </div>

                                        <div class="form-group">
                                        <label> Escolha a cor de seu site : </label>
                                            <input type="color" required></input>
                                        </div>
                                        

	                                	
	                                    
                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success">Alterar</button>
	                                    <button type="reset" class="btn btn-danger">Limpar  </button>
	                                    </div>
										
                               		</form>
                        		</div>
	                    </div>
	                </div>
	            </div>
	      	</div>
		</div>







<?php require_once('footer.php'); ?>