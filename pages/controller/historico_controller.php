<?php 
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'HISTORICO');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home");
}
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
    $data_registro = date ("Y-m-d H:i:s");
    $listaPedidos = array();   
    $pagina = RetornaURL();
    $input_busca = '';
    if($pagina == 'historico')
    {
        if(!empty($_POST['busca']) && !empty($_POST['input_busca']))
        {                        
            
            $arrayDados = array('cliente_id'=>$cliente_id, 'search'=>$_POST['input_busca']);                
            $listaPedidos = GoCURL($arrayDados, 'pedidos/listar');                
            $input_busca = $_POST['input_busca'];
            
            
        }
        else
        {
            $arrayDados = array('cliente_id'=>$cliente_id);
            $listaPedidos = GoCURL($arrayDados, 'pedidos/listar');             
        }
    }
    if ($pagina =='ped_detalhes') {
        $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['pedidoID']); 
        $listaPedidos = GoCURL($arrayDados, 'pedidos/listar_detalhes');

    }


?>