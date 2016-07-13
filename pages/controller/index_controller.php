<?php
require_once('config_adm.php');
$mensagem= '';
$error = false;
$success = false;

if (!empty($_POST['site_no_ar']))
{
    ##verifica se usuario esta esquecendo nome ou descricao (dados obrigatorios)
    ## || = OR  && = AND
	if(empty($_POST['site_no_ar']) || empty($cliente_id))
	{
		$error = true;
		$mensagem = 'Ocorreu um erro na atualização de seu site';
	}
	else
	{
		
		$arrayDados = array('site_no_ar'=>$_POST['site_no_ar'], 'id'=>$cliente_id);
		

		$insert = GoCURL($arrayDados, 'cliente/editar');    
		if(!$insert['success'])
		{
			$mensagem = "Ops! Algo deu errado na atualização de seu site";
			$error = true;
		}   
		else
		{
			$mensagem="Atualização efetuada com sucesso ";
			$success = true;
		}
	}
}

?>


