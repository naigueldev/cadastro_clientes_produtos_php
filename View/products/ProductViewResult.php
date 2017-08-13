<!DOCTYPE html>
<html>
<head>
	<title>Cadastrp de Produto efetuado</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Resultado</h1>

			<?php if (isset($sucesso)) { ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sucesso!</strong> <?= $sucesso ?>
			</div>
			<?php } ?>
			<?php 
			if (isset($_GET['descricao']) && isset($_GET['cod_referencia']) && isset($_GET['marca'])) {
				echo '<br>Produto: '.$_GET['descricao'].
				'<br>Código: '.$_GET['cod_referencia'].
				'<br>Marca: '.$_GET['marca'];
			}
			?>
		</div>
	</div>
</body>
</html>