<?php require_once('controller/usuarios_controller.php'); ?>
<?php require_once('header.php'); ?>

<script src="../js/busca.js"></script>
<script>
    function jsExcluir(usuario)
    {        
        if (!confirm ("Você tem certeza dessa exclusão?"))
        return false;
        else
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
   </h1>
   <div class="row">
    <form name="formularioBusca" method="post">
        <div class="col-lg-3">
            <input class="form-control" placeholder="Pesquise Aqui" id="input_busca" name="input_busca" 
            value="<?PHP echo $input_busca; ?>">                                    
            <input type="hidden" name="busca" value="true">
            
        </div>
        <div>
            <button id="buscar" class="btn btn-error" onclick="jsSubmitBusca();">Buscar</button>
        </div>  
    </form>
    <br>
    
    
    <div class="col-lg-12">
        <?PHP if($error) { ?>
        <div class="alert alert-danger"> 
         <?PHP echo $mensagem; ?>
     </div>
     <?PHP } ?>
     <?PHP if($success) { ?>
     <div class="alert alert-success"> 
         <?PHP echo $mensagem; ?>
     </div>
     <?PHP } ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <tr style="background-color: #2c3e50; color: white;">
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Documento</th>
                    <th>Editar</th>
                </tr>
                <form id="formUsuarioListar" name="formUsuarioListar" method="post">
                    <?PHP foreach($listausuario['dados'] as $usuariocliente){?>
                    <tr>
                        <td><?PHP echo $usuariocliente['UsuarioCliente']['nome']; ?></td>
                        <td><?PHP echo $usuariocliente['UsuarioCliente']['login']; ?></td>
                        <td><?PHP echo $usuariocliente['UsuarioCliente']['email']; ?></td>
                        <td>
                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $usuariocliente['UsuarioCliente']['id'] ?>');">
                                <i class="fa fa-trash-o fa-fw"></i>
                            </a> 
                            <a href="javascript:void(0);" onclick="jsEditar('<?PHP echo $usuariocliente['UsuarioCliente']['id'] ?>');">
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