<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <?php 
    require_once 'Aluno.php';
    require_once 'Funcionario.php';
    
    $aluno = new Aluno();
    $aluno->setNome('Matheus');
    $aluno->setIdade(20);
    $aluno->setSexo('Masc');
    $aluno->setCurso('Informatica');
    $aluno->setMatricula(true);

    $funcionario = new Funcionario();
    $funcionario->setNome('Erico');
    $funcionario->setIdade(45);
    $funcionario->setSetor('Informatica');
    $funcionario->setSexo('Masc');
    $funcionario->setTrabalhando(true);

    print_r($aluno);
    print_r($funcionario);

    ?>
    
</body>
</html>