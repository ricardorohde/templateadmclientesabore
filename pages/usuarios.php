<?php require_once('controller/usuarios_controller.php'); ?>
<?php require_once('header.php'); ?>

<script src="../js/busca.js"></script>
<script>
    function jsExcluir(usuario)
    {        
        document.formUsuarioListar.action = "usuarios.php";
        document.getElementById("usuarioID").value = usuario;
        document.getElementById("formUsuarioListar").submit();
    }

    function jsEditar(usuario)
    {          
        document.formUsuarioListar.action = "cad_usuarios.php";
        document.getElementById("usuarioID").value = usuario;
        document.getElementById("formUsuarioListar").submit();
    }

    function jsSubmitBusca()
    {
        document.formUsuarioListar.action = "usuarios.php";        
        document.getElementById("formularioBusca").submit();   
    }
</script>
<div id="page-wrapper"><br>
<h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Usuários
         <a href="cad_usuarios.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar novo usuário</button></a>
    </h1><br>
      	<div class="row">

                        <div class="col-lg-3"> 
                            <form name="formularioBusca" method="post">
                                Digite uma busca
                        </div>
                                <div class="col-lg-3">
                                    <input class="form-control" placeholder="Nome" id="input_busca" name="input_busca" 
                                        value="<?PHP echo $input_busca; ?>">                                    
                                    <input type="hidden" name="busca" value="true">
                                    <button id="buscar" onclick="jsSubmitBusca();">Buscar</button>
                                </div>  
                            </form>
                        <br>
                        
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Nome</th>
                                    <th>Login</th>
                                    <th>Data Cadastro</th>
                                    <th>Editar</th>
                                </tr>
                                <form id="formUsuarioListar" name="formUsuarioListar" method="post">
                                <?PHP foreach($listausuario['dados'] as $usuariosabore){?>
                                    <tr>
                                        <td><?PHP echo $usuariosabore['UsuarioSabore']['nome']; ?></td>
                                        <td><?PHP echo $usuariosabore['UsuarioSabore']['login']; ?></td>
                                        <td><?PHP echo $usuariosabore['UsuarioSabore']['data_cadastro']; ?></td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $usuariosabore['UsuarioSabore']['id'] ?>');">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </a> 
                                            <a href="javascript:void(0);" onclick="jsEditar('<?PHP echo $usuariosabore['UsuarioSabore']['id'] ?>');">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>                                       
                                <?PHP } ?>  
                                <input type="hidden" name="usuarioID" value="" id="usuarioID">
                        </table>
                        
                    </div>
            </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>