<?php 
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    private $bairro;
    private $cep;
    private $estado;
    private $pais;

    

    /**
     * Get Set e construtor
     */ 
    public function __construct($_logradouro, $_numero, $_cidade, $_bairro, $_cep, $_estado, $_pais) {
        $this->logradouro = $_logradouro; 
        $this->numero = $_numero; 
        $this->cidade = $_cidade; 
        $this->bairro = $_bairro; 
        $this->cep = $_cep;
        $this->estado = $_estado; 
        $this->pais = $_pais;
    }
    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }
}

?>