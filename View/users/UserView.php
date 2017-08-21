<?php
// include "../../Controller/SessionController.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Usuários</title>

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
			<?php if (isset($_GET['erro'])) {  
				$erro = $_GET['erro'];
				?>
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


				<form action="../../Controller/UserController.php" method="post" name="cadUser">
					<div class="form-group">
						<label for="exampleInputEmail1">Usuário</label>
						<input type="text" name="textUser" class="form-control" id="textUser" placeholder="Usuário">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nome</label>
						<input type="text" name="textNome" class="form-control" id="textNome" placeholder="Nome">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Sobrenome</label>
						<input type="text" name="textSobrenome" class="form-control" id="textSobrenome" placeholder="Sobrenome">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="textEmail" class="form-control" id="textEmail" placeholder="email@email.com">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Idade</label>
						<input type="text" name="textIdade" class="form-control" id="textIdade" placeholder="Idade">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Senha</label>
						<input type="password" name="pwdSenha" class="form-control" id="pwdSenha" placeholder="Password">
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
