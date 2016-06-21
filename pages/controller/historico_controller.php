<?php 
require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = '4';
    $data_registro = date ("Y-m-d H:i:s");
    $listaPedidos = array();   
    $pagina = RetornaURL();


    
    if($pagina == 'historico'){
        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaPedidos = GoCURL($arrayDados, 'pedidos/listar');
    }
    if ($pagina =='ped_detalhes') {
        $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['pedidoID']); 
        $listaPedidos = GoCURL($arrayDados, 'pedidos/listar_detalhes');

    }

?>