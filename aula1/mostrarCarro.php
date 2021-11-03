<?php
    echo "Turma 2 ano - Senac";
    require_once('Carro.php');
    if (isset($_POST['acao'])){
        echo "entrou";
        $carro = new Carro();
        $carro->setModelo($_POST['modelo']);
        $carro->setAno($_POST['Ano']);
        $carro->setCor($_POST['Cor']);
        $carro->setDocumentacao($_POST['Documentacao']);
        $carro->setQuilometragem($_POST['Quilometragem']);
        $carro->setKm1($_POST['Km1']);
        $carro->setKm2($_POST['Km2']);
        $carro->setSomaquilometragem($_POST['Somaquilometragem']);
        $carro->carroModelo();
        $carro->carroCor();
        $carro->calculo();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Carro</title>
</head>
<body>
    <form action="" method="POST">
        <label for="Modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo">
        <br>
        <label for="Ano">Ano:</label>
        <input type="text" name="Ano" id="Ano">
        <br>
        <label for="Cor">Cor:</label>
        <input type="text" name="Cor" id="Cor">
        <br>
        <label for="Documentacao">Documentação:</label>
        <input type="text" name="Documentacao" id="Documentacao">
        <br>
        <label for="Quilometragem">Quilometragem:</label>
        <input type="text" name="Quilometragem" id="Quilometragem">
        <br>
        <label for="Km1">Km1:</label>
        <input type="text" name="Km1" id="Km1">
        <br>
        <label for="Km2">Km2:</label>
        <input type="text" name="Km2" id="Km2">
        <br>
        <label for="Somaquilometragem">Soma quilometragem:</label>
        <input type="text" name="Somaquilometragem" id="Somaquilometragem">
        <br>

        <input type="submit" name="acao" value="Cadastrar">
    </form>    
</body>
</html>