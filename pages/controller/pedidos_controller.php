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
    $input_busca = '';

     if($pagina == 'ped_andamento')
    {            

        if(!empty($_POST['busca']) && !empty($_POST['input_busca']))
        {                        
            
            $arrayDados = array('cliente_id'=>$cliente_id, 'search'=>$_POST['input_busca']);                
            $listaPedidos = GoCURL($arrayDados, 'pedidos/em-andamento');
            $situacao = GoCURL($arrayDados, 'pedidos/situacao');              
            $input_busca = $_POST['input_busca'];
            
        }
        else
        {
        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaPedidos = GoCURL($arrayDados, 'pedidos/em-andamento');
        $situacao = GoCURL($arrayDados, 'pedidos/situacao');  

        echo '<pre>'; print_r($listaPedidos);exit;        
        }    
    }


    if($pagina == 'ped_detalhes_andamento'){

    	if(!empty($_POST['pedidoID']))
        {        
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['pedidoID']);
            $pedidos = GoCURL($arrayDados, 'pedidos/visualizar');             
        }

    }    






?>
 