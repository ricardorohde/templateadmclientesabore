<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i>Perfil Empresa
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"style="background-color: #2c3e50; color: white;">
                	Editar os dados do Perfil da Empresa 
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
                                            <input class="form-control" placeholder="Email Responsavel" required id="email_responsavel">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Titular" required id="nome_titular">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Fantasia" required id="nome_fantasia">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Celular" required id="tel_celular">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Comercial" required id="tel_comer">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Alternativo"  id="tel_alter">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Fax" required id="fax">
                                        </div>
                                       <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Km de entrega Máxima" required id="km_max">
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" placeholder="Valor Cobrado por KM (EX :58.40) " required> 
                                        </div>    

                           

                                        

	                                	
	                                    
                                       	<div align="center">
	                                    	<br>
                                        <button type="submit" class="btn btn-success">Editar</button>
	                                    <button type="reset" class="btn btn-danger">Limpar</button>
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