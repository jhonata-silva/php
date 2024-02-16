<?php 

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario(){
        $this->setIdade($this->getIdade() + 1);
    }



    /**
     * Getter e Setters
     */ 
    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }
 
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /** 
    *public function __construct($nome, $idade, $sexo){
    *    $this->nome = $nome;
    *    $this->idade = $idade;
    *    $this->sexo = $sexo;
    *}
    */
}

?>