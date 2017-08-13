<?php
include "../../Controller/SessionController.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Cadastro Clientes
	</title>

	<?php
	include "../../assets/stylesheets/css_include.php";
	?>

	<style type="text/css">

		body {
			padding-top: 60px;
			padding-bottom: 30px;
		}
	</style>
</head>
<body>

	<?php include "../topo/menu.php" ?>


	<div class="container ">



		<div class="jumbotron">
			<?php if (isset($_GET['erro'])) {  $erro = $_GET['erro']; ?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Erro!</strong> <?= $erro ?>
			</div>
			<?php } ?>
			<?php if (isset($sucesso)) { ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sucesso!</strong> <?= $sucesso ?>
			</div>
			<?php } ?>


			<form action="../../Controller/ProductController.php" method="post" name="cadProduct">
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Descrição</label>
						<input type="text" name="textDescricao" class="form-control" id="textNomeCompleto" placeholder="Descrição">
					</div>
					<div class="form-group col-md-4">
						<label for="">Código de Referência</label>
						<div class="date" data-provide="">
							<input type="text" name="textCodReferencia" id="" class="form-control" placeholder="Código de referência">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Marca</label>
						<input type="text" name="textMarca" class="form-control" id="" placeholder="Marca">
					</div>
				</div>

				<div class="text-center">

					<input type="submit" name="btCadastrar" id="btCadastrar" class="btn btn-md btn-success" value="Cadastrar" />
					<input type="reset" name="btLimpar" id="btbtLimparCadastrar" class="btn btn-md btn-default" value="Limpar" />

				</div>
			</form>
		</div>
	</div>


	<?php include "../../assets/javascripts/js_include.php" ?>


</body>
</html>
