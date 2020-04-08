<?php


require_once ("config.php");



/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); 
*/

//carrega um usuario, basta informar o ID
//$root = new Usuario();
//$root->loadById(6);
//echo $root;


// Carrega lista de usuarios
//$lista = Usuario:: getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario:: search("a");
//echo json_encode($search);


//Carrega usuario, usando login e senha
//$usuario = new Usuario();
//$usuario->login("mano","mano");
//echo $usuario;

//inser de um usuario novo
//$aluno = new Usuario("CARAI","Cacete");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","minhabola123");

echo $usuario;















?>