<?php 

class Pessoa { 

    public function __construct(public readonly string $nome,
    public readonly string $data)
    {
        $this->validaNome();
        $this->validaData();
    }
    
    private function validaNome():void
    { 
        if($this->nome==''){
               throw new \Exception("Nome Invalido!");
        }

    }
    private function validaData():void
    {
        if (!preg_match("//im", $this->data)) {
            throw new Exception("Erro! Data inválida.");
        }
    }
}