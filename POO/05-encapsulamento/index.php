<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 05</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>

    <?php 
    require_once 'ControleRemoto.php';

    $c = new ControleRemoto();
    $c->ligar();
    $c->play();
    $c->abrirMenu();
    
    $c->desligar();
    $c->pause();
    $c->abrirMenu();
    
    ?>
</body>
</html>