<?php 
include 'Aluno.php';

$aluno01 = new Aluno('jhonata', 
                    'jhonata@gmail.com', 
                    '23/09/2003');
$aluno02 = new Aluno('Rayara', 
                    'rayara@gmail.com', 
                    '21/02/2004');
$aluno03 = new Aluno('Rodrigo', 
                    'rodrigo@gmail.com', 
                    '01/05/2002');

//echo $aluno01->getNome();
//$todoAluno = $aluno01->getTodosAlunos();

$todosAlunos = Aluno::getTodosAlunos();
foreach ($todosAlunos as $matricula => $aluno) {
    echo "Aluno {$matricula}: \nNome - {$aluno->getNome()}, \nEmail - {$aluno->getEmail()}, \nData de Nascimento - {$aluno->getDataNascimento()}\n\n";
}

?>