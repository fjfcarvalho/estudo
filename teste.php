<?php
$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
$stmt = $con->prepare("INSERT INTO membros.pessoa(nome, email) VALUES(?,?)");
$nome = "Felicia Santa";
$email = "mariaf@teste.com";
$stmt->bindParam(1,$nome,PDO::PARAM_STR, 45);
$stmt->bindParam(2,$email,PDO::PARAM_STR, 45);
$stmt->execute();
?>
