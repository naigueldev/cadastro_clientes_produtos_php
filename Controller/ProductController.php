<?php 
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
		"product=$product->descricao");

}else{

	$erro = "Informe todos os campos!";
	header("location:../View/products/ProductView.php?".
		"erro=$erro");
	// require '../View/customers/CustomerView.php';

}
?>