<?php 

require_once 'Lutador.php';

class Luta {
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    /**
     * Metodos
     */ 
    public function marcarLuta($desafiante, $desafiado){
        if($desafiante->getCategoria() == $desafiado->getCategoria() && $desafiante != $desafiado){
            $this->setAprovada(true);
            $this->setDesafiado($desafiado);
            $this->setDesafiante($desafiante);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar($desafiante, $desafiado){
        if ($this->getAprovada()) {
            $desafiante->apresentar();
            $desafiado->apresentar();

            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 1: //Empate
                    echo "<p>Empatou!</p>";
                    $desafiante->empatarLuta();
                    $desafiado->empatarLuta();
                    break;
                case 2: //Ganhou Desafiante
                    echo "<p>". $desafiante->getNome() . " venceu";
                    $desafiante->ganharLuta();
                    $desafiado->perderLuta();
                    break;
                case 2: //Ganhou Desafiado
                    echo "<p>". $desafiado->getNome() . " venceu";
                    $desafiante->perderLuta();
                    $desafiado->ganharLuta(); 
                    break;
                default:
            }
        } else {
            echo "<p>Luta não pode Acontecer</p>";
        }
    }

    /**
     * Get e Setters
     */ 
    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return $this;
    }

    public function getDesafiante()   {
        return $this->desafiante;
    }
 
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
        return $this;
    }
}

?>