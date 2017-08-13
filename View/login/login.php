<?php

    //desconectando da aplicação
    //Acesso Indevido
session_start();
if(isset($_SESSION['logado'])){
	unset($_SESSION['logado']);
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>	

	<?php
	include "../../assets/stylesheets/css_include.php";
	?>

	

</head>

<body>
	<div class="bgimage">
		<!-- Top content -->
		<div class="top-content">

			<div class="container">

				<div class="row">
					<?php if (isset($_GET['logout'])) { ?>
					<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>OK!</strong> Você saiu com sucesso.
					</div>
					<?php } ?>
					<div class="col-sm-8 col-sm-offset-2 text-center">
						<h1><strong>Faça o login</strong></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>Acesso restrito</h3>
								<p>Digite seu Usuário e Senha cadastrados:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-key"></i>
							</div>
						</div>
						<div class="form-bottom">
							<form role="form" action="../../Controller/LoginController.php" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="form-username">Usuário</label>
									<input type="text" name="usuario" placeholder="Usuário..." class="form-username form-control" id="form-username" required="">

								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Senha</label>
									<input type="password" name="senha" placeholder="Senha..." class="form-password form-control" id="form-password" required="">

								</div>

								<button type="submit" class="btn" name="entrar">Entrar!</button>

								<?php if (isset($_GET['entrada'])) { ?>
								<div class="alert alert-danger">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Erro!</strong> Usuário ou Senha inválidos.
								</div>
								<?php } ?>

							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<?php include "../../assets/javascripts/js_include.php" ?>
</body>
</html>