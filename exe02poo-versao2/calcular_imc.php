<?php
    // Capturar os valores enviados pelo método GET
    $nome = $_GET["campoNome"];
    $peso = $_GET["campoPeso"];
    $altura = $_GET["campoAltura"];

    // Incluir o arquivo classeImc.php - Importar a classe
    require("classeImc.php");

    // Criar uma nova instãncia da classe Imc
    $imcCalculado = new Imc($nome,$peso,$altura); // Imc() é método construtor da classe Imc
    
    // Definir as variáveis $imc e $resultado
    $imc = $imcCalculado->getImc();
    $resultado = $imcCalculado->getResultado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC com POO</title>
</head>
<body>
    <h1>Resultado do IMC &hearts; </h1>
    <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
    <p>Peso: <?php echo htmlspecialchars($peso); ?></p>
    <p>Altura: <?php echo htmlspecialchars($altura); ?></p>
    <p>IMC: <?php echo number_format($imc,2); ?></p>
    <p>Resultado: <?php echo $resultado; ?></p>    
</body>
</html>