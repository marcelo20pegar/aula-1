<?php
    echo "Turma 2 ano - Senac";
    require_once('Aluno.php');
    if (isset($_POST['acao'])){
        echo "entrou";
        $aluno = new Aluno();
        $aluno->setNome($_POST['nome']);
        $aluno->setIdade($_POST['idade']);
        $aluno->setTurma($_POST['turma']);
        $aluno->setNota1($_POST['nota1']);
        $aluno->setNota2($_POST['nota2']);
        $aluno->fazerProva();
        $aluno->Intervalo();
        $aluno->calculo();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro alunos</title>
</head>
<body>
    <form action="" method="POST">
    <label for="nome">Nome:</label>
    <input type= "text" name="nome" id="nome"> 
    <label for="turma ">Turma:</label>
    <input type= "turma" name="turma" id="turma">
    <label for="idade">Idade:</label>
    <input type= "text" name="idade" id="idade">

    <label for="nota1">Nota 1:</label>
    <input type= "text" name="nota1" id="nota1">
    <label for="nota2">Nota 2:</label>
    <input type= "text" name="nota2" id="nota2">
    <input type="submit" name="acao" value="Cadastrar">
    </form>
</body>
</html>

