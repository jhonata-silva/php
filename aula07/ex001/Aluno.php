<?php 

//Cadastro de Alunos
//Namespace: Escola\Registro
//Crie uma classe chamada Aluno. Esta classe deve conter propriedades para matricula, nome, email e dataNascimento.
//O número de matrícula deve ser gerado automaticamente e deve ser incrementado a cada novo aluno registrado. Utilize propriedades e métodos estáticos para isso.
//O construtor da classe deve aceitar os parâmetros nome, email e dataNascimento.
//A classe deve possuir um método adicionar que adicionará o aluno atual a uma lista estática de alunos registrados.
//A classe também deve possuir um método estático getTodosAlunos que retornará a lista de alunos registrados.
    
    class Aluno{
        private static $listaAluno = [];
        private $matricula;
        private $nome;
        private $email;
        private $dataNascimento;

        public function __construct($nome, $email, $dataNascimento)
        {
            $this->matricula = count(self::$listaAluno) + 1;
            self::$listaAluno[$this->matricula] = $this;
            
            $this->nome = $nome;
            $this->email = $email;
            $this->dataNascimento = $dataNascimento;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public static function getTodosAlunos() {
            return self::$listaAluno;
        }

    
    }

?>