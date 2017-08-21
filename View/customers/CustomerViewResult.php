<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente efetuado</title>

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
			if (isset($_SESSION['nome_completo']) && 
				isset($_SESSION['nascimento']) && 
				isset($_SESSION['cpf']) &&
				isset($_SESSION['sexo']) &&
				isset($_SESSION['profissao']) &&
				isset($_SESSION['telefone']) &&
				isset($_SESSION['celular']) &&
				isset($_SESSION['email']) &&
				isset($_SESSION['cep']) &&
				isset($_SESSION['endereco']) &&
				isset($_SESSION['numero']) &&
				isset($_SESSION['complemento']) &&
				isset($_SESSION['bairro']) &&
				isset($_SESSION['cidade']) &&
				isset($_SESSION['estado']) &&
				isset($_SESSION['observacao'])
			) { ?>


			<div class="row">
					<div class="form-group col-md-4">
						<label for="">Nome Completo</label>
						<input type="text" name="textNomeCompleto" class="form-control" id="textNomeCompleto" value="<?php echo $_SESSION['nome_completo'] ?>" readonly="true">
					</div>
					<div class="form-group col-md-4">
						<label for="">Data de Nascimento</label>
						<div class="date" data-provide="">
							<input type="text" name="textDataNascimento" id="textDataNascimento" class=" form-control" value="<?php echo $_SESSION['nascimento'] ?>" readonly="true">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">CPF</label>
						<input type="text" name="textCpf" class="form-control" id="textCpf"  value="<?php echo $_SESSION['cpf'] ?>" readonly="true">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">

						<label for="exampleFormControlSelect1">Sexo</label>
						<input type="text" name="textCpf" class="form-control" id="textCpf"  value="<?php echo $_SESSION['sexo'] ?>" readonly="true">
					</div>
					<div class="form-group col-md-4">
						<label for="">Profissão</label>
						<div class="date" data-provide="">
							<input type="text" name="textProfissao" id="textProfissao" class="form-control" value="<?php echo $_SESSION['profissao'] ?>" readonly="true">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Telefone</label>
						<input type="text" name="textTelefone" class="form-control" id="textTelefone" value="<?php echo $_SESSION['telefone'] ?>" readonly="true">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Celular</label>
						<input type="text" name="textCelular" class="form-control" id="textCelular" value="<?php echo $_SESSION['celular'] ?>" readonly="true">
					</div>
					<div class="form-group col-md-4">
						<label for="">E-mail</label>
						<div class="date" data-provide="">
							<input type="email" name="textEmail" id="textEmail" class="form-control" value="<?php echo $_SESSION['email'] ?>" readonly="true">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">CEP</label>
						<input type="text" name="textCep" class="form-control" id="textCep" value="<?php echo $_SESSION['cep'] ?>" readonly="true">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Endereço</label>
						<input type="text" name="textEndereco" class="form-control" id="textEndereco" value="<?php echo $_SESSION['endereco'] ?>" readonly="true">
					</div>
					<div class="form-group col-md-4">
						<label for="">Número</label>
						<div class="date" data-provide="">
							<input type="text" name="textNumero" id="textNumero" class="form-control" value="<?php echo $_SESSION['numero'] ?>" readonly="true">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Complemento</label>
						<input type="text" name="textComplemento" class="form-control" id="textComplemento" value="<?php echo $_SESSION['complemento'] ?>" readonly="true">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="">Bairro</label>
						<input type="text" name="textBairro" class="form-control" id="textBairro" value="<?php echo $_SESSION['bairro'] ?>" readonly="true">
					</div>
					<div class="form-group col-md-4">
						<label for="">Cidade</label>
						<div class="date" data-provide="">
							<input type="text" name="textCidade" id="textCidade" class="form-control" value="<?php echo $_SESSION['cidade'] ?>" readonly="true">
						</div>
					</div>

					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Estado</label>
						<input type="text" name="textEstado" class="form-control" id="textEstado" value="<?php echo $_SESSION['estado'] ?>" readonly="true">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-12">
						<label for="exampleFormControlTextarea1">Observação</label>
						<textarea class="form-control" name="textObservacao" id="exampleFormControlTextarea1" rows="3" value="<?php echo $_SESSION['observacao'] ?>" readonly="true" style="overflow: auto; resize: vertical;"></textarea>
					</div>
				</div>

			<?php }?>
		</div>
	</div>
</body>
</html>

<?php 
if(isset($_SESSION['nome_completo']) && 
	isset($_SESSION['nascimento']) && 
	isset($_SESSION['cpf']) &&
	isset($_SESSION['sexo']) &&
	isset($_SESSION['profissao']) &&
	isset($_SESSION['telefone']) &&
	isset($_SESSION['celular']) &&
	isset($_SESSION['email']) &&
	isset($_SESSION['cep']) &&
	isset($_SESSION['endereco']) &&
	isset($_SESSION['numero']) &&
	isset($_SESSION['complemento']) &&
	isset($_SESSION['bairro']) &&
	isset($_SESSION['cidade']) &&
	isset($_SESSION['estado']) &&
	isset($_SESSION['observacao'])){
	

	unset($_SESSION['nome_completo']);
	unset($_SESSION['nascimento']);
	unset($_SESSION['cpf']);
	unset($_SESSION['sexo']);
	unset($_SESSION['profissao']);
	unset($_SESSION['telefone']);
	unset($_SESSION['celular']);
	unset($_SESSION['email']);
	unset($_SESSION['cep']);
	unset($_SESSION['endereco']);
	unset($_SESSION['numero']);
	unset($_SESSION['complemento']);
	unset($_SESSION['bairro']);
	unset($_SESSION['cidade']);
	unset($_SESSION['estado']);
	unset($_SESSION['observacao']);


}
?>