<!DOCTYPE html>
<html>
<head>
	<title>Cadastrp de Usuário efetuado</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Resultado</h1>
			<?php 
			if (isset($_GET['customer']) && isset($_GET['sexo'])) {
				echo '<br>Cliente: '.$_GET['customer'].
				'<br>Sexo: '.$_GET['sexo'];
			}
			?>
		</div>
	</div>
</body>
</html>