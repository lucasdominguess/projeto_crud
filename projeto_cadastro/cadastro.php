<?php 
require 'Sql.php';
require 'Estagiario.php';

$nome = $_POST['nome'];
$data = $_POST['data_nascimento'];



try {
    $cad = new Estagiario($nome,$data);
  
} catch (\Throwable $th) {

    $resposta =['status'=>'fail','msg'=>$th->getMessage()];
    $re_json= json_encode($resposta);
    echo $re_json ; 
   
    exit();
}


$db = new Sql(); 
$stmt=$db->query("insert into estagiarios(nome,data_nascimento) values('$nome','$data')");

$resposta =['status'=>'ok','msg'=>"Cadastro realizado!"];
$re_json= json_encode($resposta);
echo $re_json ; 
