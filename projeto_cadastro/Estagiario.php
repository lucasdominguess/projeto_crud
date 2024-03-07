<?php 
require 'Pessoa.php';


class Estagiario extends Pessoa
    {
        public function __construct($nome, $data) 
        {
            parent::__construct($nome,$data);
        }

}
        // private function setNome($nome) {
           


        // private function setData($data) {
        //     if (!preg_match("/^[0-9\-]{10}$/im", $data)) {      //Se for != disso E tiver menos que 18 anos ou mais de 50 anos
        //         throw new Exception("Erro! Data inválida.");    //Estoura erro na tela
        //     }
        //     $this->data = $data;
        // }

        // function __getNome(int $nome){
        //     if ($nome === "nome") {
        //         return $this->nome;
        //     } else {
        //         echo " Propriedade '$nome' não existe! ";
        //     }
        // }

        // function __getData(int $data){
        //     if ($data === "data") {
        //         return $this->data;
        //     } else {
        //         echo " Propriedade '$data' não existe! ";
        //     }
        // }

    //     // Set

    //     function __setNome(string $nome, mixed $valor) {
    //         if ($nome === "nome") {
    //             $this->nome = ucwords($valor);
    //         } else {
    //             echo " Propriedade '$nome' não existe! ";
    //         }
    //     }

    //     function __setData(int $data, mixed $valor) {
    //         if ($data === "data") {
    //             $this->data = $valor;
    //         } else {
    //             echo " Propriedade '$data' não existe ";
    //         }
    //     }
    // }