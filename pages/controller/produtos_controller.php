<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $data_registro = date ("Y-m-d H:i:s");
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
                            'valor_mini_metade'=>$_POST['valor_mini_metade'],'situacao_id'=>$_POST['situacao_id'],//'img'=>$_POST['img'], 
                            'data_cadastro'=>$data_registro);
            //Testar array
            //echo "chamar API aqui";exit;  
             $insert = GoCURL($arrayDados, 'produtos/cadastrar');    
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
        }
        
    }    
?>