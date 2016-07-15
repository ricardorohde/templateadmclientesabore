<?php
session_start();
$host = 'http://localhost/templateadmclientesabore';



if(empty($_SESSION['UsuarioCliente']))
{
  header("Location: $host");
}
require_once('function\function.php');


$cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
$id= $_SESSION['UsuarioCliente']['cliente_id'];
$clientes = array();
if(!empty($id))
{
    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
    $clientes = GoCURL($arrayDados, 'cliente/find_first');
}




?>


