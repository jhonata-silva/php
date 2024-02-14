<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio 01</title> 
</head>
<body>
    <h1>Recuperando Formulario</h1>

    <h3>
        Um teste com codigo HTML + codigo do PHP, 
    </h3>

    <form action="index001.php" method="post">
        <div>
            <input type="text" placeholder="Digite seu nome" name="nome" />
            <input type="text" placeholder="Digite seu sobrenome" name="sobrenome"/>
        </div>

        <button type="submit" name="submit">Enviar</button>
    </form>

    <?php 
        if (isset($_POST['submit'])) {  // Teste se o formulario foi enviado
            $nome = $_POST["nome"]; //recupera o valor do campo de nome nome
            $sobrenome = $_POST["sobrenome"]; //recupera o valor do campo de nome sobrenome
            echo "Olá, $nome $sobrenome";
        }           
    ?>


    

</body>
</html>