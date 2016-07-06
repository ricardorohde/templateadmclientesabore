<?php require_once('controller/usuarios_controller.php'); ?>
<?php require_once('header.php'); ?>


<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Perfil Usuario </h1><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2c3e50; color: white;">
                  Preencha os campos abaixo para concluir o cadastro
              </div>

              <div class="panel-body">
                <div class="row">

                    <div class="col-lg-6">

                        <div class="form-group">
                            <input class="form-control" placeholder="Nome completo"  disabled  required 
                            value="<?PHP echo $_SESSION['UsuarioCliente']['nome']; ?>"
                            >
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Login do funcionario" disabled  required 
                            value="<?PHP echo $_SESSION['UsuarioCliente']['login']; ?>"
                            >
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Email do funcionário" disabled  required 
                            value="<?PHP echo $_SESSION['UsuarioCliente']['email']; ?>"
                            >
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Funções desse usuário" disabled ><?PHP echo $_SESSION['UsuarioCliente']['funcao']; ?></textarea>
                        </div>



                        <div class="form-group">
                            <label><i class="fa fa-lock fa-fw"></i> Suas permissões</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="TEXTOS" disabled 
                                    <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="USUARIOS" disabled  <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="CATEGORIAS" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="PRODUTOS" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="BANNERS" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="FINANCEIRO" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="SMS" disabled  <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="CLIENTES" disabled  <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="HISTORICO" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
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
                                    <input type="checkbox" value="PEDANDAMENTO" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
                                        $permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
                                        if(!empty($permissaoClienteMarcado))
                                        {
                                            echo "checked";
                                        }
                                    }

                                    ?>> Andamento de pedidos
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="CREDITOS" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
                                        $permissaoClienteMarcado = strstr($permissao, 'CREDITOS');
                                        if(!empty($permissaoClienteMarcado))
                                        {
                                            echo "checked";
                                        }
                                    }

                                    ?>> Créditos
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="LOJVIRTUAL" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
                                        $permissaoClienteMarcado = strstr($permissao, 'LOJVIRTUAL');
                                        if(!empty($permissaoClienteMarcado))
                                        {
                                            echo "checked";
                                        }
                                    }

                                    ?>> Administrar loja virtual (Ligar e desligar)
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="PERFEMPRES" disabled  <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
                                        $permissaoClienteMarcado = strstr($permissao, 'PERFEMPRES');
                                        if(!empty($permissaoClienteMarcado))
                                        {
                                            echo "checked";
                                        }
                                    }

                                    ?>> Acessar e editar perfil de empresa
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="CONFIGSITE" disabled <?php 
                                    {
                                        $permissao = $_SESSION['UsuarioCliente']['permissao'];
                                        $permissaoClienteMarcado = strstr($permissao, 'CONFIGSITE');
                                        if(!empty($permissaoClienteMarcado))
                                        {
                                            echo "checked";
                                        }
                                    }

                                    ?>> Configurar site (Aparencia e SMS)
                                </label>
                            </div>     
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php require_once('footer.php'); ?>