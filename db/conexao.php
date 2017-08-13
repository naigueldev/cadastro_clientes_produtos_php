<?php


// $servername = "localhost";
// $username = "username";
// $password = "password";

// $conn = new mysqli($servername, $username, $password);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "sis_naiguel_php";

try {
	$conn = new PDO("mysql:host=$host;dbname=$banco", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Conectado com sucesso"; 
}
catch(PDOException $e)
{
	echo "Conexão falhou: " . $e->getMessage();
}

