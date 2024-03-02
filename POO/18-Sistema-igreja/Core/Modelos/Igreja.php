<?php
namespace Core\Modelos;

class Igreja {
    private $id;
    private $comunidade;
    private $descricao;
    private $email;
    private $endereco;
    private $equipe;

    // Inicialização da lista no início da classe
    private static $lista = [];

    public function __construct() {
    }

    public function adicionar() {
        if (!isset($this->id)) {
            $this->id = count(self::$lista) + 1;
        }

        self::$lista[] = $this;
    }

    public static function lista() {
        return self::$lista;
    }

    public static function buscaPorId($id) {
        foreach (self::$lista as $igreja) {
            if ($igreja->getId() == $id) {
                return $igreja;  // Retorna o objeto igreja, não apenas o ID
            }
        }

        return null;
    }

    public static function removerIgreja($igreja) {
        $key = array_search($igreja, self::$lista, true);
        if ($key !== false) {
            unset(self::$lista[$key]);
        }
    }

    // Métodos de acesso (getters e setters) que você pode manter conforme necessário
    public function setEquipe($equipe) {
        $this->equipe = $equipe;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setComunidade($comunidade) {
        $this->comunidade = $comunidade;
    }

    public function getEquipe() {
        return $this->equipe;
    }
 
    public function getEndereco() {
        return $this->endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getComunidade() {
        return $this->comunidade;
    }

    public function getId() {
        return $this->id;
    }
}
?>
