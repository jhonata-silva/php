<?php 

    class ProdutoEstoque{
        private static $estoque = [];
        private $quantidade;
        private $id;
        private $nomeProduto;
        private $descricao;
        private $preco;

        public function __construct($nomeProduto, $quantidade, $descricao, $preco)
        {
            $this->id = count(self::$estoque) + 1;
            self::$estoque[$this->id] = $this;
            
            $this->quantidade = $quantidade;
            $this->nomeProduto = $nomeProduto;
            $this->descricao = $descricao;
            $this->preco = $preco;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }
        public function setQuantidade($quant){
            $this->quantidade = $quant;
        }

        public function getNomeProduto() {
            return $this->nomeProduto;
        }
        public function getDescricao() {
            return $this->descricao;
        }
        public function getPreco() {
            return $this->preco;
        }

        public static function getEstoque() {
            return self::$estoque;
        }

    
    }

?>