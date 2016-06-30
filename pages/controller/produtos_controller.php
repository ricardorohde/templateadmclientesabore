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
    $listaCat = array();
    $style = 'none';
    $arrayDados = array('cliente_id'=>$cliente_id);
    $listaCat = GoCURL($arrayDados, 'produtos/find_cat');
    $input_busca = '';

       if($pagina == 'produtos')
    {           
        
        if(!empty($_POST['produtoID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['produtoID']);            
            $excluir = GoCURL($arrayDados, 'produtos/remover');                            
        }   

        if(!empty($_POST['busca']) && !empty($_POST['input_busca']))
        {                        
            
            $arrayDados = array('cliente_id'=>$cliente_id, 'search'=>$_POST['input_busca']);                
            $listaProdutos = GoCURL($arrayDados, 'produtos/listar');                
            $input_busca = $_POST['input_busca'];
            
        }
        else
        {
            $arrayDados = array('cliente_id'=>$cliente_id);
            $listaProdutos = GoCURL($arrayDados, 'produtos/listar');             
        }    
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
                                'situacao_id'=>$_POST['situacao_id'], 'cliente_id'=>$cliente_id, 'id'=>$_POST['id'],
                                'valor_mini_metade'=>$_POST['valor_mini_metade'],'img'=>$_POST['img'],'metade_mini'=>$_POST['metade_mini'],
                                //VALOR METADE MINI E IMAGEM E METADE_MINI = S
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
                                'categoria_id'=>$_POST['categoria_id'],'placeholder'=>$placeholder,
                                'situacao_id'=>$_POST['situacao_id'],'destaque'=>$_POST['destaque'], 'data_cadastro'=>$data_registro,
                                'metade_mini'=>$_POST['metade_mini'],'valor_mini_metade'=>$_POST['valor_mini_metade'],'img'=>$_POST['img']);
                                //VALOR METADE MINI E IMAGEM E METADE_MINI = S
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
                    $style = 'table';
                }     
            if($produtos['dados']['Produto']['metade'] == 'S')
                {   
                    $style = 'table';
                } 
           } /*
            if($produtos['dados']['Produto']['meiabroto'] == 'S')
                {   
                    $style = 'block';
                } 
            */
}       

       
?>