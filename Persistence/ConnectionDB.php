<?php 
	/**
	* 
	*/
	class ConnectionDB extends PDO
	{
		private static $instance = null;


		function ConnectionDB($dsn, $usuario, $senha)
		{
			parent::__construct($dsn, $usuario, $senha);
		}
		public static function getInstance(){
			if (!isset(self::$instance)) {
				try {
					// cria uma conexão e retorna a instancia dela

					self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost","root","");
					echo "Conectado ao banco ao banco de dados";
					echo "<script> console.log('Conectado ao banco ao banco de dados') </script>";

				} catch (Exception $e) {
					echo "Ocorreram erros ao testar conectar no banco de dados!";
					echo "$e";
					exit();
				}
			}
			return self::$instance;
		}
	}

 ?>