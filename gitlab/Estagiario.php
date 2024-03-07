<?php 
require 'Pessoa.php';

class Estagiario extends Pessoa { 

    public function __construct($nome,$data)
    {
        parent::__construct($nome,$data);
    
    }


}