<?php 
include 'Pessoa.php';

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho($setor){
        $this->setSetor($setor);
    }

    

    /**
     * Geter e Setters
     */ 
    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }

    public function getSetor(){
        return $this->setor;
    }
 
    public function setSetor($setor) {
        $this->setor = $setor;
    }
}

?>