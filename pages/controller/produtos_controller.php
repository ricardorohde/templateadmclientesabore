<?php
    require_once('function\function.php'); 
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = '4';
    $data_registro = date ("Y-m-d H:i:s");
    $pagina = RetornaURL();
    $produtos = array();
    $listaProdutos = array();
    $editar = false;
    $style = 'none';
    //echo "<pre>";print_r($_POST);exit;


    if($pagina == 'produtos')
    {   
        if(!empty($_POST['produtoID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['produtoID']);            
            $excluir = GoCURL($arrayDados, 'produtos/remover');                            
        }               
        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaProdutos = GoCURL($arrayDados, 'produtos/listar'); 
    }

    if ($pagina ==  'cad_produtos') {      
        if(!empty($_POST['editar']) && !empty($_POST['id']))
        {
            ##realizar placeholder aqui - chamar funcao para retirar acentos e trocar espacos por _ com str_replace
            $placeholder = $_POST['nome'];
            $placeholder = str_replace(" ", "_", $placeholder);
            $placeholder = preg_replace('/[`^~ \'"]/',null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placeholder ) );

           $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                                'valor'=>$_POST['valor'],'desconto'=>$_POST['desconto'],
                                'metade'=>$_POST['metade'], 'mini'=>$_POST['mini'],
                                'valor_mini'=>$_POST['valor_mini'], 'valor_metade'=>$_POST['valor_metade'],
                                'categoria_id'=>$_POST['categoria_id'],'destaque'=>$_POST['destaque'], 
                                'situacao_id'=>$_POST['situacao_id'], 'cliente_id'=>$cliente_id, 'id'=>$_POST['id'],//'img'=>$_POST['img'], 'valor_mini_metade'=>$_POST['valor_mini_metade'],
                                'data_cadastro'=>$data_registro, 'placeholder'=>$placeholder);
                                          
            $EditarProduto = GoCURL($arrayDados, 'produtos/editar');                                         
            $_POST['produtoID'] = $_POST['id'];
            if(!$EditarProduto['success'])
              {            
                $mensagem = $EditarProduto['message'];                    
                $error = true;
              }   
              else
              {
                $mensagem = $EditarProduto['message'];                    
                $success = true;
              }
        }

         ##recebe o post
        else if (!empty($_POST['btn_cadastrar_produtos']))
        {
            ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
            ## || = OR  && = AND
            if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['valor']))
            {
                $error = true;
                $mensagem = 'Informar campos obrigatorios';
            }
            else
            {
                $placeholder = $_POST['nome'];
                $placeholder = str_replace(" ", "_", $placeholder);
                $placeholder = preg_replace('/[`^~ \'"]/',null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placeholder ) );

                $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                                'valor'=>$_POST['valor'],'desconto'=>$_POST['desconto'],
                                'metade'=>$_POST['metade'], 'mini'=>$_POST['mini'],
                                'valor_mini'=>$_POST['valor_mini'], 'valor_metade'=>$_POST['valor_metade'],
                                'categoria_id'=>$_POST['categoria_id'],'destaque'=>$_POST['destaque'], 
                                'situacao_id'=>$_POST['situacao_id'],//'img'=>$_POST['img'], $_POST['valor_mini_metade'],
                                'data_cadastro'=>$data_registro, 'placeholder'=>$placeholder);
                //Testar array
                //echo "chamar API aqui";exit;  
                 $insert = GoCURL($arrayDados, 'produtos/cadastrar');    
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
        if(!empty($_POST['produtoID'])){
                    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['produtoID']);
                    $produtos = GoCURL($arrayDados, 'produtos/search');
                    $editar = true;    
                
            if($produtos['dados']['Produto']['mini'] == 'S')
                {   
                    $style = 'block';
                }     
            if($produtos['dados']['Produto']['metade'] == 'S')
                {   
                    $style = 'block';
                } 
           } /*
            if($produtos['dados']['Produto']['meiabroto'] == 'S')
                {   
                    $style = 'block';
                } 
            */
}       

       
?>