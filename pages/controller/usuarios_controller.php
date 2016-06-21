<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $data_cadastro = date ("Y-m-d H:i:s");   
    $pagina = RetornaURL();
    $listausuario = array(); 
    $usuariosabore=  array();
    $editar = false;
    $cliente_id= '4';
    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
   if($pagina == 'usuarios')
    {   
        if(!empty($_POST['usuarioID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['usuarioID']);            
            $excluir = GoCURL($arrayDados, 'usuario_sabore/deletar');                            
        }               
        $arrayDados = array('cliente_id'=>$cliente_id);
        $listausuario = GoCURL($arrayDados, 'usuario_sabore/list'); 
    }
    
    if ($pagina == 'cad_usuarios'){
        if(!empty($_POST['editar']) && !empty($_POST['id']))
        {
            $arrayDados = array('nome'=>$_POST['nome'], 'login'=>$_POST['login'],
                            'senha'=>$_POST['senha'],'email'=>$_POST['email'],
                            'funcao'=>$_POST['funcao'],'data_cadastro'=>$data_cadastro,
                            'tipo_documento'=>$_POST['tipo_documento'],'documento'=>$_POST['documento'],
                            'salario'=>$_POST['salario'], 'cliente_id'=>$cliente_id, 'id'=>$_POST['id']);// 
                                          
            $EditarUsuario = GoCURL($arrayDados, 'usuario_sabore/editar');                                         
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
                $arrayDados = array('nome'=>$_POST['nome'], 'login'=>$_POST['login'],
                                'senha'=>$_POST['senha'],'email'=>$_POST['email'],
                                'funcao'=>$_POST['funcao'],'data_cadastro'=>$data_cadastro,
                                'tipo_documento'=>$_POST['tipo_documento'],'documento'=>$_POST['documento'],
                                'salario'=>$_POST['salario']);// 
              
                $insert = GoCURL($arrayDados, 'usuario_sabore/cadastrar');    
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
                $usuariosabore = GoCURL($arrayDados, 'usuario_sabore/find_first');
                $editar = true;    
               
    }
}
        
?>


