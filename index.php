<?php

//chama o autoload
require_once("config.php");

//instancia novo objeto
$sql = new Sql();

//seleciona todos os usuarios da tabela
//somente passou o $rawQuery, sem pedir por mais parâmetros
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
 ?>
