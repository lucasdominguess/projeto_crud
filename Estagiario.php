<?php 


class Estagiario { 

    public function __construct(public readonly string $nome , public readonly string $data)
    {
        // echo $nome,$data ; 
       $this->validaDados($nome,$data); 
    }

    public function validaDados($nome,$data){ 
        if($nome=='' && $data=='' ){
            echo "Dados invalidos";
            // throw new \Exception("Erro");
            exit();
        }
       
    }
    
}