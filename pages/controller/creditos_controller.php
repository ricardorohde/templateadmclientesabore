<?php
require_once('config_adm.php');
require_once "PagSeguroLibrary/PagSeguroLibrary.php";	

$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'CREDITOS');
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
$clientes = array();

if(!empty($id))
{
    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
    $clientes = GoCURL($arrayDados, 'cliente/find_first');
    $editar = true;    
}


if ($pagina == 'creditos') 
    $permissao = $_SESSION['UsuarioCliente']['permissao'];
    $permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
    if(empty($permissaoClienteMarcado))
    {
        header("Location: $host/pages");
    }
{
    if (!empty($_POST['btn_cadastrar_creditos']))
    {
        if (empty($_POST['credito'])) 
        {
            $error = true;
            $mensagem = 'Informar campo obrigatório';
        }
        else
        {
            $credito = $_POST['credito'] + $clientes['dados']['Cliente']['credito_confirmar'];
            $arrayDados = array('credito_confirmar'=>$credito,'cliente_id'=>$cliente_id, 'id'=>$id);
        }
        $insert = GoCURL($arrayDados, 'cliente/editar');    
        if(!$insert['success'])
        {
            $mensagem = 'Ocorreu um erro no cadastro de créditos';
            $error = true;
        }   
        else{
            header("Location: $host/pages/cad_creditos.php?success=true");
        }
    }

}


?>