<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>
<body>
    <?php 

    require_once 'caneta.php';
    
    $caneta01 = new Caneta();
    $caneta01->cor = "Vermelho";
    $caneta01->ponta = 0.5;
    $caneta01->tampada = false;

    print_r($caneta01);
    
    //$caneta01->tampar();

    echo "{$caneta01->rabiscar()}";

    ?>
</body>
</html>