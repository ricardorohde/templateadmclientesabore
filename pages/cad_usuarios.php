<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Usuarios
	    <a href="usuarios.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir usuários </button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                	Complete todos os campos para completar o registro de seu funcionário  
				    </div>

                    <div class="panel-body">
                        <div class="row">

                                <div class="col-lg-6">
                                    <form role="form">
                                    	
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome completo" required id="nome">
                                        </div>
                                       <div class="form-group">
                                            <input class="form-control" placeholder="Login do funcionario" required id="login">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Senha do usuario" required id="senha">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email do funcionário" required id="email">
                                        </div>

	                                	<div class="form-group">
                                            <label><i class="fa fa-lock fa-fw"></i> Permissões do usuário</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Cadastrar Textos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Cadastrar Usuários
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Cadastrar Categorias
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Cadastrar Produtos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Cadastrar banners
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Acesso a relatórios financeiros
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Acesso a sistema de sms
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Acesso a dados de cliente
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Acesso a histórico de compras
                                                </label>
                                            </div>
                                        </div>
	                                    
                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success">Registrar</button>
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