<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';

    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
    if (!empty($_POST['btn_cadastrar_produtos']))
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
        if(empty($_POST['nome']) || empty($_POST['descricao'] || empty($_POST['valor'])))
        {
            $error = true;
            $mensagem = 'Informar campos obrigatorios';
        }
        else
        {
            $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                            'valor'=>$_POST['valor'],'desconto'=>$_POST['desconto'],
                            'metade'=>$_POST['metade'], 'mini'=>$_POST['mini'],
                            'valor_mini'=>$_POST['valor_mini'], 'valor_metade'=>$_POST['valor_metade'],
                            'categoria_id'=>$_POST['categoria_id'],'destaque'=>$_POST['destaque'], 
                            'valor_mini_metade'=>$_POST['valor_mini_metade'],'img'=>$_POST['img']);
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            $success = true; 
            $mensagem = "Agora só falta chamar a API para realizar o cadastro";          
        }
        
    }    
?>