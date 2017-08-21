<?php 
	include "../Persistence/ConnectionDB.php";

	class ProductDAO{
		private $connection = null;

		public function __construct(){
			$this->connection = ConnectionDB::getInstance();
		}

		public function insertProduct($product){
			try {
				$status = $this->connection->prepare("Insert Into products(id, descricao, cod_referencia, marca)"
					. "values(null,?,?,?)");

				$status->bindValue(1, $product->descricao);
				$status->bindValue(2, $product->cod_referencia);
				$status->bindValue(3, $product->marca);
				$status->execute();
				// echo "Conectou!";

				$this->connection = null;
			} catch (Exception $e) {
				echo "Ocorreram erros ao inserir novo produto!";
			}
		}
	}

 ?>