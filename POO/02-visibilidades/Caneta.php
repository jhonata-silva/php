<?php 
//Feito por: Cicero Jhonata
// Aplciando diferentes visibilidades na classe Caneta

class Caneta {
    public $Modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada == true){
            return 'Erro, a caneta está tampada';
        } else {
            return 'Rabisco';
        }
    }

    private function tampar(){
        $this->tampada = true;
    }
    private function destampar(){
        $this->tampada = false;
    }
}


?>