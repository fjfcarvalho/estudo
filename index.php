<?php

require_once("config.php");

// $sql = new Sql();

// $pessoas = $sql->select("SELECT * FROM membros.pessoa");

// echo json_encode($pessoas);

// $pessoa = new Pessoa();
// $pessoa->loadById(4);
// echo $pessoa;

// $pessoa = Pessoa::getLista();
// echo json_encode($pessoa);

$pessoa = Pessoa::pesquisa("Artemia");
echo json_encode($pessoa);
?>