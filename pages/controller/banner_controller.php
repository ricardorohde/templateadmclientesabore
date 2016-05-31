<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';

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
                            'banner1'=>$_POST['banner1']);
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            $success = true; 
            $mensagem = "Agora só falta chamar a API para realizar o cadastro";          
        }
        
    }    
?>