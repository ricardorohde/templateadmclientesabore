<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $id_cliente='1';

    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
    if (!empty($_POST['btn_cadastrar_banner'])) 
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
        if(empty($_POST['titulo']) || empty($_POST['subtitulo']) || empty($_POST['botao']) || empty($_POST['link_botao']))
        {
            $error = true;
            $mensagem = 'Informar campos obrigatorios';
        }
        else
        {
             $arrayDados = array('titulo'=>$_POST['titulo'], 'subtitulo'=>$_POST['subtitulo'],
                            'botao'=>$_POST['botao'],'link_botao'=>$_POST['link_botao'],
                            'palavra_negrito'=>$_POST['palavra_negrito'],'palavra_vermelho'=>$_POST['palavra_vermelho'],
                            'id_cliente'=>$id_cliente);
                            //,'banner1'=>$_POST['banner1']
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            
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