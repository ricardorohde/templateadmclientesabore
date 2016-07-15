<?php
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'PEDANDAMENTO');
if(empty($permissaoClienteMarcado))
{
    header("Location: $host/pages");
}
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
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
        }
        ############ ATUALIZANDO STATUS DE PEDIDO #############
        if (!empty($_POST['btn_btn_situacao']))  
        {
            $arrayDados = array('id'=>$_POST['pedidoID'], 'situacao_pedido_id'=>$_POST['situacao_pedido_id'],'cliente_id'=>$cliente_id);
            $EditarPedido = GoCURL($arrayDados, 'pedidos/situacao-atualizar');                                                      
            if(!$EditarPedido['success'])
              {            
               header("Location: $host/pages/ped_andamento.php?error=true");
              }   
              else
              {
                $pedidoID = $_POST['pedidoID'];
                header("Location: $host/pages/ped_andamento.php?success=true&pedidoID=$pedidoID");
              }
        }
    }


    if($pagina == 'ped_detalhes_andamento')
    {
        if (!empty($_GET['pedidoID'])) 
        {
           $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_GET['pedidoID']);
            $pedidos = GoCURL($arrayDados, 'pedidos/visualizar'); 
        }
    	elseif(!empty($_POST['pedidoID']))
        {        
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['pedidoID']);
            $pedidos = GoCURL($arrayDados, 'pedidos/visualizar');             
        }

      if (empty($_POST['pedidoID'])) 
         {
           $pedidoID = $_GET['pedidoID'];
         }
         elseif (empty($_GET['pedidoID'])) 
         {
           $pedidoID = $_POST['pedidoID'];
         }

        if (!empty($_POST['situacao_pedido'])) 
        {
           $arrayDados = array(
                        'situacao_pedido_id'=>$_POST['situacao_pedido'],
                        'id'=>$pedidoID,
                        'cliente_id' =>$_SESSION['UsuarioCliente']['cliente_id']);

           $EditarPedido = GoCURL($arrayDados, 'pedidos/situacao-atualizar'); 
           if(!$EditarPedido['success'])
              {            
                $mensagem = 'Ocorreu um erro na atualização de Status';                    
                $error = true;
              }   
              else
              {
                header("Location: $host/pages/ped_detalhes_andamento.php?success=true&pedidoID=$pedidoID");
              }
        }
    }    






?>
 