<?php
require_once('config_adm.php');
$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'PERFEMPRES');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home");
}
$pagina = RetornaURL();
$cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
$id= $_SESSION['UsuarioCliente']['cliente_id'];
$error = false;
$success= false;
$mensagem = '';
$data_registro = date ("Y-m-d H:i:s");
$clientes = array();
$editar = false;

if(!empty($id)){
    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
    $clientes = GoCURL($arrayDados, 'cliente/find_first');
    $editar = true;    
}


if ($pagina == 'cad_creditos') 
{
    if (!empty($_POST['btn_cadastrar_creditos']))
    {
        if (empty($_POST['credito'])) 
        {
            $error = true;
            $mensagem = 'Informar campo obrigatório';
        }
        else
        {
            if ($_POST['credito'] > $clientes['dados']['Cliente']['credito']) {
                $credito = $_POST['credito'] + $clientes['dados']['Cliente']['credito'];
                $arrayDados = array('credito'=>$credito,'cliente_id'=>$cliente_id, 'id'=>$id);
            }
            else 
            {
            $credito = $clientes['dados']['Cliente']['credito'] + $_POST['credito'];
            $arrayDados = array('credito'=>$credito,'cliente_id'=>$cliente_id, 'id'=>$id);
            }
           
        }
        $insert = GoCURL($arrayDados, 'cliente/editar');    
        if(!$insert['success'])
        {
            $mensagem = 'Ocorreu um erro no cadastro de créditos';
            $error = true;
        }   
        else{
            $mensagem = 'Cadastro efetuado com sucesso';
            $success = true;
        }
    }
}


if ($pagina == 'perfil_user') {
 if ($editar = false) {
    if (!empty($_POST['btn_cadastrar_perfil']))
    {
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND

        if(empty($_POST['documento']) || empty($_POST['nome_titular']) || empty($_POST['celular'])|| empty($_POST['email_responsavel']))
        {
            $error = true;
            $mensagem = 'Informar campos obrigatorios';
        }
        else
        {

            $arrayDados = array('documento'=>$_POST['documento'], 'razao_social'=>$_POST['razao_social'],
                'email_responsavel'=>$_POST['email_responsavel'],'nome_titular'=>$_POST['nome_titular'],
                'responsavel'=>$_POST['responsavel'], 'celular'=>$_POST['celular'],
                'telefone1'=>$_POST['telefone1'],'telefone2'=>$_POST['telefone2'], 
                'km'=>$_POST['km'],'valor_km_entrega'=>$_POST['valor_km_entrega'],
                'valor_km_entrega_2'=>$_POST['valor_km_entrega_2'],
                'fax'=>$_POST['fax'],'data_cadastro'=>$data_registro);
                            //'delivery'=>$_POST['delivery'],
                            //Testar array
                            //echo "<pre>"; print_r($arrayDados); exit;    
                            //echo "chamar API aqui";exit;  


            $insert = GoCURL($arrayDados, 'cliente/cadastrar');    
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
}


if ($editar = true) {
    if(!empty($_POST['editar']))
    {
        $arrayDados = array('documento'=>$_POST['documento'], 'razao_social'=>$_POST['razao_social'],
            'email_responsavel'=>$_POST['email_responsavel'],'responsavel'=>$_POST['responsavel'],
            'nome_fantasia'=>$_POST['nome_fantasia'], 'celular'=>$_POST['celular'],
            'telefone1'=>$_POST['telefone1'],'telefone2'=>$_POST['telefone2'], 
            'km'=>$_POST['km'],'valor_km_entrega'=>$_POST['valor_km_entrega'],
            'valor_km_entrega_2'=>$_POST['valor_km_entrega_2'],
                'fax'=>$_POST['fax'],'data_cadastro'=>$data_registro,'id'=>$id   //'id'=>$_POST['id'],
                );
                            //'delivery'=>$_POST['delivery'],
                            //Testar array
                            //echo "<pre>"; print_r($arrayDados); exit;    
                            //echo "chamar API aqui";exit;  


        $insert = GoCURL($arrayDados, 'cliente/editar');    
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


}}
if ($pagina == 'configuracoes') {
    if ($editar = false) {
     if(!empty($_POST['editar']))
     {
        $arrayDados = array('sms'=>$_POST['sms'], 'bd_compartilhado'=>$_POST['bd_compartilhado'],'id'=>$id,'cor'=>$_POST['cor']  //'id'=>$_POST['id'],
            );
                            //'delivery'=>$_POST['delivery'],
                            //Testar array
                            //echo "<pre>"; print_r($arrayDados); exit;    
                            //echo "chamar API aqui";exit;  


        $insert = GoCURL($arrayDados, 'cliente/cadstrar');    
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


if ($editar = true) {
    if(!empty($_POST['cor']))
    {
        $arrayDados = array('sms'=>$_POST['sms'], 'bd_compartilhado'=>$_POST['bd_compartilhado'],'cliente_id'=>$cliente_id,'cor'=>$_POST['cor']   ,'id'=>$id,'cliente_id'=>$cliente_id
            );

        $insert = GoCURL($arrayDados, 'cliente/editar');    
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
}






?>