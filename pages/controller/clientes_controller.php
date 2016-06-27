<?php 
require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = '4';
    $data_registro = date ("Y-m-d H:i:s");
    $listaClientes = array();   
    $pagina = RetornaURL();


    
    if($pagina == 'clientes'){
        if(!empty($_POST['clienteID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['clienteID']);            
            $excluir = GoCURL($arrayDados, 'clientes/deletando');                            
        }   
        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaClientes = GoCURL($arrayDados, 'clientes/listar');

    }

?>