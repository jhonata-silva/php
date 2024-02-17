<?php

function init(){
        limpaTela();
        echo "Menu:\n";
        echo verde("1. Adicionar produto\n");
        echo amarelo("2. Realizar saída do estoque\n");
        echo azul("3. Listar produtos\n");
        echo vermelho("4. Sair\n");
        echo "Opção escolhida: ";
        $opcao = intval(trim(fgets(STDIN))); // Converte para inteiro e remove espaços em branco

        switch ($opcao) {
            case 1:
                adicionarProduto();
                break;
            case 2:
                realizarSaida();
                break;
            case 3:
                listarProdutos();
                break;
            case 4:
                exit(0);
            default:
                echo "Opção inválida.\n";
        }
}


?>