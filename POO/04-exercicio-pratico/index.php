<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Pratico</title>
</head>
<body>
    <pre>
    <?php 
    
    require_once 'ContaBanco.php';

    //Instanciando Contas 
    $p1 = new ContaBanco();
    $p2 = new ContaBanco();

    //Atributos de $p1
    $p1->abrirConta('CC');
    $p1->setDono('Jhonata');
    $p1->setNumConta(111);

    //Atributos de $p2
    $p2->abrirConta('CP');
    $p2->setDono('Ferdinando');
    $p2->setNumConta(777);

    //testes de metodos
    echo "{$p1->getDono()} tem R$ {$p1->getSaldo()} em saldo na conta\n";
    $p1->depositar(50);
    echo "{$p1->getDono()} tem R$ {$p1->getSaldo()} em saldo na conta\n";
    $p1->sacar(150);
    $p1->sacar(50);
    echo "{$p1->getDono()} tem R$ {$p1->getSaldo()} em saldo na conta\n";

    //ver informações dos objetos
   // print_r($p1);
   // print_r($p2);

    ?>
    </pre>
</body>
</html>