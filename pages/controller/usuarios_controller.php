<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $data_cadastro = date ("Y-m-d H:i:s");
    $cliente_id = '1';
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
                            'permissao'=>$_POST['permissao'], 'funcao'=>$_POST['funcao'],
                            'data_cadastro'=>$data_cadastro, 'cliente_id'=>$cliente_id);// 
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            

            /*  ###### AQUI ESTÁ O ARRAY ENVIANDO P BANCO DE DADOS ##########            
            $insert = GoCURL($arrayDados, 'PERGUNTAR PARA JUNIOR');    
                  if(!$insert['success'])
                    {
                        $mensagem = $insert['message'];
                        $mensagemArray = $insert['message_array'];
                        $insertError = true;
                    }   
                else{
                        $mensagem = $insert['message'];
                        $mensagemArray = $insert['message_array'];
                        $success = true;
                    }      
            */    
        }
        
    }    
?>