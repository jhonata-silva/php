<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio 02</title> 
</head>
<body>
    <h1>Fazendo conta de Soma Simples</h1>

    <h3>
        Um teste com código HTML + código do PHP, 
    </h3>
    
    <form action="ex002.php" method="post">
        <div>
            <input type="number" placeholder="Digite um número" name="numb01" />
            <input type="number" placeholder="Digite outro número" name="numb02"/>
        </div>
        <br>
        <button type="submit" name="submit">Enviar</button>
        <br><br>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Testa se a requisição é do tipo POST

            // Verifica se os valores estão definidos antes de utilizá-los
            $numb01 = isset($_POST["numb01"]) ? $_POST["numb01"] : '';
            $numb02 = isset($_POST["numb02"]) ? $_POST["numb02"] : '';

            // Verifica se ambos os valores são numéricos antes de realizar a soma
            if (is_numeric($numb01) && is_numeric($numb02)) {
                $soma = $numb01 + $numb02;
                $resultado = "$numb01 + $numb02 = $soma";
            } else {
                $resultado = "Por favor, insira valores numéricos.";
            }

            // Exibe o resultado após a verificação do formulário
            echo $resultado;
        }
    ?>
</body>
</html>
