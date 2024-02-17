<?php 
include 'Pessoa.php';

class Professor {
    private $especidalidade;
    private $salario;

    public function receberAumento($aumento){
        $this->setSalario($aumento);
    }


    /**
     * Get e Set
     */ 
    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getEspecidalidade() {
        return $this->especidalidade;
    }

    public function setEspecidalidade($especidalidade)  {
        $this->especidalidade = $especidalidade;
    }
}


?>