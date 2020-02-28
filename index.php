<?php

//chama o autoload
require_once("config.php");

//---Load only one user
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//---Load a list from users table
//---The static method getList allows to get values without $this->
//$lista = Usuario::getList();
//echo json_encode($lista);

//---Load a user's list searching by login
//$search = Usuario::search("jo");
//echo json_encode($search);

//---Load a user using a login/senha
$usuario = new Usuario;
$usuario->login("root","123456");

echo $usuario;
//---instancia novo objeto
//$sql = new Sql();
//---seleciona todos os usuarios da tabela
//---somente passou o $rawQuery, sem pedir por mais parâmetros
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
 ?>
