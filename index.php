<?php 
require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
// Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega um lista de usuário

//$lista = Usuario::getList(); // como o metodo é estático não precisa estanciare e chama direto
//echo json_encode($lista);

//Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);


//Carrega um usuario usando login e senha

$usuario = new Usuario();
$usuario->login("root","67898");
echo $usuario;

?>