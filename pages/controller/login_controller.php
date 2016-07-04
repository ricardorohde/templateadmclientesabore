<?PHP 	
session_start();
require_once('pages/function/function.php');
	$error = false;
	$success = false;
	$mensagem ='';


	if(!empty($_POST['submit']))
	{	
		$dados = array('usuario'=>$_POST['usuario'], 'senha'=>md5($_POST['senha']));

		$login = GoCURL($dados, 'usuario_clientes/login');	
		
		if(!$login['success'])
		{
			$mensagem = 'Dados incorretos, Tente novamente';
			$error = true;
		}	
		else
		{			
			$_SESSION['UsuarioCliente'] = $login['dados']['UsuarioCliente'];	
			$_SESSION['UsuarioCliente']['logado'] = true;
			header('Location:'.'pages/index.php');

		}

		
	}
/*
	if($part_url[2] == 'sair')
	{
		unset($_SESSION['Usuario']);
		header('Location:'.$host.'/login');
	}
*/		
	

?>