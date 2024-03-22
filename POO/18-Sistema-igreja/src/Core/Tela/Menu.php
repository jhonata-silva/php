<?php

class Menu {
    public static function init(){
        while (true) {
            limpaTela();
            echo "Menu:\n";
            echo self::verde("1. Adicionar Igreja\n");
            echo self::amarelo("2. Realizar saída de Igreja\n");
            echo self::azul("3. Listar Igrejas\n");
            echo self::vermelho("4. Sair\n");
            $opcao = readline("Escolha uma opção: ");

            switch ($opcao) {
                case 1:
                    adicionarIgreja();
                    break;
                case 2:
                    realizarSaida();
                    break;
                case 3:
                    listarIgrejas();
                    break;
                case 4:
                    exit(0);
                default:
                    echo "Opção inválida.\n";
            }
        }
    }

    private static function verde($texto){
        return "\033[32m{$texto}\033[0m";
    }

    private static function amarelo($texto){
        return "\033[33m{$texto}\033[0m";
    }

    private static function azul($texto){
        return "\033[34m{$texto}\033[0m";
    }

    private static function vermelho($texto){
        return "\033[31m{$texto}\033[0m";
    }
}
