<?php 
/*
Feito Por: Jhonata Silva

Fixando principios básicos de POO vistos anteriormente, 
criação de classe e instaciação de objetos; entendendo visibilidade; criação de metodos getters, setters e construtor.
*/


class ContaBanco {
    public $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo '<p>Conta Criada com Sucesso</p>';
    }

    public function abrirConta($t){
        $this->setTipo(true);
        $this->setStatus(true);
        if ($t == 'CC'){
            $this->setSaldo(50);
        } else if ($t == 'CP') {
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo '<p>Conta com dinheiro</p>';
        } else if ($this->saldo < 0) {
            echo '<p>Conta em débito</p>';
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($valor){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            //$this->saldo =+ $valor;
        } else {
            echo "<p>Conta inativa, Não é possivel depositar.<p>";
        }
        
    }

    public function sacar($valor){
        if ($this->getStatus()) {
            if ($this->getSaldo() < $valor) {
                echo "<p>Saldo Insuficiente</p>";
            } else {
                $this->setSaldo($this->getSaldo() - $valor);
                //$this->saldo =- $valor;
            }
        } else {
            echo "<p>Conta Inativa, Não é possivel sacar</p>";
        }
    }

    public function pagarMensal(){
        if ($this->getTipo() == 'CC') {
            $valor = 12;
        } else if ($this->getTipo() == 'CP'){
            $valor = 20;
        }

        if($this->getStatus()){
            if ($this->getSaldo() < $valor) {
                echo "<p>Saldo Insuficiente</p>";
            } else {
                $this->setSaldo($this->getSaldo() - $valor);
                //$this->saldo =- $valor;
            }
        } else {
            echo "<p>Conta Inativa, Não é possivel cobrar</p>";
        }
        
    }

    // GETTERS E SETTERS
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono)   {
        $this->dono = $dono;
        return $this;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
        return $this;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
        return $this;
    }
}

?>