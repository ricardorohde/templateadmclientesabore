<?php
session_start();
    require_once('function\function.php');
    $error = false;
    $success= false;
    $mensagem = '';
    $cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
    $data_registro = date ("Y-m-d H:i:s");
    $listaBanners = array();
    $arrayDados = array();    
    $pagina = RetornaURL();
    $banner= array();
    $editar = false; 
    $EditarBanner = array();

    if($pagina == 'banners'){

        if(!empty($_POST['bannerID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['bannerID']); 
            $excluir = GoCURL($arrayDados, 'cliente/banner-deletar');                            
        }                              

        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaBanners = GoCURL($arrayDados, 'cliente/banner-listar');
    
    }



    if($pagina == 'cad_banners'){

        if(!empty($_POST['editar']) && !empty($_POST['id'])){
            
            $arrayDados = array(

                'titulo'=>$_POST['titulo'], 
                'subtitulo'=>$_POST['subtitulo'],
                'palavra_negrito'=>$_POST['palavra_negrito'],
                'palavra_vermelho'=>$_POST['palavra_vermelho'],
                'botao'=>$_POST['botao'],
                'link_botao'=>$_POST['link_botao'],
                'id_cliente'=>$cliente_id,
                'img'=>$_POST['img'],
                'id'=>$_POST['id']
            );            
                                          
            $EditarBanner = GoCURL($arrayDados, 'cliente/banner-editar');

            $_POST['bannerID'] = $_POST['id'];

            if(!$EditarBanner['success']){

                $mensagem = $EditarBanner['message'];                    
                $error = true;
            
            }else{
                
                $mensagem = $EditarBanner['message'];                    
                $success = true;
            }
        }

        else if(!empty($_POST['btn_cadastrar_banner']))
        {

            if(empty($_POST['titulo']) || empty($_POST['subtitulo']) || empty($_POST['botao']) || empty($_POST['link_botao'])){
                $error = true;
                $mensagem = 'Informar campos obrigatórios';            

            }else{

                $arrayDados = array(

                    'titulo'=>$_POST['titulo'], 
                    'subtitulo'=>$_POST['subtitulo'],
                    'palavra_negrito'=>$_POST['palavra_negrito'],
                    'palavra_vermelho'=>$_POST['palavra_vermelho'],
                    'botao'=>$_POST['botao'],
                    'link_botao'=>$_POST['link_botao'],
                    'img'=>$_POST['img'],
                    'id_cliente'=>$cliente_id
                );            
               
                $insert = GoCURL($arrayDados, 'cliente/banner-cadastrar');

                if(!$insert['success']){
                        $mensagem = $insert['message'];
                        $mensagemArray = $insert['message_array'];
                        $insertError = true;
                
                }else{
                        $mensagem = $insert['message'];
                        $mensagemArray = $insert['message_array'];
                        $success = true;
                }                   
            }            
        }
        

        if(!empty($_POST['bannerID'])){

            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['bannerID']);
            $banner = GoCURL($arrayDados, 'cliente/banner-buscar');       
            $editar = true;
        
        }

    }



?>