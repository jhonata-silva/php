<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once   'Lutador.php';

    $l = array();
    $l[0] = new Lutador('Pretty Boy', 'França', 30, 1.75, 90.9, 11, 2, 1);
    $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador('SnapShadow', 'EUA', 35, 1.93, 80.9, 12, 2, 3);
    $l[3] = new Lutador('Dead Code', 'Australia', 28, 1.70, 81.6, 13, 0, 2);
    $l[4] = new Lutador('UFOCobol', 'Brasil', 37, 1.19, 119.3, 5, 4, 3);
    $l[5] = new Lutador('Nerdaart', 'EUA', 30, 1.81, 105.7, 1, 1, 1);
    
    $l[5]->status();   
    echo  $l[5]->perderLuta();
    echo $l[5]->empatarLuta();    
    echo $l[5]->empatarLuta();    
    echo $l[5]->getVitorias();    
    
    $l[5]->status();   
    
    //$l[3]->apresentar();

    ?>
</body>
</html>