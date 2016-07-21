<?php
require_once('config_adm.php');

$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = !strstr($permissao, 'USUARIOS');
if(empty($permissaoClienteMarcado))
{
    header("Location: $host/pages");
}

    $usuarioID = $_SESSION['UsuarioCliente']['id'];
    $error = false;
    $success= false;
    $mensagem = '';
    $data_cadastro = date ("Y-m-d H:i:s");   
    $pagina = RetornaURL();
    $listausuario = array(); 
    $usuariocliente=  array();
    $editar = false;
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
    $input_busca = '';


        if(!empty($usuarioID)){
                $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['usuarioID']);
                $usuariocliente = GoCURL($arrayDados, 'usuario_clientes/find_first');
                $editar = true;    
               
    }
        
?>


