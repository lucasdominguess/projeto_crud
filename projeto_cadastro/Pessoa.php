<?php 

class Pessoa { 

    public function __construct(public readonly string $nome,
    public readonly string $data)
    {
        $this->validaNome();
        $this->validaData();
    }
    private function validaNome():void {
        
         if (!preg_match("/^[a-z\s?]{3,}$/im",$this->nome)) {   //Regex para validar formado de nome com min. de 3
        throw new Exception("Erro! Nome inválido."); 
      }
     
    }
   
    private function validaData():void {

        if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/im", $this->data)) {     //Regex para validar formato YYYY-MM-DD
           throw new Exception("Erro! Formato de data inválida.");  
            exit();
        }
        $this->validaRegra();
    }

    private function validaRegra():void {  
            
        $data1 = new DateTime($this->data);
        $data2 = new DateTime('now', new DateTimeZone('America/Sao_Paulo')); 

        // $data_br = $data2->format('Y-m-d'); 

        $intervalo = $data1->diff($data2);
        $resultado = $intervalo->format("%a");
        $resultado = $resultado/365.25;
        $res= intval($resultado);
        if($res >= 18 && $res < 50){
          
        } else {
            throw new Exception("Idade invalida."); 
        }
    }
}