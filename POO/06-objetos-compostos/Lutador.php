<?php  

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $derrotas;
    private $empates;
    private $vitorias;

    //Metodos

    public function apresentar(){
        echo "<p>-----------------------------</p>";
        echo "<p>CHEGOU A HORA!!!!<br>";
        echo "<br> Diretamente da " . $this->getNacionalidade();
        echo ",<br>Tendo " . $this->getIdade() . " Anos de idade,<br>";
        echo "Medindo" . $this->getAltura() . " M de altura,<br>";
        echo "Pesando " . $this->getPeso() . " Kilos,<br>";
        echo "<br> Ele que tem " . $this->getVitorias() . " Vitorias, ";
        echo $this->getDerrotas() . " derrotas e ";
        echo  $this->getEmpates() . " empates";
        echo "<br><br>O lutador " . $this->getNome();     
    }
    public function status(){
        echo "<br>------------------------------------<br>"; 
        echo $this->getNome() . ": <BR>É um peso " . $this->getCategoria();
        echo ", já ganhou " . $this->getVitorias();
        echo ($this->getEmpates()==1)? " vez, " : "  vezes, "; 
        echo " tem " . $this->getDerrotas();
        echo ($this->getEmpates()==1)? " derrota" : "  derrotas";  
        echo " e " . $this->getEmpates();
        echo ($this->getEmpates()==1)? " empate" : "  empates";  

    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        return "<p> {$this->getNome()} ganhou uma luta</p>";
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        return "<p>{$this->getNome()} perdeu uma luta</p>";
    }
    public function  empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        return "<p>{$this->getNome()} empatou uma luta</p>";
    }


    /**
     * GETTERS E SETTERS
     */ 

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getEmpates()  {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
        return $this;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
 
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria()   {
        if ($this->getPeso() < 5.2) {
            $this->categoria = "<p>Inválido</p>";
        } else if ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } else if ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "<p>Inválido</p>";
        }
    }
 
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getAltura(){
        return $this->altura;
    }
 
    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }

    public function getIdade()   {
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
        return $this;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }
 
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
}

?>