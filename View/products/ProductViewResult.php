<!DOCTYPE html>
<html>
<head>
	<title>Cadastrp de Produto efetuado</title>

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
			if (isset($_GET['descricao']) && isset($_GET['cod_referencia']) && isset($_GET['marca'])) { ?>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="">Descrição</label>
					<input type="text" name="textDescricao" class="form-control" id="textNomeCompleto" value="<?php echo $_GET['descricao'] ?>" readonly="true">
				</div>
				<div class="form-group col-md-4">
					<label for="">Código de Referência</label>
					<div class="date" data-provide="">
						<input type="text" name="textCodReferencia" id="" class="form-control" value="<?php echo $_GET['cod_referencia'] ?>"  readonly="true">
					</div>
				</div>

				<div class="form-group col-md-4">
					<label for="exampleInputEmail1">Marca</label>
					<input type="text" name="textMarca" class="form-control" id="" value="<?php echo $_GET['marca'] ?>"   readonly="true">
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</body>
</html>