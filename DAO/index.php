<?php

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario();




/*
//Alterar um usuário
$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("Professor", "professor123");

echo $usuario;

/*

//cria usuarios

/*
require_once("config.php");

$aluno = new Usuario("Aluno", "@luno");

$aluno->insert();

echo $aluno;
*/


//carrega um usuário usando o login e a senha

/*
$usuario = new Usuario();

$usuario->login("user","12345");

echo $usuario;
*/

//Carrega uma lista buscando pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/



//Carrega um usuário
/*
$root = new Usuario();

$root->loadById(5);

echo $root;
*/

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


?>