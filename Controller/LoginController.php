<?php
session_start();
require '../db/conexao.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	$acao = $_GET['acao'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$usuario = $senha = "";

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE usuario= :usuario AND senha = :senha ";
	$query = $conn->prepare($sql);

	$r = $query->execute(array('usuario' => $_POST['usuario'], 'senha' => $_POST['senha']));

	if($r){
		if ($query->rowCount() == 1) {
			$_SESSION['logado'] = $usuario;
			header('location: ../View/users/UserView.php');
		} else {
			$erro = "*Usuário ou Senha, inválidos!";
			header('location: ../View/login/login.php?entrada=fail');
		}
	}
}
