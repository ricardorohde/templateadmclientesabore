<?php
session_start();
if(empty($_SESSION['UsuarioCliente']))
{
  header("Location:http://localhost/templateadmclientesabore/index.php");
}
require_once('function\function.php');
        
?>


