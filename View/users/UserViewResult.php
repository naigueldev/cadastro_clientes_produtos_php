<?php 
	session_start();
<<<<<<< HEAD
	if(isset($_SESSION['user']) && isset($_SESSION['email'])){
		echo "<br>Usuário = ".$_SESSION['user']."<br>E-mail = ".$_SESSION['user'];
=======
	if(isset($_SESSION['user']) && isset($_SESSION['mail'])){
		echo "<br>Usuário = ".$_SESSION['user']."<br>".
			"E-mail = ".$_SESSION['email'];
>>>>>>> faaa7c64fd8eb74f1cdea35217d694aff02bd16e
		
		unset($_SESSION['user']);
		unset($_SESSION['email']);
	}
 ?>

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
			if (isset($_SESSION['user']) && isset($_SESSION['email'])) {
				echo '<br>Usuário: '.$_SESSION['user'].
				'<br>E-mail: '.$_SESSION['email'];
			}
			?>
		</div>
	</div>
</body>
</html>