<?php 
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'CLIENTES');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home/pages");
}
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
    $data_registro = date ("Y-m-d H:i:s");
    $listaClientes = array();   
    $pagina = RetornaURL();
    $input_busca = '';

     if($pagina == 'clientes')
    {            

        if(!empty($_POST['busca']) && !empty($_POST['input_busca']))
        {                        
            
            $arrayDados = array('cliente_id'=>$cliente_id, 'search'=>$_POST['input_busca']);                
            $listaClientes = GoCURL($arrayDados, 'clientes/listar');                
            $input_busca = $_POST['input_busca'];
            
        }
        else
        {
            $arrayDados = array('cliente_id'=>$cliente_id);
            $listaClientes = GoCURL($arrayDados, 'clientes/listar');

        }    //echo '<pre>'; print_r($listaClientes); exit;
    }

?>