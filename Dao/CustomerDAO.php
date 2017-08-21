<?php 
	include "../Persistence/ConnectionDB.php";

	class CustomerDAO{
		private $connection = null;

		public function __construct(){
			$this->connection = ConnectionDB::getInstance();
		}

		public function insertCustomer($customer){
			try {
				$status = $this->connection->prepare("Insert Into customers(id, nome_completo, nascimento, cpf, sexo, profissao, telefone, celular, email, cep, endereco, numero, complemento, bairro, cidade, estado, observacao)"
					. "values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

				$status->bindValue(1, $customer->nome_completo);
				$status->bindValue(2, $customer->nascimento);
				$status->bindValue(3, $customer->cpf);
				$status->bindValue(4, $customer->sexo);
				$status->bindValue(5, $customer->profissao);
				$status->bindValue(6, $customer->telefone);
				$status->bindValue(7, $customer->celular);
				$status->bindValue(8, $customer->email);
				$status->bindValue(9, $customer->cep);
				$status->bindValue(10, $customer->endereco);
				$status->bindValue(11, $customer->numero);
				$status->bindValue(12, $customer->complemento);
				$status->bindValue(13, $customer->bairro);
				$status->bindValue(14, $customer->cidade);
				$status->bindValue(15, $customer->estado);
				$status->bindValue(16, $customer->observacao);
				$status->execute();
				// echo "Conectou!";

				$this->connection = null;
			} catch (Exception $e) {
				echo "Ocorreram erros ao inserir novo cliente!";
			}
		}
	}

 ?>