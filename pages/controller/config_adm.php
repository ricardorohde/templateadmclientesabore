<?php
session_start();
$host = 'http://localhost/templateadmclientesabore/index.php';
$home = 'http://localhost/templateadmclientesabore/pages/index.php';
if(empty($_SESSION['UsuarioCliente']))
{
  header("Location: $host");
}
require_once('function\function.php');


?>


