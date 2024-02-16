<?php 
include 'IControlador.php';

/*
*Feito Por: Jhonata Silva
*Estudo de Encapsulamento com Interfaces
*/

class ControleRemoto implements IControlador{
    private $volume;
    private $ligado;
    private $tocando;


    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    //Sobreescrevendo metodos da interface

    public function ligar(){
        $this->setLigado(true);
        echo "<p>Ligaaaando<br>LIGADO</p>";
    }
    public function desligar(){
        $this->setLigado(false);
        echo "<p>encerrando</p>";
    }
    public function abrirMenu(){
        echo "-----------MENU-----------";
        echo "<br>Está ligado?: " . ($this->getLigado()? "SIM" : "NÃO");
        echo "<br>Está Tocando?: " . ($this->getTocando()? "SIM" : "NÃO");

        echo "<br> Volume: " . $this->getVolume() . " ";
        for ($i = 0; $i < $this->getVolume(); $i++){
            echo "|";
        }
    }
    public function fecharMenu(){
        if($this->getLigado()){
            echo "<p>Menu Fechado</p>";
        }
    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if($this->getLigado()){
            $this->setVolume(0);
            echo "<p>Volume: {$this->getVolume()}</p>";
        }
    }
    public function desligarMudo(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 50);
            echo "<p>Volume: {$this->getVolume()}</p>";
        }
    }
    public function play(){
        if($this->getLigado()){
            $this->setTocando(true);
        }
    }
    public function  pause(){
        $this->setTocando(false);
    }

    //GETTER E SETTERS
    private function getTocando()    {
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
        return $this;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
        return $this;
    }

    private function getVolume()    {
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
        return $this;
    }
}

?>