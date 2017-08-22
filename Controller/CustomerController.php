<?php 

session_start();
// require '../db/conexao.php';
require '../Dao/CustomerDAO.php';
include '../Model/CustomerModel.php';
include '../Include/CustomerValidate.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	// $acao = $_GET['acao'];

	


if ( (!empty($_POST['textNomeCompleto'])) &&
	(!empty($_POST['textDataNascimento'])) &&
	(!empty($_POST['textCpf'])) &&
	(!empty($_POST['textEmail'])) &&
	(!empty($_POST['textEndereco'])) &&
	(!empty($_POST['textCidade'])) &&
	(!empty($_POST['textEstado'])) 
	){
	$erros = array();
	if (!CustomerValidate::testarEmail($_POST['textEmail'])) {
		$erros[] = 'Email inválido!';
	}

	if (count($erros) == 0) {
		$customer = new CustomerModel();

		$customer->nome_completo = $_POST['textNomeCompleto'];
		$customer->nascimento = $_POST['textDataNascimento'];
		$customer->cpf = $_POST['textCpf'];
		$customer->sexo = $_POST['textSexo'];
		$customer->profissao = $_POST['textProfissao'];
		$customer->telefone = $_POST['textTelefone'];
		$customer->celular = $_POST['textCelular'];
		$customer->email = $_POST['textEmail'];
		$customer->cep = $_POST['textCep'];
		$customer->endereco = $_POST['textEndereco'];
		$customer->numero = $_POST['textNumero'];
		$customer->complemento = $_POST['textComplemento'];
		$customer->bairro = $_POST['textBairro'];
		$customer->cidade = $_POST['textCidade'];
		$customer->estado = $_POST['textEstado'];
		$customer->observacao = $_POST['textObservacao'];

		$customerDao = new CustomerDAO();
		$customerDao->insertCustomer($customer);


		$sucesso = "Cliente $customer->nome_completo criado com sucesso!";

		$_SESSION['nome_completo'] = $customer->nome_completo;
		$_SESSION['nascimento'] = $customer->nascimento;
		$_SESSION['cpf'] = $customer->cpf;
		$_SESSION['sexo'] = $customer->sexo;
		$_SESSION['profissao'] = $customer->profissao;
		$_SESSION['telefone'] = $customer->telefone;
		$_SESSION['celular'] = $customer->celular;
		$_SESSION['email'] = $customer->email;
		$_SESSION['cep'] = $customer->cep;
		$_SESSION['endereco'] = $customer->endereco;
		$_SESSION['numero'] = $customer->numero;
		$_SESSION['complemento'] = $customer->complemento;
		$_SESSION['bairro'] = $customer->bairro;
		$_SESSION['cidade'] = $customer->cidade;
		$_SESSION['estado'] = $customer->estado;
		$_SESSION['observacao'] = $customer->observacao;


		
		header("location:../View/customers/CustomerViewResult.php");
	}else{
		$err = serialize($erros);
		header("location:../View/customers/CustomerViewError.php?".
			"erros=$err");


	}

}else{

	$erro = "Informe todos os campos!";
	header("location:../View/customers/CustomerView.php?".
			"erro=$erro");
	// require '../View/customers/CustomerView.php';

}
?>