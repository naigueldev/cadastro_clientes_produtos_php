<?php 
session_start();
require '../db/conexao.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	$acao = $_GET['acao'];

	
include '../Model/UserModel.php';
include '../Include/UserValidate.php';

session_start();
// require '../db/conexao.php';
require '../Model/UserModel.php';
require '../Include/UserValidate.php';
require '../Dao/UserDAO.php';

// if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
// 	unset($_SESSION['logado']);
// 	header('location: ../View/login/login.php?logout=1');
// }else
// 	$acao = $_GET['acao'];

	
if ( (!empty($_POST['textUser'])) &&
	(!empty($_POST['textNome'])) &&
	(!empty($_POST['textSobrenome'])) &&
	(!empty($_POST['textEmail'])) &&
	(!empty($_POST['textIdade'])) &&
	(!empty($_POST['pwdSenha'])) ) 
{
	$erros = array();
	if (!UserValidate::testarIdade($_POST['textIdade'])) {
		$erros[] = 'Idade inválida!';
	}
	if (!UserValidate::testarEmail($_POST['textEmail'])) {
		$erros[] = 'Email inválido!';
	}

	if (count($erros) == 0) {
		$user = new UserModel();

		$user->user = $_POST['textUser'];
		$user->nome = $_POST['textNome'];
		$user->sobrenome = $_POST['textSobrenome'];
		$user->idade = $_POST['textIdade'];
		$user->email = $_POST['textEmail'];
		$user->password = $_POST['pwdSenha'];


		$userDao = new UserDAO();
		$userDao->insertUser($user);

		$sucesso = "Usuário $user->user criado com sucesso!";
		$_SESSION['user'] = $user->user;
		$_SESSION['email'] = $user->email;
		header("location:../View/users/UserViewResult.php");
		$_SESSION['mail'] = $user->email;
		header("location:../View/users/UserViewResult.php?");
			// require '../View/UserView.php';
	}else{
		$err = serialize($erros);
		$_SESSION['erros'] = $err;
		header("location:../View/users/UserViewError.php?".
			"erros=$err");


	}

}else{

	$erro = "Informe todos os campos!";
	header("location:../View/users/UserView.php?".
			"erro=$erro");
	// require '../View/users/UserView.php';

}
?>