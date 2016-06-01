<?php
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = '4';
    $data_registro = date ("Y-m-d H:i:s");
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
                            'borda'=>$_POST['borda'],'situacao_id'=>$_POST['situacao_id'], 'cliente_id'=>$cliente_id, 'data_cadastro'=>$data_registro);
        

        //Testar array
        //echo "chamar API aqui";exit;  
         $insert = GoCURL($arrayDados, 'categoria/cadastrar');    
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



