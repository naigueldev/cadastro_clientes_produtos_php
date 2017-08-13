<!DOCTYPE html>
<html>
<head>
	<title>Cadastrp de Usuário efetuado</title>
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
			if (isset($_GET['user']) && isset($_GET['mail'])) {
				echo '<br>Usuário: '.$_GET['user'].
				'<br>E-mail: '.$_GET['mail'];
			}
			?>
		</div>
	</div>
</body>
</html>