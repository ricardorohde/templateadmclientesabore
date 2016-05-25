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
			                                <select class="form-control" required="required" id="busca">
			                                <option value="" style="display:none">Escolha a cor de seu site</option>
			                                <option value="" id="">Vermelho</option>
			                                <option value="" id="">Padrão</option>
			                                <option value="" id="">Rosa</option>
			                                <option value="" id="">Azul Escuro</option>
			                                <option value="" id="">Roxo</option>
			                                </select>
			                             </div><br>

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
                                            <label>Dados compartilhado?</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="bd_sim" name="bd">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="bd" value="bd_nao" checked>Não
                                            </label>
                                        </div>             

                                        <div class="form-group">
                                        <label> Exibir site, ao inicializar ? </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="site_sim" name="site">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="site" value="site_nao" checked>Não
                                            </label>
                                        </div>

                                        <div class="form-group">
                                        <label>Taxa de entrega fixa ?</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="tx_fixa1" name="taxa_fixa">Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="taxa_fixa" value="tx_fixa2" checked>Não
                                            </label>
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