<?php 

// include session controller
session_start();
$usuario = $_SESSION['logado'];
if (!isset($usuario)) 
	header('Location: ../login/login.php');
$usuario = $_SESSION['logado'];
echo "<script> console.log('Usuário logado: $usuario') </script>";
require_once '../../db/conexao.php';
