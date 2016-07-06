<?php
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'USUARIOS');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home");
}
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
    //echo "<pre>";print_r($_POST);exit;

    /*
    $permissao = 'CLIENTES;TEXTOS;CATEGORIAS';
    $permissaoClienteMarcado = strstr($permissao, 'CLIENTES');
    if(!empty($permissaoClienteMarcado))
    {
        echo "checked";
    }
    */
    

   if($pagina == 'usuarios')
    {           
        
        if(!empty($_POST['usuarioID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['usuarioID']);            
            $excluir = GoCURL($arrayDados, 'usuario_clientes/deletar');                            
        }   

        if(!empty($_POST['busca']) && !empty($_POST['input_busca']))
        {                        
            
            $arrayDados = array('cliente_id'=>$cliente_id, 'search'=>$_POST['input_busca']);                
            $listausuario = GoCURL($arrayDados, 'usuario_clientes/list');                
            $input_busca = $_POST['input_busca'];
            
        }
        else
        {
            $arrayDados = array('cliente_id'=>$cliente_id);
            $listausuario = GoCURL($arrayDados, 'usuario_clientes/list');             
        }    
    }
    
    if ($pagina == 'cad_usuarios'){
        if(!empty($_POST['editar']) && !empty($_POST['id']))
        {
            $permissao = $_POST['permissao'];
            $permissao = implode(';', $permissao);
            $arrayDados = array('nome'=>$_POST['nome'], 'login'=>$_POST['login'],
                            'email'=>$_POST['email'],
                            'funcao'=>$_POST['funcao'],'data_cadastro'=>$data_cadastro,
                            'permissao'=> $permissao,'cliente_id'=>$cliente_id, 'id'=>$_POST['id'], 
                            'email'=>$_POST['email'], 'permissao'=> $permissao);// 
                                          
            $EditarUsuario = GoCURL($arrayDados, 'usuario_clientes/editar');                                         
            $_POST['usuarioID'] = $_POST['id'];
            if(!$EditarUsuario['success'])
              {            
                $mensagem = $EditarUsuario['message'];                    
                $error = true;
              }   
              else
              {
                $mensagem = $EditarUsuario['message'];                    
                $success = true;
              }
        }

       else if (!empty($_POST['btn_cadastrar_usuarios'])) 
        {

            ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
            ## || = OR  && = AND
            if(empty($_POST['nome']) || empty($_POST['login'])|| empty($_POST['senha']))
            {
                $error = true;
                $mensagem = 'Informar campos obrigatorios';
            }
            else
            {
                $permissao = $_POST['permissao'];
                $permissao = implode(';', $permissao);
                $arrayDados = array('nome'=>$_POST['nome'], 'login'=>$_POST['login'],
                                'senha'=>$_POST['senha'],'email'=>$_POST['email'],
                                'funcao'=>$_POST['funcao'],'data_cadastro'=>$data_cadastro,
                                'email'=>$_POST['email'],'cliente_id'=>$cliente_id,'permissao'=>$permissao
                                );// 
              
                $insert = GoCURL($arrayDados, 'usuario_clientes/cadastrar');    
                      if(!$insert['success'])
                        {
                            $mensagem = $insert['message'];
                            $mensagemArray = $insert['message_array'];
                            $error = true;
                        }   
                    else{
                            $mensagem = $insert['message'];
                            $mensagemArray = $insert['message_array'];
                            $success = true;
                        }      
      
            }
            
        }
        if(!empty($_POST['usuarioID'])){
                $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['usuarioID']);
                $usuariocliente = GoCURL($arrayDados, 'usuario_clientes/find_first');
                $editar = true;    
               
    }
}
        
?>


