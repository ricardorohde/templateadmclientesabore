<?php require_once('controller/usuarios_controller.php'); ?>
<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Usuarios
	    <a href="usuarios.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir usuários </button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          Preencha os campos abaixo para concluir o cadastro
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
                                    <form role="form" action="cad_usuarios.php" method="post">
                                    	
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome completo" name="nome" required id="nome">
                                        </div>
                                       <div class="form-group">
                                            <input class="form-control" placeholder="Login do funcionario" name="login" required id="login">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Senha do usuario" name="senha" required id="senha">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email do funcionário" name="email" required id="email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Funções desse usuário" name="funcao" ></textarea>
                                        </div>
	                                	<div class="form-group">
                                            <label><i class="fa fa-lock fa-fw"></i> Permissões do usuário</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_textos" name="permissao"> Cadastrar Textos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_usuarios" name="permissao"> Cadastrar Usuários
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_categorias" name="permissao"> Cadastrar Categorias
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_produtos" name="permissao"> Cadastrar Produtos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_banners" name="permissao"> Cadastrar banners
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="financeiro" name="permissao"> Acesso a relatórios financeiros
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="cadastrar_sms" name="permissao"> Acesso a sistema de sms
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="acesso_cliente" name="permissao"> Acesso a dados de cliente
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="historico_compra" name="permissao"> Acesso a histórico de compras
                                                </label>
                                            </div>
                                        </div>
	                                    
                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success" name="btn_cadastrar_usuarios" value="cadastrar">Registrar</button>
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