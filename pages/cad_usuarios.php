<?php require_once('controller/usuarios_controller.php'); ?>
<?php require_once('header.php'); ?>


<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Usuarios
	    <a href="usuarios.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir usuários </button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2c3e50; color: white;">
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
                                            <input class="form-control" placeholder="Nome completo" name="nome" required id="nome" <?PHP if($editar){ ?>
                                                  value="<?PHP echo $usuariocliente['dados']['UsuarioCliente']['nome']; ?>"
                                                <?PHP } ?>>
                                        </div>
                                       <div class="form-group">
                                            <input class="form-control" placeholder="Login do funcionario" name="login" required id="login" <?PHP if($editar){ ?>
                                                  value="<?PHP echo $usuariocliente['dados']['UsuarioCliente']['login']; ?>"
                                                <?PHP } ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Senha do usuario" name="senha" required id="senha" <?PHP if($editar){ ?>
                                                  value="<?PHP echo $usuariocliente['dados']['UsuarioCliente']['senha']; ?>"
                                                <?PHP } ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email do funcionário" name="email"  id="email" <?PHP if($editar){ ?>
                                                  value="<?PHP echo $usuariocliente['dados']['UsuarioCliente']['email']; ?>"
                                                <?PHP } ?>>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Funções desse usuário" name="funcao"><?PHP if($editar){ ?><?PHP echo $usuariocliente['dados']['UsuarioCliente']['funcao']; ?><?PHP }?></textarea>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label><i class="fa fa-lock fa-fw"></i> Permissões do usuário</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="TEXTOS" name="permissao[]"
                                                    <?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'TEXTOS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>> Textos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="USUARIOS" name="permissao[]" <?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'USUARIOS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>>Usuários
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="CATEGORIAS" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'CATEGORIAS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>>Categorias
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="PRODUTOS" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'PRODUTOS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>>Produtos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="BANNERS" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'BANNERS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>>Banners
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="FINANCEIRO" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'FINANCEIRO');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>> Financeiro
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="SMS" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'SMS');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>>Campanha SMS
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="CLIENTES" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'CLIENTES');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>> Clientes
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="HISTORICO" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'HISTORICO');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>> Histórico
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="PEDANDAMENTO" name="permissao[]"<?php if ($editar)
                                                    {
                                                        $permissao = $usuariocliente['dados']['UsuarioCliente']['permissao'];
                                                        $permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
                                                        if(!empty($permissaoClienteMarcado))
                                                        {
                                                            echo "checked";
                                                        }
                                                    }

                                                    ?>> Andamento de pedidos
                                                </label>
                                            </div>
                                        </div>
	                                    
                                        <?PHP if($editar){ ?>
                                            <input type="hidden" name="editar" value="editar">
                                            <input type="hidden" name="id" 
                                              value="<?PHP echo $usuariocliente['dados']['UsuarioCliente']['id'];?>">
                                          <?PHP } ?>
                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success" name="btn_cadastrar_usuarios" value="cadastrar">
                                        <?PHP if($editar){ ?>
                                          <?PHP echo 'Editar'; ?>
                                        <?PHP } else { echo 'Registrar';} ?></button>
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