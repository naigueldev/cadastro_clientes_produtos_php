<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produto efetuado</title>

	<?php
	include "../../assets/stylesheets/css_include.php";
	?>


</head>
<body>

	<?php include "../topo/menu.php" ?>


	<div class="container">
		<div class="jumbotron">
			<h1>Resultado</h1>

			<?php 

			if (isset($_SESSION['descricao']) && isset($_SESSION['cod_referencia']) && isset($_SESSION['marca'])) { ?>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="">Descrição</label>
					<input type="text" name="textDescricao" class="form-control" id="textNomeCompleto" value="<?php echo $_SESSION['descricao'] ?>" readonly="true">
				</div>
				<div class="form-group col-md-4">
					<label for="">Código de Referência</label>
					<div class="date" data-provide="">
						<input type="text" name="textCodReferencia" id="" class="form-control" value="<?php echo $_SESSION['cod_referencia'] ?>"  readonly="true">
					</div>
				</div>

				<div class="form-group col-md-4">
					<label for="exampleInputEmail1">Marca</label>
					<input type="text" name="textMarca" class="form-control" id="" value="<?php echo $_SESSION['marca'] ?>"   readonly="true">
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</body>
</html>

<?php 
	if(isset($_SESSION['descricao']) && isset($_SESSION['cod_referencia']) && isset($_SESSION['marca'])){
		
		unset($_SESSION['descricao']);
		unset($_SESSION['cod_referencia']);
		unset($_SESSION['marca']);
	}
 ?>