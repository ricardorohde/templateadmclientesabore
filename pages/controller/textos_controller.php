<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';

    //echo "<pre>";print_r($_POST);exit;

    ##recebe o post
    if (!empty($_POST['btn_cadastrar_textos']))
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
        if(empty($_POST['cep']) || empty($_POST['cidade'] || empty($_POST['bairro'])|| empty($_POST['estado'])))
        {
            $error = true;
            $mensagem = 'Informar campos obrigatorios';
        }
        else
        {

        	$funcionamento = $_POST['funcionamento'].'---'.$_POST['funcionamento1'];
            $arrayDados = array('cep'=>$_POST['cep'], 'estado'=>$_POST['estado'],
                            'cidade'=>$_POST['cidade'],'bairro'=>$_POST['bairro'],
                            'endereco'=>$_POST['endereco'], 'numero'=>$_POST['numero'],
                            'quem_somos'=>$_POST['quem_somos'], 'facebook'=>$_POST['facebook'],
                            'twitter'=>$_POST['twitter'],'instagram'=>$_POST['instagram'], 
                            'delivery'=>$_POST['delivery'],'horario_funcionamento'=>$funcionamento);
            //Testar array
            echo "<pre>"; print_r($arrayDados); exit;    
            //echo "chamar API aqui";exit;  
            $success = true; 
            $mensagem = "Agora só falta chamar a API para realizar o cadastro";          
        }
        
    }    
?>