<?php
use Core\Modelos\Igreja;

function adicionarIgreja() {
    limpaTela();
    $igreja = new Igreja();
    $igreja->setComunidade(readline("Qual o nome do igreja: "));
    $igreja->setDescricao(readline("Qual a descrição da igreja: "));
    $igreja->setEmail(readline("Qual o Email da Igreja: "));
    $igreja->setEndereco(readline("Qual o endereço: "));
    $igreja->setEquipe(readline("Qual o nome do pastor: "));
    $igreja->adicionar();
    echo "\033[32migreja adicionado com sucesso!\033[0m\n";
}

function realizarSaida() {
    limpaTela();

    $id = readline("Código da igeja para saída: ");
    $igrejaParaRemover = Igreja::buscaPorId($id);


    if(isset($igrejaParaRemover)){
        Igreja::removerIgreja($igrejaParaRemover);
        echo "[32mSaída realizada com sucesso.\033[0m";
    }
    else{
        echo "\033[31mIgreja não encontrado!\033[0m\n";
        $opcao = continuar();
        if($opcao == "s") realizarSaida();
    }
}

function listarIgrejas() {
    limpaTela();
    echo "Lista de Igrejas:\n";

    foreach (Igreja::lista() as $igreja) {
        echo "ID: " . $igreja->getId() . "\n";
        echo "Comunidade: " . $igreja->getComunidade() . "\n";
        echo "Descrição: " . $igreja->getDescricao() . "\n";
        echo "Email: " . $igreja->getEmail() . "\n";
        echo "Endereço: " . $igreja->getEndereco() . "\n";
        echo "Equipe: " . $igreja->getEquipe() . "\n";
        echo "---------------------------------\n";
    }

    echo "\033[33mDigite enter para sair\033[0m";
    readline();
}