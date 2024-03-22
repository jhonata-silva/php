<?php 
class Equipe{
    private $nome;
    private $cargo;
    private $contato;

    

    /**
     * Get Set e COnstrutor
     */ 

    public function __construct($_nome, $_cargo, $_contato) {
        $this->nome = $_nome;
        $this->cargo = $_cargo;
        $this->contato = $_contato;
    }
    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

?>