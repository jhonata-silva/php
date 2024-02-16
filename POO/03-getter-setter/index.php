<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>
<body>
    <pre>
    <?php 

    require_once 'caneta.php';
    
    $caneta01 = new Caneta();
    
    $caneta01->setModelo('Bic 4 cores');
    $modeloCaneta = $caneta01->getModelo();
    //print_r($caneta01);
    print "Eu tenho uma caneta $modeloCaneta";
    ?>
    </pre>
</body>
</html>