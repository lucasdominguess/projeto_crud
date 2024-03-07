<?php

require'Sql.php';

$db1 = new Sql();

$stmt=$db1->query('select * from estagiario');
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
$resultado = json_encode($resultado); 
