<?php 
include '../Model/UserModel.php';
include '../Include/UserValidate.php';

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


		$sucesso = "Usuário $user->user criado com sucesso!";
		header("location:../View/users/UserViewResult.php?".
			"user=$user->user&".
			"mail=$user->email");
			// require '../View/UserView.php';
	}else{
		$err = serialize($erros);
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