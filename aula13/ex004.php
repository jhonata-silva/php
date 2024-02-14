<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>

    <h1>Calculadora de Média Aritmética</h1>

    <h3>
        Estudo de código HTML + código do PHP, 
    </h3>
    <form action="ex004.php" method="post">
        <div>
        <input type="number" placeholder="Primeira Nota" name="nota01" require>
        <input type="number" placeholder="Segunda Nota" name="nota02" require>
        <input type="number" placeholder="Terceira Nota" name="nota03" require>
        </div>
        <br>
        <button type="submit" name="submit">Calcular</button>
        <br><br>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $media = 0;

            $nota01 = isset($_POST['nota01']) ? $_POST['nota01'] : '';
            $nota02 = isset($_POST['nota02']) ? $_POST['nota02'] : '';
            $nota03 = isset($_POST['nota03']) ? $_POST['nota03'] : '';

            if(isset($_POST['submit'])) {
                if (is_numeric($nota01) && is_numeric($nota02) && is_numeric($nota03)){
                    $media = ($nota01 + $nota02 + $nota03) / 3;
                    echo "Media = $media";
                } else { echo "Preencha todos os Campos";}
            }       
            
            
        }
    ?>
</body>
</html>