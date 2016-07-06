<?php    
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'BANNERS');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home");
}


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
    $BannerImgSave = array();

    if($pagina == 'banners'){

        if(!empty($_POST['bannerID']))
        {
            $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$_POST['bannerID']); 
            $excluir = GoCURL($arrayDados, 'cliente/banner-deletar');                            
        }                              

        $arrayDados = array('cliente_id'=>$cliente_id);
        $listaBanners = GoCURL($arrayDados, 'cliente/banner-listar');
    
    }



    if($pagina == 'cad_banners')
    {

        ##buscar imagem de banner
        $arrayDados = array('cliente_id'=>$cliente_id);
        $bannerIMG = GoCURL($arrayDados, 'cliente/banner-buscar-img');                                   

        if(!empty($_POST['editar']) && !empty($_POST['id'])){
            
            $arrayDados = array(

                'titulo'=>$_POST['titulo'], 
                'subtitulo'=>$_POST['subtitulo'],
                'palavra_negrito'=>$_POST['palavra_negrito'],
                'palavra_vermelho'=>$_POST['palavra_vermelho'],
                'botao'=>$_POST['botao'],
                'link_botao'=>$_POST['link_botao'],
                'id_cliente'=>$cliente_id,                
                'id'=>$_POST['id']
            );            
            
            $EditarBanner = GoCURL($arrayDados, 'cliente/banner-editar');

            $_POST['bannerID'] = $_POST['id'];

            if(!$EditarBanner['success']){

                $mensagem = $EditarBanner['message'];                    
                $error = true;                
            
            }else{
                
                ##atualizar imagem do banner
                if(!empty($_FILES['img']['size']))
                {
                    $upload = GoUploadImg($_FILES['img'], 'banners');  

                    if($upload['success'] == true)                                            
                    {                        
                        $nomeIMG = $upload['nome'];                                    
                        $BannerImgSave = 
                            GoCURL(array('banner1'=>$nomeIMG, 'cliente_id'=>$cliente_id), 'cliente/banner-img-editar');                        

                        if(!$BannerImgSave['success'])
                        {

                            $mensagem = 'Ocorreu um erro na atualização do banner';
                            $error = true;
                        }
                        else
                        {
                            $mensagem = 'Dados atualizados com sucesso';
                            $success = true; 
                        }
                    }
                    else
                    {
                        $mensagem = $upload['mensagem'];
                        $success = false;    
                        $error = true;                                            
                    }
                }
                else
                {
                    $mensagem = $EditarBanner['message'];                    
                    $success = true;    
                }                
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
                    'id_cliente'=>$cliente_id
                );            
               
                $insert = GoCURL($arrayDados, 'cliente/banner-cadastrar');
                
                if(!$insert['success'])
                {
                    $mensagem = $insert['message'];                    
                    $error = true;
                
                }
                else
                {
                    ##atualizar imagem do banner
                    if(!empty($_FILES['img']['size']))
                    {
                        $upload = GoUploadImg($_FILES['img'], 'banners', 750, 615);  

                        if($upload['success'] == true)                                            
                        {                        
                            $nomeIMG = $upload['nome'];                                    
                            $BannerImgSave = 
                                GoCURL(array('banner1'=>$nomeIMG, 'cliente_id'=>$cliente_id), 'cliente/banner-img-editar');                        

                            if(!$BannerImgSave['success'])
                            {
                                $mensagem = 'Ocorreu um erro na atualização do banner';
                                $error = true;
                            }
                            else
                            {
                                $mensagem = 'Dados atualizados com sucesso';
                                $success = true; 
                                $_POST['bannerID'] = $insert['dados']['ID'];                                
                            }
                        }
                        else
                        {
                            $mensagem = $upload['mensagem'];
                            $success = false;                                                
                        }
                    }
                    else
                    {
                        $mensagem = $insert['message'];                    
                        $success = true;    
                        $_POST['bannerID'] = $insert['dados']['ID'];                                
                    }
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