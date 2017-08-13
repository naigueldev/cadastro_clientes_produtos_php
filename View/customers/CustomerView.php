<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Cadastro Clientes
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../assets/stylesheets/bootstrap-datepicker.css">

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


			<form action="../../Controller/CustomerController.php" method="post" name="cadCustomer">
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Nome Completo</label>
						<input type="text" name="textNomeCompleto" class="form-control" id="textNomeCompleto" placeholder="Nome Completo">
					</div>
					<div class="form-group col-md-4">
						<label for="">Data de Nascimento</label>
						<div class="date" data-provide="">
							<input type="text" name="textDataNascimento" id="textDataNascimento" class="datepicker-two form-control" placeholder="dd/mm/aaaa">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">CPF</label>
						<input type="text" name="textCpf" class="form-control" id="textCpf" placeholder="000.000.000-00">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">

						<label for="exampleFormControlSelect1">Sexo</label>
						<select class="form-control" name="textSexo" id="exampleFormControlSelect1">
							<option>Masculino</option>
							<option>Feminono</option>
							<option>Indefinido</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="">Profissão</label>
						<div class="date" data-provide="">
							<input type="text" name="textProfissao" id="textProfissao" class="form-control" placeholder="Profissão">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Telefone</label>
						<input type="text" name="textTelefone" class="form-control" id="textTelefone" placeholder="(99) 9999-9999">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Celular</label>
						<input type="text" name="textCelular" class="form-control" id="textCelular" placeholder="(99) 9 9999-9999">
					</div>
					<div class="form-group col-md-4">
						<label for="">E-mail</label>
						<div class="date" data-provide="">
							<input type="email" name="textEmail" id="textEmail" class="form-control" placeholder="email@email.com">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">CEP</label>
						<input type="text" name="textCep" class="form-control" id="textCep" placeholder="00000-000">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Endereço</label>
						<input type="text" name="textEndereco" class="form-control" id="textEndereco" placeholder="Endereço">
					</div>
					<div class="form-group col-md-4">
						<label for="">Número</label>
						<div class="date" data-provide="">
							<input type="text" name="textNumero" id="textNumero" class="form-control" placeholder="número">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Complemento</label>
						<input type="text" name="textComplemento" class="form-control" id="textComplemento" placeholder="Complemento">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Bairro</label>
						<input type="text" name="textBairro" class="form-control" id="textBairro" placeholder="Bairro">
					</div>
					<div class="form-group col-md-4">
						<label for="">Cidade</label>
						<div class="date" data-provide="">
							<input type="text" name="textCidade" id="textCidade" class="form-control" placeholder="Cidade">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Estado</label>
						<input type="text" name="textEstado" class="form-control" id="textEstado" placeholder="Estado">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-12">
						<label for="exampleFormControlTextarea1">Observação</label>
						<textarea class="form-control" name="textObservacao" id="exampleFormControlTextarea1" rows="3" placeholder="Observação" style="overflow: auto; resize: vertical;"></textarea>
					</div>
				</div>


				<div class="text-center">

					<input type="submit" name="btCadastrar" id="btCadastrar" class="btn btn-md btn-success" value="Cadastrar" />
					<input type="reset" name="btLimpar" id="btbtLimparCadastrar" class="btn btn-md btn-default" value="Limpar" />

				</div>
			</form>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../../assets/javascripts/bootstrap-datepicker.js"></script>
	<script src="../../assets/javascripts/bootstrap-datepicker.pt-BR.js"></script>
	<script src="../../assets/javascripts/application.js"></script>


</body>
</html>
