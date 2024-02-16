<?php 
//Feito por: Cicero Jhonata
// Aplicando Getters e Setters

class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;

    public function __construct(){
          $this->tampada = true;
    }
    
   public function getModelo(){
        return $this->modelo;
   }
   public function getPonta(){
        return $this->ponta;
   }

   public function setModelo($modelo){
        $this->modelo = $modelo;
   }
   public function setPonta($ponta) {
        $this->ponta = $ponta;
   }

    public function getTampada()
    {
        return $this->tampada;
    }

    public function setTampada($tampada)
    {
        $this->tampada = $tampada;

        return $this;
    }
}
?>
