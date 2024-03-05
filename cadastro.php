<?php 
require 'Sql.php';
require 'Estagiario.php';

$nome = $_POST['name'];
$data = $_POST['data'];


$cad = new Estagiario($nome,$data);
// if (!$cad->validaDados($nome,$data)){ 
    
// }



$db = new Sql(); 
$stmt=$db->query("insert into estagiario(nome,nascimento) values('$nome','$data')");


