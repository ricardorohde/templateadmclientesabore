<?php
require_once('config_adm.php');
$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'CONFIGSITE');
if(empty($permissaoClienteMarcado))
{
    header("Location: $host/pages");
}
$pagina = RetornaURL();
$cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
$id= $_SESSION['UsuarioCliente']['cliente_id'];
$error = false;
$success= false;
$mensagem = '';
$data_registro = date ("Y-m-d H:i:s");
$clientes = array();
$editar = false;

if(!empty($id))
{
    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
    $clientes = GoCURL($arrayDados, 'cliente/find_first');
    $editar = true;    
}


if ($pagina == 'configuracoes') {
    if ($editar = false) {
       if(!empty($_POST['editar']))
       {
        $arrayDados = array('sms'=>$_POST['sms'], 'bd_compartilhado'=>$_POST['bd_compartilhado'],'id'=>$id,'cor'=>$_POST['cor']
            );



        $insert = GoCURL($arrayDados, 'cliente/cadstrar');    
        if(!$insert['success'])
        {
            $mensagem = $insert['message'];
            $mensagemArray = $insert['message_array'];
            $error = true;
        }   
        else{
            header("Location: $host/pages/configuracoes.php?registro=true&success=true");
        }

    }
}


if ($editar = true) {
    if(!empty($_POST['cor']))
    {
        $arrayDados = array('sms'=>$_POST['sms'], 'bd_compartilhado'=>$_POST['bd_compartilhado'],'cliente_id'=>$cliente_id,'cor'=>$_POST['cor']   ,'id'=>$id,'cliente_id'=>$cliente_id
            );

        $insert = GoCURL($arrayDados, 'cliente/editar');    
        if(!$insert['success'])
        {
            $mensagem = $insert['message'];
            $mensagemArray = $insert['message_array'];
            $error = true;
        }   
        else{
            header("Location: $host/pages/configuracoes.php?edicao=true&success=true");
        }

    }


}
}






?>