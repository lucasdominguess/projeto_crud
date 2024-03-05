<?php 
require 'Sql.php';

$nome = $_POST['name'];
$nascimento = $_POST['data'];




$db = new Sql(); 
$stmt=$db->query("insert into estagiario(nome,nascimento) values('$nome','$nascimento')");


