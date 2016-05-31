<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';

    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
    if (!empty($_POST['btn_cadastrar_usuarios']))
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
        if(empty($_POST['nome']) || empty($_POST['login']) || empty($_POST['email']) || empty($_POST['senha']))
        {
            $error = true;
            $mensagem = 'Informar campos obrigatorios';
        }
        else
        {
            $arrayDados = array('nome'=>$_POST['nome'], 'login'=>$_POST['login'],
                            'senha'=>$_POST['senha'],'email'=>$_POST['email'],
                            'funcao'=>$_POST['funcao']);// 'permissao'=>$_POST['permissao']
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            $success = true; 
            $mensagem = "Agora só falta chamar a API para realizar o cadastro";          
        }
        
    }    
?>