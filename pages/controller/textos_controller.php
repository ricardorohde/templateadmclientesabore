<?php
require_once('config_adm.php');


$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'TEXTOS');
if(empty($permissaoClienteMarcado))
{
    header("Location: $home");
}
$error = false;
$success= false;
$mensagem = '';
$usuario_id = '1';
$data_registro = date ("Y-m-d H:i:s");
$cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
$id = $_SESSION['UsuarioCliente']['cliente_id'];
$clientes = array();
$editar = false;
    //echo "<pre>";print_r($_POST);exit;
    ##recebe o post


    ###PERGUNTAR COMO PEGAR ID ASSIM QUE ENTRA NA PÀGINA ####
if(!empty($id))
{
	$arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
	$clientes = GoCURL($arrayDados, 'cliente/find_first');	
	$editar = true;    
}

if ($editar = false) {
	if (!empty($_POST['btn_cadastrar_textos']))
	{
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
		if(empty($_POST['cep']) || empty($_POST['cidade']) || empty($_POST['bairro'])|| empty($_POST['estado']))
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
				'funcionamento'=>$funcionamento, 
				'usuario_id'=>$usuario_id,'data_cadastro'=>$data_registro,
				'cliente_id'=>$cliente_id,'delivery'=>$_POST['delivery'],'facebook'=>$_POST['facebook'],
				'instagram'=>$_POST['instagram'],'twitter'=>$_POST['twitter']);



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
if ($editar = true){
	if (!empty($_POST['btn_cadastrar_textos']))
	{
        ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
        ## || = OR  && = AND
		if(empty($_POST['cep']) || empty($_POST['cidade']) || empty($_POST['bairro'])|| empty($_POST['estado']))
		{
			$error = true;
			$mensagem = 'Informar campos obrigatorios';
		}
		else
		{

			$funcionamento = $_POST['funcionamento'];
			$arrayDados = array('cep'=>$_POST['cep'], 'estado'=>$_POST['estado'],
				'cidade'=>$_POST['cidade'],'bairro'=>$_POST['bairro'],
				'endereco'=>$_POST['endereco'], 'numero'=>$_POST['numero'],
				'quem_somos'=>$_POST['quem_somos'], 'facebook'=>$_POST['facebook'],
				'twitter'=>$_POST['twitter'],'instagram'=>$_POST['instagram'], 
				'funcionamento'=>$funcionamento, 
				'usuario_id'=>$usuario_id,'data_cadastro'=>$data_registro,
				'cliente_id'=>$cliente_id, 'id'=>$id,'delivery'=>$_POST['delivery'],'facebook'=>$_POST['facebook'],
				'instagram'=>$_POST['instagram'],'twitter'=>$_POST['twitter']);


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