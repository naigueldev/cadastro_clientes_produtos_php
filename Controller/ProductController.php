<?php 

session_start();
require '../db/conexao.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	$acao = $_GET['acao'];

	
include '../Model/ProductModel.php';

if ( (!empty($_POST['textDescricao'])) &&
	(!empty($_POST['textCodReferencia'])) &&
	(!empty($_POST['textMarca'])) )
{

	$product = new ProductModel();

	$product->descricao = $_POST['textDescricao'];
	$product->cod_referencia = $_POST['textCodReferencia'];
	$product->marca = $_POST['textMarca'];


	$sucesso = "Produto $product->descricao criado com sucesso!";
	header("location:../View/products/ProductViewResult.php?".
		"descricao=$product->descricao&".
		"cod_referencia=$product->cod_referencia&".
		"marca=$product->marca");

}else{

	$erro = "Informe todos os campos!";
	header("location:../View/products/ProductView.php?".
		"erro=$erro");
	// require '../View/customers/CustomerView.php';

}
?>