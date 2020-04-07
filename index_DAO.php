<?php


require_once ("config.php");


/*
//caga pra isso aqui.. foi feito na primeira aula

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios); 

*/


$root = new Usuario();

$root->loadById(5);

echo $root;






























?>