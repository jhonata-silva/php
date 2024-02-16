<?php
include 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    /**
     * metodos
     */
    public function cancelarMatricula(){
        $this->setMatricula(false);
    }

    /**
     * Getter e Setters
     */
    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    
}
