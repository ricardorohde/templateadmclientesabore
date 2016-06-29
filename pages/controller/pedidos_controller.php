<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = '4';
    $data_registro = date ("Y-m-d H:i:s");
    $listaPedidos = array();
    $pedidos = array();
    $arrayDados = array();    
    $pagina = RetornaURL();


    if($pagina == 'ped_andamento'){                             

        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaPedidos = GoCURL($arrayDados, 'pedidos/em-andamento');

        $situacao = GoCURL($arrayDados, 'pedidos/situacao');

        //echo '<pre>';print_r($situacao);exit;
    }

    if($pagina == 'ped_detalhes_andamento'){

    	if(!empty($_POST['pedidoID']))
        {        
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['pedidoID']);
            $pedidos = GoCURL($arrayDados, 'pedidos/visualizar');             
        }

    }    

?>
 