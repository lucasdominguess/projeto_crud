<?php 


class Sql extends \PDO{
    public function __construct()
    {
        parent::__construct('mysql:dbname=db_estagiarios;host=localhost','root','');
    }

}



// var_dump($resultado); 