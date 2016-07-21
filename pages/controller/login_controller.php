<?PHP 	
session_start();
require_once('pages/function/function.php');
	$error = false;
	$error2 = false;
	$success2 = false;
	$success = false;
	$mensagem ='';

if (!empty($_POST['Deslogando']))
{	
  unset($_SESSION['UsuarioCliente']);
}


if (!empty($_POST['btn-recuperar-senha'])) 
{
	$email = $_POST['email'];
	$caracteres = "0123456789";
	$senha = substr(str_shuffle($caracteres),0,10);
	$dados = array('email'=>$email, 'senha' =>md5($senha));
	$emailvalida = GoCURL($dados, 'usuario_clientes/valida_email');
	//Criar valida_email no function da API
		if ($emailvalida['success']) 
		{
			$error2 = true;
		}
		else
		{
			$mensagem = 'Obrigado ! Sua senha foi enviada no seu email !';
			$success2 = true;
			require_once('envia_email.php');
		}
}
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
		header('Location:'.$host.'pages/index.php');

	}



}

	
			
		
			
	

?>