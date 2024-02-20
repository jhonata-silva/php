<?php
namespace Jhonata\CadastroProduto\Core\Entidades;

class Produto {

    public function __construct($_id = 0, $_nome = "", $_descricao = "", $_quantidade = "", $_preco = 0) {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->descricao = $_descricao;
        $this->quantidade = $_quantidade;
        $this->preco = $_preco;
        
    }

    public $id;
    public $nome;
    public $descricao;
    public $quantidade;
    public $preco;

    private static $lista = [];
}
