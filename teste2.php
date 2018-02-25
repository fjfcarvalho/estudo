<?php
$con = new PDO("mysql:host=127.0.0.1:3306;dbname=membros", "root", "vsferfer");
$sql = 'SELECT * FROM membros.pessoa order by nome';
foreach ($con->query($sql) as $row) {
    echo "ID: ".$row['idpessoa'] . "<br />";
    echo "Nome: ".$row['nome'] . "<br />";
    echo "E-Mail: ".$row['email'] . "<br />";
}
?>

