<?php 
include 'ProdutoEstoque.php';

//instacias da classe ProdutoEstoque
$produto01 = new ProdutoEstoque('Notebook', 2,'Notebook Lenovo 15110', 'R$ 3500,00');
$produto02 = new ProdutoEstoque('Celular', 5, 'Xiaome Redmi note 10', 'R$ 2100,00');

//implementação dos métodos get e set de Quantidades 
/*
echo "{$produto01->getQuantidade()}\n";            
$produto01->setQuantidade(100);
echo "{$produto01->getQuantidade()}";  
*/

//implementação do metodo statico de estoque
$estoque = ProdutoEstoque::getEstoque();
foreach ($estoque as $id => $produto) {
    echo "Produto {$id}: \nNome: - {$produto->getNomeProduto()}, \nDescrição: - {$produto->getDescricao()}, \nPreço: {$produto->getPreco()}\n\n";
}

?>