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
    
    <form action="ex003.php" method="post">
        <div>
            <input type="number" placeholder="Digite um número" name="numb01"  />
            <input type="number" placeholder="Digite outro número" name="numb02"  />
        </div>
        <div>
            <br>
            <button type="submit" name="adicao">+</button>
            <button type="submit" name="subtracao">-</button>
            <button type="submit" name="multiplicacao">x</button>
            <button type="submit" name="divisao">/</button>
            <br><br>
        </div>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Testa se a requisição é do tipo POST
            $resultado = '';

            // Verifica se os valores estão definidos antes de utilizá-los
            $numb01 = isset($_POST["numb01"]) ? $_POST["numb01"] : '';
            $numb02 = isset($_POST["numb02"]) ? $_POST["numb02"] : '';


            if (isset($_POST['adicao'])) {  // Teste se o formulario foi enviado
                if (is_numeric($numb01) && is_numeric($numb02)){ // Teste se os campos são numéricos
                    $operacao = $numb01 + $numb02;
                    $resultado = "$numb01 + $numb02 = $operacao";
                } else { $resultado = 'Valor inválido'; }    
            } else if (isset($_POST['subtracao'])) {  // Teste se o formulario foi enviado
                if (is_numeric($numb01) && is_numeric($numb02)){ // Teste se os campos são numéricos
                    $operacao = $numb01 - $numb02;
                    $resultado = "$numb01 - $numb02 = $operacao";
                }  else { $resultado = 'Valor inválido'; } 
            } else if (isset($_POST['multiplicacao'])) {  // Teste se o formulario foi enviado
                if (is_numeric($numb01) && is_numeric($numb02)){ // Teste se os campos são numéricos
                    $operacao = $numb01 * $numb02;
                    $resultado = "$numb01 x $numb02 = $operacao";
                }  else { $resultado = 'Valor inválido'; } 
            } else if (isset($_POST['divisao'])) {  // Teste se o formulario foi enviado
                if (is_numeric($numb01) && is_numeric($numb02)){ // Teste se os campos são numéricos
                    $operacao = $numb01 / $numb02;
                    $resultado = "$numb01 / $numb02 = $operacao";
                }  else { $resultado = 'Valor inválido'; } 
            }

            // Exibe o resultado após a verificação do formulário
            echo $resultado;
        }
    ?>
</body>
</html>
