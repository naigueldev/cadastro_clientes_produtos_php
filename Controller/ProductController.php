<?php 

session_start();
// require '../db/conexao.php';
require '../db/conexao.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	$acao = $_GET['acao'];

	
include '../Model/ProductModel.php';
require '../Dao/ProductDAO.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
	unset($_SESSION['logado']);
	header('location: ../View/login/login.php?logout=1');
}else
	// $acao = $_GET['acao'];

	

if ( (!empty($_POST['textDescricao'])) &&
	(!empty($_POST['textCodReferencia'])) &&
	(!empty($_POST['textMarca'])) )
{

	$product = new ProductModel();

	$product->descricao = $_POST['textDescricao'];
	$product->cod_referencia = $_POST['textCodReferencia'];
	$product->marca = $_POST['textMarca'];

	$productDao = new ProductDAO();
	$productDao->insertProduct($product);

	$sucesso = "Produto $product->descricao criado com sucesso!";

	$_SESSION['descricao'] = $product->descricao;
	$_SESSION['cod_referencia'] = $product->cod_referencia;
	$_SESSION['marca'] = $product->marca;


	header("location:../View/products/ProductViewResult.php");

}else{

	$erro = "Informe todos os campos!";
	header("location:../View/products/ProductView.php?".
		"erro=$erro");
	// require '../View/customers/CustomerView.php';

}
?>