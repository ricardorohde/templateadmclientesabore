<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';

    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
    if (!empty($_POST['btn_cadastrar_categoria'])) 
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
        if(empty($_POST['nome']) || empty($_POST['descricao']))
        {
            $error = true;
            $mensagem = 'Informar nome e descrição da categoria';
        }
        else
        {
            $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                            'valor_borda'=>$_POST['valor_borda'],'principal'=>$_POST['principal'],
                            'borda'=>$_POST['borda']);
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            $success = true; 
            $mensagem = "Agora só falta chamar a API para realizar o cadastro";          
        }
        
    }    
?>