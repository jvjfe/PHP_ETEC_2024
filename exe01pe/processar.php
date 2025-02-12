<?php
    $nome = $_GET["campoNome"];
    $nota1 = $_GET["campoNota1"];
    $nota2 = $_GET["campoNota2"];
    $media = ($nota1 + $nota2) / 2;
    $resultado = ($media>=5) ? "Aprovado" : "Reprovado";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 1 PHP</title>
</head>
<body>
    <h1>RESULTADO FINAL</h1>
    <p>Nome: <?php echo $nome; ?> </p>
    <p>Nota 1: <?php echo $nota1; ?> </p>
    <p>Nota 2: <?php echo $nota2; ?> </p>
    <p>Média: <?php echo $media; ?> </p>
    <p>Resultado: <?php echo $resultado; ?> </p>

    
</body>
</html>