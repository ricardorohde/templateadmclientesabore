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
    <script src="../js/jquery.mask.js"></script>
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
                    <a class="navbar-brand" href="index.php"><em>Admin</em> <?php echo $clientes['dados']['Cliente']['nome_fantasia'] ?></a><img src="..\img\banner.png" width="50" height="40" 
                    style=" margin-top: 5px;" class="img img-responsive">
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <em> Olá! Seja bem-vindo <?php echo $_SESSION['UsuarioCliente']['nome']?>  </em> 
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <?php
                                    $permissaoClienteMarcado = strstr($permissao, 'PERFEMPRES');
                                    if(!empty($permissaoClienteMarcado))
                                        echo   ' <a href="perfil_user.php"><i class="fa fa-user fa-fw"></i>Perfil Empresa</a>'
                                    ?>
                                    <?php
                                    $permissaoClienteMarcado = strstr($permissao, 'PERFEMPRES');
                                    if(empty($permissaoClienteMarcado))
                                        echo   ' <a href="perfil_user_2.php"><i class="fa fa-user fa-fw"></i>Perfil Usuario</a>'
                                    ?>
                                </li>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CONFIGSITE');
                                if(!empty($permissaoClienteMarcado))
                                    echo   '<li> <a href="configuracoes.php"><i class="fa fa-gear fa-fw"></i>Configurações</a></li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CONFIGSITE');
                                if(empty($permissaoClienteMarcado))

                                    ?>
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
                                    <a href="index.php"><i class="fa  fa-home fa-fw"></i> Home</a>
                                </li>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CATEGORIAS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="categorias.php"><i class="fa fa-list-ul fa-fw"></i> Categorias</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'PRODUTOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="produtos.php"><i class="fa fa-edit fa-fw"></i> Produtos</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'TEXTOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="textos.php"><i class="fa fa-font fa-fw"></i> Textos </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'USUARIOS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="usuarios.php"><i class="fa fa-user fa-fw"></i> Usuarios </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'CLIENTES');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="clientes.php"><i class="fa fa-group fa-fw"></i> Clientes </a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'BANNERS');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="banners.php"><i class="fa fa-camera fa-fw"></i> Banner</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="ped_andamento.php"><i class="fa fa-clock-o fa-fw"></i> Pedidos em andamento</a>
                                        </li>'
                                ?>
                                <?php
                                $permissaoClienteMarcado = strstr($permissao, 'HISTORICO');
                                if(!empty($permissaoClienteMarcado))
                                 echo   '<li>
                                            <a href="historico.php"><i class="fa fa-history fa-fw"></i> Historico de pedidos</a>
                                        </li>'
                                ?>
                                <!--
                                    <?php
                                    $permissaoClienteMarcado = strstr($permissao, 'SMS');
                                    if(!empty($permissaoClienteMarcado))
                                     echo   '<li>
                                                <a href="sms.php"><i class="fa fa-envelope fa-fw"></i> SMS</a>
                                            </li>'
                                    ?>
                                -->
                                <li>
                                    <a href="sms.php"><i class="fa fa-envelope fa-fw"></i> SMS</a>
                                </li>
                                <li>
                                    <a href="rankings.php"><i class="fa fa-bar-chart-o fa-fw"></i> Rankings</a>
                                </li>
                                <li>
                                    <a href="despesa.php"><i class="fa fa-money fa-fw"></i> Despesas</a>
                                </li>
                                <li>
                                    <a href="creditos.php"><i class="fa fa-credit-card fa-fw"></i> Créditos</a>
                                </li>

                            </div>
                            
                            <!-- /.navbar-static-side -->
                        </nav>