<?php 
$permissao = $_SESSION['UsuarioCliente']['permissao'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>    

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="../js/jquery.maskMoney.js"></script>
    <script type="text/javascript">
    function JsDeslogar(deslogar)
    {           
        document.formDeslogar.action = "http://localhost/templateadmclientesabore/index.php";
        document.getElementById("Deslogando").value = deslogar;
        document.getElementById("formDeslogar").submit(); 
    }
    </script>
    </head>

    <body>

        <div class="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>ADMIN</span><br/>Pizzaria Becco</a>
                    <img src="..\img\user-background.png" style="position: absolute; top: 5px; left: 50px;" class="img img-responsive">
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Ler todos emails</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-comment fa-fw"></i> New Comment
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-tasks fa-fw"></i> New Task
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-alerts -->
                        </li>


                         
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="perfil_user.php"><i class="fa fa-user fa-fw"></i>Perfil</a>
                                    </li>
                                    <li><a href="configuracoes.php"><i class="fa fa-gear fa-fw"></i>Configurações</a>
                                    </li>
                                    <form  id="formDeslogar" name="formDeslogar" method="post">
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0);" onclick="JsDeslogar();"><i class="fa fa-sign-out fa-fw"></i>Deslogar</a>
                                        <input type="hidden" name="Deslogando" value="" id="Deslogando">
                                    </li>
                                </ul></form>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                        <!-- /.navbar-top-links -->
                    
                       

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="index.php" class="active"><span class="icon-menu letter-color-d">D</span>Dashboard</a>
                                </li>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CATEGORIAS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="categorias.php"><span class="icon-menu letter-color-c">C</span>Categorias</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'PRODUTOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="produtos.php"><span class="icon-menu letter-color-p">P</span>Produtos</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'TEXTOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="textos.php"><span class="icon-menu letter-color-t">T</span>Textos </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'USUARIOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="usuarios.php"><span class="icon-menu letter-color-u">U</span>Usuarios </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CLIENTES');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="clientes.php"><span class="icon-menu letter-color-c">C</span>Clientes </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'BANNERS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="banners.php"><span class="icon-menu letter-color-b">B</span>Banner</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="ped_andamento.php"><span class="icon-menu letter-color-p">P</span>Pedidos em andamento</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'HISTORICO');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="historico.php"><span class="icon-menu letter-color-h">H</span>Historico de pedidos</a>
                                        </li>'
                                ?>
                                <!--
                                    <?php
                                    $permissaoClienteMarcado = strstr($permissao, 'SMS');
                                    if(!empty($permissaoClienteMarcado))
                                     echo   '<li>
                                                <a href="sms.php"><span class="icon-menu letter-color-s">S</span>SMS</a>
                                            </li>'
                                    ?>
                                -->
                                <li>
                                    <a href="sms.php"><span class="icon-menu letter-color-s">S</span>SMS</a>
                                </li>
                                <li>
                                    <a href="rankings.php"><span class="icon-menu letter-color-r">R</span>Rankings</a>
                                </li>
                                <li>
                                    <a href="despesa.php"><span class="icon-menu letter-color-d">D</span>Despesas</a>
                                </li>
                                <li>
                                    <a href="creditos.php"><span class="icon-menu letter-color-c">C</span>Créditos</a>
                                </li>

                            </div>
                            
                            <!-- /.navbar-static-side -->
                        </nav>