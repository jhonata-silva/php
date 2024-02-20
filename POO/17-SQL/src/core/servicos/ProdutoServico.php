<?php

namespace Jhonata\CadastroProduto\Core\Servicos;

use Jhonata\CadastroProduto\Core\Entidades\Produto;
use Jhonata\CadastroProduto\Database\Repositorios\MysqlRepositorio;

class ProdutoServico {
    private $repo;

    public function __construct() {
        $this->repo = new MysqlRepositorio();
    }

    public function salvar(Produto $produto) {
        $query = "
            INSERT INTO produtos (nome, descricao, preco, quantidade) 
            VALUES (
                '{$this->removeAspasSimples($produto->nome)}', 
                '{$this->removeAspasSimples($produto->descricao)}', 
                {$this->removeAspasSimples($produto->preco)}, 
                {$this->removeAspasSimples($produto->quantidade)}
            )";

        $this->repo->salvar($query);
    }

    public function todos() : array {
        $query = "select * from produtos";
        $dados = $this->repo->todos($query);

        $produtos = [];
        foreach ($dados as $dado){
            $produtos[] = new Produto($dado["id"], $dado["nome"], $dado["descricao"], $dado["preco"], $dado["quantidade"]);
        }

        return $produtos;
    }

    public function buscaPorId(int $id) : ?Produto {
        $query = "select * from produtos where id = " . $id;
        $dados = $this->repo->todos($query);

        if (count($dados) < 1) {
            return null;
        }

        $dado = $dados[0];
        return new Produto($dado["id"], $dado["nome"], $dado["descricao"], $dado["preco"], $dado["quantidade"]);
    }

    private function removeAspasSimples($input) {
        return str_replace("'", "", $input);
    }
}
