<?php
session_start();
if(empty($_SESSION['UsuarioCliente']))
{
  header("Location:http://localhost/templateadmclientesabore/index.php");
}
    require_once('function\function.php'); 
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
    $data_registro = date ("Y-m-d H:i:s");
    $listaCategorias = array();    
    $categoria = array();
    $pagina = RetornaURL();
    $editar = false; 
    $style = 'none';

    if($pagina == 'categorias')
    {        
        if(!empty($_POST['categoriaID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['categoriaID']);            
            $excluir = GoCURL($arrayDados, 'categoria/excluir');                            
        }                     

        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaCategorias = GoCURL($arrayDados, 'categoria/listar');
    }

    if($pagina == 'cad_categorias')
    {        
    
        if(!empty($_POST['editar']) && !empty($_POST['id'])){
            ##realizar placeholder aqui - chamar funcao para retirar acentos e trocar espacos por _ com str_replace
            $placeholder = $_POST['nome'];
            $placeholder = str_replace(" ", "_", $placeholder);
            $placeholder = preg_replace('/[`^~ \'"]/',null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placeholder ) );

           $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                                'valor_borda'=>$_POST['valor_borda'],'principal'=>$_POST['principal'],
                                'borda'=>$_POST['borda'],'situacao_id'=>$_POST['situacao_id'], 'cliente_id'=>$cliente_id, 'id'=>$_POST['id'], 'placeholder'=>$placeholder); 
                                          
            $EditarCategoria = GoCURL($arrayDados, 'categoria/editar');                                         
            $_POST['categoriaID'] = $_POST['id'];

            if(!$EditarCategoria['success'])
              {            
                $mensagem = $EditarCategoria['message'];                    
                $error = true;
              }   
              else
              {
                $mensagem = $EditarCategoria['message'];                    
                $success = true;
              }
        }

        ##recebe o post
        else if (!empty($_POST['btn_cadastrar_categoria'])) 
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
                ##realizar placeholder aqui - chamar funcao para retirar acentos e trocar espacos por _ com str_replace
                $placeholder = $_POST['nome'];
                $placeholder = str_replace(" ", "_", $placeholder);
                $placeholder = preg_replace('/[`^~ \'"]/',null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placeholder ) );

                $arrayDados = array('nome'=>$_POST['nome'], 'descricao'=>$_POST['descricao'],
                                'valor_borda'=>$_POST['valor_borda'],'principal'=>$_POST['principal'],
                                'borda'=>$_POST['borda'],'situacao_id'=>$_POST['situacao_id'], 'cliente_id'=>$cliente_id, 'data_cadastro'=>$data_registro, 'placeholder'=>$placeholder);

            //Testar array
            //echo "chamar API aqui";exit;  
              $insert = GoCURL($arrayDados, 'categoria/cadastrar');    

              if(!$insert['success'])
              {            
                    $mensagem = $insert['message'];
                    $mensagemArray = $insert['message_array'];
                    $error = true;
              }   
              else
              {
                    $mensagem = $insert['message'];
                    $mensagemArray = $insert['message_array'];
                    $success = true;
              }    
            }        
        }  

        if(!empty($_POST['categoriaID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['categoriaID']);
            $categoria = GoCURL($arrayDados, 'categoria/buscar');       
            $editar = true;    

            if($categoria['dados']['Categoria']['borda'] == 'S')
            {   
                $style = 'block';
            }        
        }
    }
     

?>



